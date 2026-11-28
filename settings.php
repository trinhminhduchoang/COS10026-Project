<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "user_system";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($host, $username, $password, $dbname);
    $conn->set_charset("utf8mb4");

} catch (mysqli_sql_exception $exception) {
    error_log("Database connection error: " . $exception->getMessage());
    http_response_code(500);
    exit("Something went wrong. Please try again later.");
}
?>