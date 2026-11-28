2<?php
session_start();
require_once("security.php");
require_once("settings.php");


$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST['username'] ?? null;
    $pass = $_POST['password'] ?? null;
    if (!csrf_token_is_valid($_POST['csrf_token'] ?? null)) {
        $error = "Please refresh the page and try again.";
    } elseif (!is_string($userInput) || !is_string($pass)) {
        $error = "Invalid username or password.";
    } else {
        $user = trim($userInput);
        if ($user === '' || $pass === '' || strlen($user) > 254 || strlen($pass) > 72) {
            $error = "Invalid username or password.";
        } else {
            try {
                $sql = "SELECT id, username, password FROM users WHERE username = ? OR email = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $user, $user);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    if (password_verify($pass, $row['password'])) {
                        session_regenerate_id(true);
                        $_SESSION['user_id'] = $row['id'];
                        $_SESSION['username'] = $row['username'];
                        header("Location: index.php");
                        exit();
                    }
                }

                $error = "Invalid username or password.";
                $stmt->close();
            } catch (mysqli_sql_exception $exception) {
                error_log("Login database error: " . $exception->getMessage());
                $error = "Login could not be completed. Please try again.";
            }
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
        <h2>Account Login</h2>
        
        <?php if (!empty($error)) echo "<div class='error'>" . htmlspecialchars($error, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "</div>"; ?>
        
        <form action="login.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(csrf_token(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>">
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