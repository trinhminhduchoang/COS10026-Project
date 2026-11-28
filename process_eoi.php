<?php
session_start();
require_once "security.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: apply_en.php");
    exit();
}

function render_application_errors(array $errors, int $status = 400): void
{
    http_response_code($status);
    echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Check Your Details</title></head><body style='font-family: Arial, sans-serif; padding: 30px;'>";
    echo "<h2>Please check these details:</h2><ul>";
    foreach ($errors as $error) {
        echo "<li>" . htmlspecialchars($error, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "</li>";
    }
    echo "</ul><p><a href='javascript:history.back()'>Go back and try again</a></p></body></html>";
    exit();
}

if (!csrf_token_is_valid($_POST['csrf_token'] ?? null)) {
    render_application_errors(["Please refresh the page and submit the form again."], 403);
}

require_once "settings.php";

$errors = [];
$readPostString = static function (string $key) use (&$errors): string {
    if (!isset($_POST[$key]) || !is_string($_POST[$key])) {
        $errors[] = "Please check the information you entered and try again.";
        return '';
    }

    return trim($_POST[$key]);
};

$jobReference = strtoupper($readPostString('jobReference'));
$firstName = $readPostString('firstName');
$lastName = $readPostString('lastName');
$dateOfBirth = $readPostString('dateOfBirth');
$gender = $readPostString('gender');
$streetAddress = $readPostString('streetAddress');
$suburb = $readPostString('suburb');
$state = strtoupper($readPostString('state'));
$postcode = $readPostString('postcode');
$email = $readPostString('email');
$phone = $readPostString('phone');
if (array_key_exists('otherSkills', $_POST) && !is_string($_POST['otherSkills'])) {
    $errors[] = "Please provide valid application details.";
    $otherSkills = '';
} else {
    $otherSkills = isset($_POST['otherSkills']) ? trim($_POST['otherSkills']) : '';
}

$validStates = ['VIC', 'NSW', 'QLD', 'NT', 'WA', 'SA', 'TAS', 'ACT'];
$validJobReferences = ['ED105', 'UX204', 'UX307', 'ED412'];
$validSkills = [
    'web-development',
    'accessible-design',
    'learning-design',
    'user-research',
    'content-writing',
    'project-management',
];

if (!in_array($jobReference, $validJobReferences, true)) {
    $errors[] = "Enter a job code shown on the Careers page.";
}
if (preg_match("/\A[\p{L}][\p{L} .'-]{0,39}\z/u", $firstName) !== 1) {
    $errors[] = "First name must contain 1 to 40 letters.";
}
if (preg_match("/\A[\p{L}][\p{L} .'-]{0,39}\z/u", $lastName) !== 1) {
    $errors[] = "Last name must contain 1 to 40 letters.";
}

$dob = DateTimeImmutable::createFromFormat('!Y-m-d', $dateOfBirth);
$dobErrors = DateTimeImmutable::getLastErrors();
if (
    $dateOfBirth === ''
    || $dob === false
    || ($dobErrors !== false && ($dobErrors['warning_count'] > 0 || $dobErrors['error_count'] > 0))
    || ($dob !== false && $dob->format('Y-m-d') !== $dateOfBirth)
) {
    $errors[] = "Please enter a valid date of birth.";
} else {
    $today = new DateTimeImmutable('today');
    $age = $dob->diff($today);
    if ($dob > $today || $age->y < 15 || $age->y > 80) {
        $errors[] = "Applicant age must be between 15 and 80 years old.";
    }
}

if (!in_array($gender, ['female', 'male', 'prefer-not-to-say'], true)) {
    $errors[] = "Please select a valid gender option.";
}

$textLength = static function (string $value): int {
    $length = preg_match_all('/./us', $value);
    return $length === false ? PHP_INT_MAX : $length;
};

foreach ([$streetAddress, $suburb, $otherSkills] as $textValue) {
    if (preg_match('//u', $textValue) !== 1) {
        $errors[] = "Some text could not be read. Please re-enter it using normal text.";
        break;
    }
}

if ($streetAddress === '' || $textLength($streetAddress) > 80) {
    $errors[] = "Street address is required (max 80 characters).";
}
if ($suburb === '' || $textLength($suburb) > 80) {
    $errors[] = "Enter your suburb or town (up to 80 characters).";
}
if (!in_array($state, $validStates, true)) {
    $errors[] = "Choose an Australian state or territory from the list.";
}
if (!preg_match('/^[0-9]{4,6}$/', $postcode)) {
    $errors[] = "Postcode must be 4 to 6 digits.";
}
if (strlen($email) > 254 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}
if (!preg_match('/^[0-9]{8,12}$/', $phone)) {
    $errors[] = "Enter a phone number using 8 to 12 digits, with no spaces.";
}
if ($textLength($otherSkills) > 2000) {
    $errors[] = "Other skills must be 2000 characters or fewer.";
}

$skillsArr = [];
if (isset($_POST['skills'])) {
    if (!is_array($_POST['skills']) || count($_POST['skills']) > count($validSkills)) {
        $errors[] = "Please choose skills from the list.";
    } else {
        foreach ($_POST['skills'] as $skill) {
            if (!is_string($skill) || !in_array($skill, $validSkills, true)) {
                $errors[] = "Please choose skills from the list.";
                $skillsArr = [];
                break;
            }
            $skillsArr[] = $skill;
        }
    }
}
$skillsArr = array_values(array_unique($skillsArr));
$skillsStr = implode(", ", $skillsArr);

$upload = null;
if (isset($_FILES['cv'])) {
    $file = $_FILES['cv'];
    if (!is_array($file) || !isset($file['error']) || !is_int($file['error'])) {
        $errors[] = "Invalid CV upload.";
    } elseif ($file['error'] !== UPLOAD_ERR_NO_FILE) {
        if (
            $file['error'] !== UPLOAD_ERR_OK
            || !isset($file['tmp_name'], $file['size'])
            || !is_string($file['tmp_name'])
            || !is_int($file['size'])
            || $file['size'] < 1
            || $file['size'] > 5 * 1024 * 1024
            || !is_uploaded_file($file['tmp_name'])
        ) {
            $errors[] = "CV must be a valid file no larger than 5 MB.";
        } else {
            $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = $fileInfo ? finfo_file($fileInfo, $file['tmp_name']) : false;
            if ($fileInfo) {
                finfo_close($fileInfo);
            }

            $mimeExtensions = [
                'application/pdf' => 'pdf',
                'image/jpeg' => 'jpg',
                'image/png' => 'png',
                'image/webp' => 'webp',
            ];
            if (!is_string($mimeType) || !isset($mimeExtensions[$mimeType])) {
                $errors[] = "Your CV must be a PDF, JPG, PNG, or WEBP file.";
            } else {
                $upload = [
                    'temporary_path' => $file['tmp_name'],
                    'extension' => $mimeExtensions[$mimeType],
                ];
            }
        }
    }
}

if ($errors) {
    render_application_errors($errors);
}

$cvPath = null;
$savedFilePath = null;
if ($upload !== null) {
    $uploadDirectory = getenv('APP_PRIVATE_UPLOAD_DIR');
    if ($uploadDirectory === false || $uploadDirectory === '') {
        $uploadDirectory = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'private_uploads';
    }

    if (!is_dir($uploadDirectory) && !mkdir($uploadDirectory, 0700, true) && !is_dir($uploadDirectory)) {
        render_application_errors(["We couldn't save your CV. Please try again."], 500);
    }

    try {
        $fileName = bin2hex(random_bytes(16)) . '.' . $upload['extension'];
    } catch (Throwable $exception) {
        error_log("CV filename generation error: " . $exception->getMessage());
        render_application_errors(["We couldn't save your CV. Please try again."], 500);
    }

    $savedFilePath = rtrim($uploadDirectory, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $fileName;
    if (!move_uploaded_file($upload['temporary_path'], $savedFilePath)) {
        render_application_errors(["We couldn't save your CV. Please try again."], 500);
    }
    $cvPath = $fileName;
}

$sql = "INSERT INTO eoi (
            job_reference, first_name, last_name, dob, gender,
            street, suburb, state, postcode, email, phone,
            skills, other_skills, cv_path
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

try {
    $stmt = $conn->prepare($sql);
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
    $stmt->execute();
    $eoiNumber = $stmt->insert_id;
    $stmt->close();
} catch (mysqli_sql_exception $exception) {
    if ($savedFilePath !== null && is_file($savedFilePath)) {
        unlink($savedFilePath);
    }
    error_log("EOI database error: " . $exception->getMessage());
    render_application_errors(["We couldn't submit your application. Please try again."], 500);
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 30px;">
    <h2>Application Submitted Successfully!</h2>
    <p>Thank you, <strong><?php echo htmlspecialchars($firstName . ' ' . $lastName, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></strong>.</p>
    <p>Your application number is: <strong>#<?php echo (int) $eoiNumber; ?></strong></p>
    <p><a href="index.php">Return to Home</a></p>
</body>
</html>