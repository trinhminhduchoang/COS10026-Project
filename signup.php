<?php
session_start();
require_once("security.php");
require_once("settings.php");


$error = "";
$success = "";

// PHẢI CÓ ĐOẠN NÀY ĐỂ NHẬN DỮ LIỆU KHI NGƯỜI DÙNG BẤM NÚT SIGNUP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST['username'] ?? null;
    $emailInput = $_POST['email'] ?? null;
    $pass = $_POST['password'] ?? null;

    if (!csrf_token_is_valid($_POST['csrf_token'] ?? null)) {
        $error = "Please refresh the page and try again.";
    } elseif (!is_string($userInput) || !is_string($emailInput) || !is_string($pass)) {
        $error = "Please provide valid signup information.";
    } else {
        $user = trim($userInput);
        $email = trim($emailInput);

        if ($user === '' || $email === '' || $pass === '') {
            $error = "Please complete all fields.";
        } elseif (!preg_match('/^[a-zA-Z0-9]{3,16}$/', $user)) {
        $error = "Username must be 3 to 16 letters or numbers, with no spaces.";
        } elseif (strlen($email) > 254 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Please enter a valid email address.";
        } elseif (strlen($pass) < 8) {
            $error = "Password must be at least 8 characters long.";
        } elseif (strlen($pass) > 72) {
            $error = "Password is too long. Please use a shorter password.";
        } else {
            try {
                $sql = "SELECT id FROM users WHERE username = ? OR email = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $user, $email);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $error = "That username or email address is already in use.";
                } else {
                    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
                    $insertSql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                    $insertStmt = $conn->prepare($insertSql);
                    $insertStmt->bind_param("sss", $user, $email, $hashedPassword);
                    $insertStmt->execute();
                    $success = "Signed up successfully.";
                    $insertStmt->close();
                }

                $stmt->close();
            } catch (mysqli_sql_exception $exception) {
                error_log("Signup database error: " . $exception->getMessage());
                $error = "Signup could not be completed. Please try again.";
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
    <title>Signup - EduTechies</title>

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
        .success { color: #28a745; background: #d4edda; padding: 8px; border-radius: 4px; margin-bottom: 15px; font-size: 14px; text-align: center; }
        .link-text { text-align: center; margin-top: 15px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="auth-card">
        <h2>Account Signup</h2>
        
        <?php if (!empty($error)) echo "<div class='error'>" . htmlspecialchars($error, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "</div>"; ?>
        <?php if (!empty($success)) echo "<div class='success'>" . htmlspecialchars($success, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . " <a href='login.php'>Login now</a></div>"; ?>
        
        <form action="signup.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(csrf_token(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" minlength="3" maxlength="16" pattern="[a-zA-Z0-9]+" title="Use 3 to 16 letters or numbers, with no spaces." required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn-submit">Signup</button>
        </form>
        
        <div class="link-text">
            Already have an account? <a href="login.php">Login now</a>
        </div>
    </div>
</body>
</html>