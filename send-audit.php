<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = strip_tags(trim($_POST["name"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $website = strip_tags(trim($_POST["website"] ?? ''));
    $challenges = strip_tags(trim($_POST["challenges"] ?? ''));

    // Validation
    if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Invalid input data."]);
        exit;
    }

    // Email content
    $recipient = "hello@ramaniinfosys.com";
    $subject = "New Free Audit Request from $name";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Website: $website\n";
    $email_content .= "Challenges:\n$challenges\n"; // Fixed variable name from invalid char

    $headers = "From: $name <$email>";

    // Try sending email
    $mail_sent = @mail($recipient, $subject, $email_content, $headers);

    // Save to Database
    require_once 'includes/db.php';
    $stmt = $conn->prepare("INSERT INTO audit_requests (name, email, website, challenges) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $website, $challenges);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    // If mail fails (common on localhost), log it instead and return success
    if (!$mail_sent) {
        $log_entry = "--- New Audit Request (" . date('Y-m-d H:i:s') . ") ---\n" . $email_content . "\n";
        file_put_contents('audit_requests_log.txt', $log_entry, FILE_APPEND);
    }

    // Always return success if validation passed, so the user sees the brochure
    http_response_code(200);
    echo json_encode(["status" => "success", "message" => "Audit request received."]);

} else {
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Method Not Allowed"]);
}
?>