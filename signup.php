<?php
include 'db.php';
session_start();

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pass = $_POST['password'];

    if (empty($user) || empty($email) || empty($pass)) {
        $error = "Please fill in the information!";
    } else {
        // Kiểm tra xem tên đăng nhập hoặc email đã tồn tại chưa
        $sql = "SELECT id FROM users WHERE username = ? OR email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $user, $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "Username or email has already been used!";
        } else {
            // Mã hóa mật khẩu bảo mật
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

            $insert_sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $insert_stmt = $conn->prepare($insert_sql);
            $insert_stmt->bind_param("sss", $user, $email, $hashed_password);

            if ($insert_stmt->execute()) {
                $success = "Signed up successfully <a href='login.php'>Login now</a>";
            } else {
                $error = "An error has occured, please try again.";
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
</head>
<body>
    <div class="auth-card">
        <h2>Account Signup</h2>
        
        <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>
        <?php if (!empty($success)) echo "<div class='success'>$success</div>"; ?>
        
        <form action="signup.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
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