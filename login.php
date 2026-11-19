<?php
require_once("settings.php");
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['username']);
    $pass = $_POST['password'];
    if (empty($user) || empty($pass)) {
        $error = "Please enter a username and password.";
    } else {
        $sql = "SELECT id, username, password FROM users WHERE username = ? OR email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $user, $user);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            
            if (password_verify($pass, $row['password'])) {
                
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header("Location:index_en.php");
                exit();
            } else {
                $error = "Invalid password. Please try again.";
            }
        } else {
            $error = "Invalid username or email. Please try again.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EduTechies</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <style>
        body { display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f0f4f8; margin: 0; }
        .auth-card { background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 360px; }
        .auth-card h2 { text-align: center; color: #1e3a8a; margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: 600; color: #333; }
        .form-group input { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; box-sizing: border-box; }
        .btn-submit { width: 100%; padding: 10px; background: #1e3a8a; color: white; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; }
        .btn-submit:hover { background: #1d4ed8; }
        .error { color: #dc3545; background: #f8d7da; padding: 8px; border-radius: 4px; margin-bottom: 15px; font-size: 14px; text-align: center; }
        .link-text { text-align: center; margin-top: 15px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="auth-card">
        <h2>Login</h2>
        
        <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>
        
        <form action="login.php" method="POST">
            <div class="form-group">
                <label>Username or Email</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn-submit">Login</button>
        </form>
        
        <div class="link-text">
            No account? <a href="signup.php">Sign up now</a>
        </div>
    </div>
</body>
</html>