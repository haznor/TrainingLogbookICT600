<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="shortcut icon" type="x-icon" href="uitmlogo.png">
    <link rel="stylesheet" type="text/css" href="styledisplay.css">
</head>
<div class="topnav">
  <a href="index.php">Home</a>
  <a class="active" href="form.php">Form</a>
  <a href="profile.php">Profile</a>
</div>
<body>

<div class="container">
    <img src="uitm.jpg" alt="UITM Logo" width="200" height="200">
    <h1>Industrial Training Logbook</h1>
    <br>
    <fieldset>
        <legend>Students Details</legend>
        <?php
        echo '<p><strong>Name:</strong> ' . $_POST['name'] . '</p>';
        echo '<p><strong>Date of Birth:</strong> ' . $_POST['dob'] . '</p>';
        echo '<p><strong>UTM ID:</strong> ' . $_POST['utmId'] . '</p>';
        echo '<p><strong>IC Number:</strong> ' . $_POST['icNumber'] . '</p>';

        $courseCodes = array(
            'AS201' => 'AS201 = Bachelor of Science (Hons.) Biology - KAMPUS ARAU',
            'AS203' => 'AS203 = Bachelor of Science (Hons.) Physics',
            'AS222' => 'AS222 = Bachelor of Science (Hons.) Chemistry with Management',
            'AS243' => 'AS243 = Bachelor of Science (Hons) Polymer Technology',
            'AS245' => 'AS245 = Bachelor of Science (Hons) Applied Chemistry',
            'AS256' => 'AS256 = Bachelor of Science (Hons.) Marine Technology',
            'BA240' => 'BA240 = Bachelor of Business Administration (Hons) Marketing',
            'BA242' => 'BA242 = Bachelor of Business Administration (Hons) Finance',
            'BA243' => 'BA243 = Bachelor of Business Administration (Hons) Human Resource Management',
            'CS240' => 'CS240 = Bachelor Of Information Technology(Hons.)',
            'SR243' => 'SR243 = Bachelor of Sports Science (Hons.)'
        );
        
        if (isset($_POST['course'])) {
            $selectedCourseCode = $_POST['course'];
        
            if (array_key_exists($selectedCourseCode, $courseCodes)) {
                $selectedCourseName = $courseCodes[$selectedCourseCode];
                echo '<p><strong>Course:</strong> ' . $selectedCourseName . '</p>';
            } else {
                echo '<p><strong>Course:</strong> Unknown Course</p>';
            }
        } else {
            echo '<p><strong>Course:</strong> No Course Selected</p>';
        }   
        echo '<p><strong>Semester and Year:</strong> ' . $_POST['semester'] . ' - ' . $_POST['year'] . '</p>';
        echo '<p><strong>Home Address:</strong> ' . $_POST['homeAddress'] . '</p>';
        echo '<p><strong>Address during Practical Training:</strong> ' . $_POST['trainingAddress'] . '</p>';
        ?>
    </fieldset>

    <fieldset>
        <legend>Training Details</legend>
        <?php
        echo '<p><strong>Company and Address:</strong> ' . $_POST['companyAddress'] . '</p>';
        echo '<p><strong>Company Contact No:</strong> ' . $_POST['companyContact'] . '</p>';
        echo '<p><strong>Name of Supervisor In-charge:</strong> ' . $_POST['supervisorName'] . '</p>';
        echo '<p><strong>Position of Supervisor In-charge:</strong> ' . $_POST['supervisorPosition'] . '</p>';
        echo '<p><strong>Email of Supervisor In-charge:</strong> ' . $_POST['supervisorEmail'] . '</p>';
        echo '<p><strong>Training Duration:</strong> ' . $_POST['trainingDurationFrom'] . ' to ' . $_POST['trainingDurationTo'] . '</p>';
        ?>
    </fieldset>

    <fieldset>
        <legend>Contact Person (In Emergency)</legend>
        <?php
        echo '<p><strong>Name:</strong> ' . $_POST['emergencyName'] . '</p>';
        echo '<p><strong>Address:</strong> ' . $_POST['emergencyAddress'] . '</p>';
        echo '<p><strong>HP No:</strong> ' . $_POST['emergencyContact'] . '</p>';
        echo '<p><strong>Relationship:</strong> ';

        if ($_POST['emergencyRelationship'] === 'parent') {
            echo 'Parent';
        } elseif ($_POST['emergencyRelationship'] === 'sibling') {
            echo 'Sibling';
        } elseif ($_POST['emergencyRelationship'] === 'relative') {
            echo 'Relative';
        } elseif ($_POST['emergencyRelationship'] === 'friend') {
            echo 'Friend';
        } else {
            echo 'Not specified';
        }

        echo '</p>';
        ?>
    </fieldset>
    <button class="print-button" onclick="printPage()">Print</button>

    <script>
        function printPage() {
            window.print();
        }
    </script>
    
</div>
</body>
</html>
<?php include_once('footer.php'); ?>
        