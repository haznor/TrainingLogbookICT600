    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Industrial Training LogBook Form</title>
            <link rel="shortcut icon" type="x-icon" href="uitmlogo.png">
            <link rel="stylesheet" type="text/css" href="style1.css">
            <script>
        function validateForm() {
            var name = document.forms["logBookForm"]["name"].value;
            var dob = document.forms["logBookForm"]["dob"].value;
            var utmId = document.forms["logBookForm"]["utmId"].value;
            var icNumber = document.forms["logBookForm"]["icNumber"].value;
            var course = document.forms["logBookForm"]["course"].value;
            var semester = document.forms["logBookForm"]["semester"].value;
            var year = document.forms["logBookForm"]["year"].value;
            var homeAddress = document.forms["logBookForm"]["homeAddress"].value;
            var trainingAddress = document.forms["logBookForm"]["trainingAddress"].value;
            var companyAddress = document.forms["logBookForm"]["companyAddress"].value;
            var companyContact = document.forms["logBookForm"]["companyContact"].value;
            var supervisorName = document.forms["logBookForm"]["supervisorName"].value;
            var supervisorPosition = document.forms["logBookForm"]["supervisorPosition"].value;
            var supervisorEmail = document.forms["logBookForm"]["supervisorEmail"].value;
            var trainingDurationFrom = document.forms["logBookForm"]["trainingDurationFrom"].value;
            var trainingDurationTo = document.forms["logBookForm"]["trainingDurationTo"].value;
            var emergencyName = document.forms["logBookForm"]["emergencyName"].value;
            var emergencyAddress = document.forms["logBookForm"]["emergencyAddress"].value;
            var emergencyContact = document.forms["logBookForm"]["emergencyContact"].value;
            var emergencyRelationship = document.querySelector('input[name="emergencyRelationship"]:checked');


            var errorMessage = "";

            if (name === "") {
                errorMessage += "Name must be filled out.\n";
            } else if (!/^[A-Za-z\s]+$/.test(name)) {
                errorMessage += "Name must contain only alphabets and spaces.\n";
            }
            if (dob === "") {
                errorMessage += "Date of birth must be filled out.\n";
            }
            if (utmId === "") {
                errorMessage += "UITM ID must be filled out.\n";
            } else if (utmId.length !== 10) {
                errorMessage += "UITM ID must have exactly 10 digits.\n";
            }
            if (icNumber === "") {
                errorMessage += "IC number must be filled out.\n";
            } else if (icNumber.length !== 12) {
                errorMessage += "IC Number must have exactly 12 digits.\n";
            }
            if (course === "") {
                errorMessage += "Please select a course.\n";
            }
            if (semester === "") {
                errorMessage += "Please select a semester.\n";
            }
            if (year === "") {
                errorMessage += "Year must be filled out.\n";
            }
            if (homeAddress === "") {
                errorMessage += "Home Address must be filled out.\n";
            }
            if (!emergencyRelationship) {
                errorMessage += "Relationship must be selected.\n";
            }
            if (trainingAddress === "") {
                errorMessage += "Address during Practical Training must be filled out.\n";
            }
            if (companyAddress === "") {
                errorMessage += "Company and Address must be filled out.\n";
            }
            if (companyContact === "") {
                errorMessage += "Company Contact No must be filled out.\n";
            } else if (!/^\d{10,11}$/.test(companyContact)) {
                errorMessage += "Company Contact No must be between 10 and 11 digits.\n";
            }
            if (supervisorName === "") {
                errorMessage += "Name of Supervisor In-charge must be filled out.\n";
            }
            if (supervisorPosition === "") {
                errorMessage += "Position of Supervisor In-charge must be filled out.\n";
            }
            if (supervisorEmail === "") {
                errorMessage += "Email of Supervisor In-charge must be filled out.\n";
            }
            if (trainingDurationFrom === "") {
                errorMessage += "Training Duration (From) must be filled out.\n";
            }
            if (trainingDurationTo === "") {
                errorMessage += "Training Duration (To) must be filled out.\n";
            }
            if (emergencyContact === "") {
                errorMessage += "Emergency Contact No must be filled out.\n";
            } else if (!/^\d{10,11}$/.test(emergencyContact)) {
                errorMessage += "Emergency Contact No must be between 10 and 11 digits.\n";
            }

            if (errorMessage !== "") {
                alert(errorMessage);
                return false;
            }


    return true;
}
</script>

        

    </head>
    <body>
    <div class="topnav">
  <a href="index.html">Home</a>
  <a class="active" href="form.php">Form</a>
  <a href="profile.php">Profile</a>
        </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        echo '<h2>Student Details:</h2>';
        echo '<pre>';
        print_r($_POST); 
        echo '</pre>';
    }
    ?>
