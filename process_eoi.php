<?php
session_start();
require_once "settings.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: apply_en.php");
    exit();
}


$jobReference  = isset($_POST['jobReference']) ? strtoupper(trim($_POST['jobReference'])) : '';
$firstName     = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
$lastName      = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
$dateOfBirth   = isset($_POST['dateOfBirth']) ? trim($_POST['dateOfBirth']) : '';
$gender        = isset($_POST['gender']) ? trim($_POST['gender']) : '';
$streetAddress = isset($_POST['streetAddress']) ? trim($_POST['streetAddress']) : '';
$suburb        = isset($_POST['suburb']) ? trim($_POST['suburb']) : '';
$state         = isset($_POST['state']) ? trim($_POST['state']) : '';
$postcode      = isset($_POST['postcode']) ? trim($_POST['postcode']) : '';
$email         = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone         = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$otherSkills   = isset($_POST['otherSkills']) ? trim($_POST['otherSkills']) : '';


$skillsArr = (isset($_POST['skills']) && is_array($_POST['skills'])) ? $_POST['skills'] : [];
$skillsStr = implode(", ", array_map('trim', $skillsArr));


$errors = [];
$validStates = ['VIC', 'NSW', 'QLD', 'NT', 'WA', 'SA', 'TAS', 'ACT'];

if (!preg_match('/^[A-Za-z0-9]{5}$/', $jobReference)) {
    $errors[] = "Job reference must be exactly 5 alphanumeric characters.";
}
if (!preg_match('/^[A-Za-z]{1,20}$/', $firstName)) {
    $errors[] = "First name must contain 1 to 20 letters only.";
}
if (!preg_match('/^[A-Za-z]{1,20}$/', $lastName)) {
    $errors[] = "Last name must contain 1 to 20 letters only.";
}
if ($dateOfBirth === '') {
    $errors[] = "Date of birth is required.";
} else {
    $dobObj = DateTime::createFromFormat('Y-m-d', $dateOfBirth);
    if (!$dobObj) {
        $errors[] = "Invalid date of birth format.";
    } else {
        $age = $dobObj->diff(new DateTime())->y;
        if ($age < 15 || $age > 80) {
            $errors[] = "Applicant age must be between 15 and 80 years old.";
        }
    }
}
if (!in_array($gender, ['female', 'male', 'prefer-not-to-say'], true)) {
    $errors[] = "Please select a valid gender option.";
}
if ($streetAddress === '' || strlen($streetAddress) > 40) {
    $errors[] = "Street address is required (max 40 characters).";
}
if ($suburb === '' || strlen($suburb) > 40) {
    $errors[] = "Suburb/town is required (max 40 characters).";
}
if (!in_array($state, $validStates, true)) {
    $errors[] = "Please select a valid Australian state or territory.";
}
if (!preg_match('/^[0-9]{4}$/', $postcode)) {
    $errors[] = "Postcode must be exactly 4 digits.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}
if (!preg_match('/^[0-9]{8,12}$/', $phone)) {
    $errors[] = "Phone number must be 8 to 12 digits with no spaces.";
}


$cvPath = null;
if (isset($_FILES['cv']) && $_FILES['cv']['error'] !== UPLOAD_ERR_NO_FILE) {
    if ($_FILES['cv']['error'] === UPLOAD_ERR_OK) {
        $allowedExt = ['pdf', 'jpg', 'jpeg', 'png', 'webp'];
        $ext = strtolower(pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $allowedExt, true)) {
            $errors[] = "CV file must be a PDF or image (JPG, PNG, WEBP).";
        } else {
            $uploadDir = "uploads/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $newFileName = uniqid("cv_", true) . "." . $ext;
            $targetFile  = $uploadDir . $newFileName;
            if (move_uploaded_file($_FILES['cv']['tmp_name'], $targetFile)) {
                $cvPath = $targetFile;
            } else {
                $errors[] = "Failed to save uploaded CV file.";
            }
        }
    } else {
        $errors[] = "Error uploading CV file.";
    }
}


if (!empty($errors)) {
    echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Application Error</title></head><body style='font-family: Arial, sans-serif; padding: 30px;'>";
    echo "<h2>Please fix the following errors:</h2><ul>";
    foreach ($errors as $error) {
        echo "<li>" . htmlspecialchars($error) . "</li>";
    }
    echo "</ul><p><a href='javascript:history.back()'>← Go back and fix</a></p></body></html>";
    exit();
}


$sql = "INSERT INTO eoi (
            job_reference, first_name, last_name, dob, gender,
            street, suburb, state, postcode, email, phone,
            skills, other_skills, cv_path
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Database prepare error: " . htmlspecialchars($conn->error));
}

$stmt->bind_param(
    "ssssssssssssss",
    $jobReference,
    $firstName,
    $lastName,
    $dateOfBirth,
    $gender,
    $streetAddress,
    $suburb,
    $state,
    $postcode,
    $email,
    $phone,
    $skillsStr,
    $otherSkills,
    $cvPath
);

if ($stmt->execute()) {
    $eoiNumber = $stmt->insert_id;
    echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Application Submitted</title></head><body style='font-family: Arial, sans-serif; padding: 30px;'>";
    echo "<h2>Application Submitted Successfully!</h2>";
    echo "<p>Thank you, <strong>" . htmlspecialchars($firstName . " " . $lastName) . "</strong>.</p>";
    echo "<p>Your EOI Reference Number is: <strong>#" . (int)$eoiNumber . "</strong></p>";
    echo "<p><a href='index_en.php'>Return to Home</a> | <a href='manage.php'>Manage Applications</a></p>";
    echo "</body></html>";
} else {
    echo "Database insert error: " . htmlspecialchars($stmt->error);
}

$stmt->close();
$conn->close();