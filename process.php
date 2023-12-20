<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "logbook";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname) or die('Error connecting to Database');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Assuming you have a function to sanitize input
function sanitize($data) {
    // Implement your sanitization logic here
    return $data;
}

// Assuming $_POST['course'] is sanitized
$selectedCourseCode = sanitize($_POST['course']);

// Get the course name based on the code
$courseCodes = array(
    'AS201' => 'Bachelor of Science (Hons.) Biology - KAMPUS ARAU',
    // Add other course codes and names
);
$selectedCourseName = isset($courseCodes[$selectedCourseCode]) ? $courseCodes[$selectedCourseCode] : 'Unknown Course';

// Upload image
$imagePath = ''; // Initialize as an empty string
if ($_FILES['studentImage']['error'] == 0) {
    $uploadDir = 'uploads/'; // Create an 'uploads' directory to store images
    $imageName = $_FILES['studentImage']['name'];
    $imagePath = $uploadDir . $imageName;
    move_uploaded_file($_FILES['studentImage']['tmp_name'], $imagePath);
}

// Insert data into the database
$sql = "INSERT INTO student_data (name, dob, utmId, icNumber, course, semester, year, homeAddress, trainingAddress, companyAddress, companyContact, supervisorName, supervisorPosition, supervisorEmail, trainingDurationFrom, trainingDurationTo, emergencyName, emergencyAddress, emergencyContact, emergencyRelationship, studentImage) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Check if the statement was prepared successfully
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param("sssssssssssssssssssss", $name, $dob, $utmId, $icNumber, $selectedCourseName, $semester, $year, $homeAddress, $trainingAddress, $companyAddress, $companyContact, $supervisorName, $supervisorPosition, $supervisorEmail, $trainingDurationFrom, $trainingDurationTo, $emergencyName, $emergencyAddress, $emergencyContact, $emergencyRelationship, $imagePath);

// Assuming these variables are sanitized
$name = sanitize($_POST['name']);
$dob = sanitize($_POST['dob']);
$utmId = sanitize($_POST['utmId']);
$icNumber = sanitize($_POST['icNumber']);
$semester = sanitize($_POST['semester']);
$year = sanitize($_POST['year']);
$homeAddress = sanitize($_POST['homeAddress']);
$trainingAddress = sanitize($_POST['trainingAddress']);
$companyAddress = sanitize($_POST['companyAddress']);
$companyContact = sanitize($_POST['companyContact']);
$supervisorName = sanitize($_POST['supervisorName']);
$supervisorPosition = sanitize($_POST['supervisorPosition']);
$supervisorEmail = sanitize($_POST['supervisorEmail']);
$trainingDurationFrom = sanitize($_POST['trainingDurationFrom']);
$trainingDurationTo = sanitize($_POST['trainingDurationTo']);
$emergencyName = sanitize($_POST['emergencyName']);
$emergencyAddress = sanitize($_POST['emergencyAddress']);
$emergencyContact = sanitize($_POST['emergencyContact']);
$emergencyRelationship = sanitize($_POST['emergencyRelationship']);

// After executing the SQL statement
if (!$stmt->execute()) {
    die("Error executing statement: " . $stmt->error);
}

$stmt->close();
$conn->close();

?>