<div class="form-container">
<form name="logBookForm" method="post" action="display.php" onsubmit="return validateForm()">
    <img src="uitm.jpg" alt="UITM Logo" width="300" height="300">
    <h2>Industrial Training LogBook</h2>
    <p>     All details must be fill : </p>
        <fieldset>
        <legend>Student Details</legend>
            <label for="name">Name:</label>
            <input type="text" name="name">

            <label for="dob">Date of birth:</label>
            <input type="date" name="dob">

            <label for="utmId">UITM ID:</label>
            <input type="number" name="utmId" maxlength="10" title="UITM ID must have 10 digits">

            <label for="icNumber">IC Number:</label>
            <input type="number " name="icNumber" maxlength="12" title="IC Number must have 12 digits">

            <label for="course">Select a Course:</label>
            <select name="course" id="course">
                <option value="" disabled selected>Select Your Course</option>
                <option value="AS201">AS201 : Bachelor of Science (Hons.) Biology - KAMPUS ARAU</option>
                <option value="AS203">AS203 : Bachelor of Science (Hons.) Physics</option>
                <option value="AS222">AS222 : Bachelor of Science (Hons.) Chemistry with Management</option>
                <option value="AS243">AS243 : Bachelor of Science (Hons) Polymer Technology</option>
                <option value="AS245">AS245 : Bachelor of Science (Hons) Applied Chemistry</option>
                <option value="AS256">AS256 : Bachelor of Science (Hons.) Marine Technology</option>
                <option value="BA240">BA240 : Bachelor of Business Administration (Hons) Marketing</option>
                <option value="BA242">BA242 : Bachelor of Business Administration (Hons) Finance</option>
                <option value="BA243">BA243 : Bachelor of Business Administration (Hons) Human Resource Management</option>
                <option value="CS240">CS240 : Bachelor Of Information Technology(Hons.)</option>
                <option value="SR243">SR243 : Bachelor of Sports Science (Hons.)</option>
            </select>
<br>

            <div class="form-group">
                <br>
                <label for="semester">Semester:</label>
                <select class="form-control" name="semester">
                    <option value="" disabled selected>Select Your Semester</option>
                    <option value="Semester 1">Semester 1</option>
                    <option value="Semester 1">Semester 2</option>
                    <option value="Semester 1">Semester 3</option>
                    <option value="Semester 1">Semester 4</option>
                    <option value="Semester 1">Semester 5</option>
                    <option value="Semester 1">Semester 6</option>
                    <option value="Semester 1">Semester 7</option>
                </select>
            </div>
                <br>
                <label for="year">Year:</label>
                    <select name="year" id="year">
                        <option value="" disabled selected>Select a Year</option>
                        <?php
                            for ($i = 2010; $i <= 2050; $i++) {
                                echo "<option value=\"$i\">$i</option>";
                            }
                        ?>
                    </select>
                    
                    <br><br>

            <label for="homeAddress">Home Address:</label>
                  <textarea name="homeAddress"></textarea>
            </fieldset>
            </fieldset>

            <fieldset>
            <legend>Training Address</legend>
            <label for="trainingAddress">Address during Practical Training:</label>
            <textarea name="trainingAddress"></textarea>
            </fieldset>

            <fieldset>
            <legend>Training Details</legend>
            <label for="companyAddress">Company and Address:</label>
            <textarea name="companyAddress"></textarea>

            <label for="companyContact">Company Contact No:</label>
            <input type="number" name="companyContact">

            <label for="supervisorName">Name of Supervisor In-charge:</label>
            <input type="text" name="supervisorName">

            <label for="supervisorPosition">Position of Supervisor In-charge:</label>
            <input type="text" name="supervisorPosition">

            <label for="supervisorEmail">Email of Supervisor In-charge:</label>
            <input type="email" name="supervisorEmail">

            <div class="duration-container">
                <label for="trainingDurationFrom">Training Duration (From):</label>
                <input type="date" name="trainingDurationFrom">

                <label for="trainingDurationTo">Training Duration (To):</label>
                <input type="date" name="trainingDurationTo">
            </div>
            </fieldset>

            <fieldset>
            <legend>Contact Person (In Emergency)</legend>
            <label for="emergencyName">Name:</label>
            <input type="text" name="emergencyName">

            <label for="emergencyAddress">Address:</label>
            <textarea name="emergencyAddress"></textarea>

            <label for="emergencyContact">HP No:</label>
            <input type="number" name="emergencyContact">

            <div class="radio-group">
                <label>Relationship:</label>
                <label><input type="radio" name="emergencyRelationship" value="parent"> Parent</label>
                <label><input type="radio" name="emergencyRelationship" value="sibling"> Sibling</label>
                <label><input type="radio" name="emergencyRelationship" value="relative"> Relative</label>
                <label><input type="radio" name="emergencyRelationship" value="friend"> Friend</label>
            </div>

                    </fieldset>

            <button type="submit">Submit</button>
            <button type="reset" class="reset">Reset</button>
        </form>
     </body>
     <?php include_once('footer.php'); ?>

     </body>
     </html>
