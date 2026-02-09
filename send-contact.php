<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $fullName = strip_tags(trim($_POST["fullName"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $website = strip_tags(trim($_POST["website"] ?? ''));
    $requirement = strip_tags(trim($_POST["requirement"] ?? ''));
    $message = strip_tags(trim($_POST["message"] ?? ''));

    // Validation
    if (empty($fullName) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($requirement) || empty($message)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Please fill in all required fields."]);
        exit;
    }

    // Email content
    $recipient = "hello@ramaniinfosys.com";
    $subject = "New Contact Inquiry from $fullName";

    $email_content = "Name: $fullName\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Website: $website\n";
    $email_content .= "Requirement: $requirement\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $fullName <$email>";

    // Try sending email
    $mail_sent = @mail($recipient, $subject, $email_content, $headers);

    // Save to Database
    // Save to Database
    require_once 'includes/db.php';
    if ($conn) {
        $stmt = $conn->prepare("INSERT INTO contacts (full_name, email, website, requirement, message) VALUES (?, ?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("sssss", $fullName, $email, $website, $requirement, $message);
            $stmt->execute();
            $stmt->close();
        }
        $conn->close();
    }

    // If mail fails (common on localhost), log it instead and return success
    if (!$mail_sent) {
        $log_entry = "--- New Contact Inquiry (" . date('Y-m-d H:i:s') . ") ---\n" . $email_content . "\n";
        file_put_contents('contact_inquiries_log.txt', $log_entry, FILE_APPEND);
    }

    // Always return success if validation passed
    http_response_code(200);
    echo json_encode(["status" => "success", "message" => "Message sent successfully."]);

} else {
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Method Not Allowed"]);
}
?>