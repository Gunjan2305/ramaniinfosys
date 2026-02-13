<?php
session_start();
require_once '../includes/db.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $error = "Please enter both username and password.";
    } else {
        $stmt = $conn->prepare("SELECT id, username, password FROM admin_users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['admin_username'] = $row['username'];
                header("Location: dashboard.php");
                exit;
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid username or password.";
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Ramani Infosys</title>
    <link rel="icon" type="image/jpeg" href="../assets/img/favicon.jpeg">
    <link rel="shortcut icon" type="image/jpeg" href="../assets/img/favicon.jpeg">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Main Style -->
    <link rel="stylesheet" href="../assets/css/style2.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Outfit', sans-serif;
            background-color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            /* Radial gradient background for premium feel */
            background: radial-gradient(circle at center, #111 0%, #000 100%);
        }

        .login-container {
            background: rgba(20, 20, 20, 0.95);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
            max-width: 420px;
            text-align: center;
            position: relative;
            z-index: 10;
        }

        /* Glow effect behind the card */
        .login-container::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #00BFFF, transparent, #8A2BE2);
            z-index: -1;
            border-radius: 22px;
            opacity: 0.3;
            filter: blur(20px);
        }

        .login-container h2 {
            margin-bottom: 2rem;
            color: #fff;
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.2;
        }
        
        .login-container h2 span {
            background: linear-gradient(90deg, #00BFFF, #8A2BE2);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #ccc;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 1rem;
            background: #222;
            border: 1px solid #333;
            border-radius: 10px;
            color: #fff;
            font-family: 'Outfit', sans-serif;
            font-size: 1rem;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #00BFFF;
            box-shadow: 0 0 15px rgba(0, 191, 255, 0.2);
            background: #2a2a2a;
        }

        .btn-login {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(90deg, #00BFFF, #8A2BE2);
            color: #fff;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 191, 255, 0.4);
            filter: brightness(1.1);
        }

        .error {
            background: rgba(220, 53, 69, 0.2);
            border: 1px solid rgba(220, 53, 69, 0.5);
            color: #ff6b6b;
            padding: 0.8rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .back-link {
            display: inline-block;
            text-align: center;
            margin-top: 2rem;
            text-decoration: none;
            color: #888;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: #00BFFF;
        }
        
        .default-creds {
             text-align:center; 
             font-size: 0.8rem; 
             color:#555; 
             margin-top:1.5rem;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login to <br> <span>Ramani Infosys</span></h2>
        <?php if ($error): ?>
            <div class="error">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
        <a href="../" class="back-link">← Back to Website</a>
    </div>
</body>

</html>