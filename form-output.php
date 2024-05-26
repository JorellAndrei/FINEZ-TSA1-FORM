<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(45deg, #005B41, #232D3F);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 800px;
            margin: auto;
        }
        h3 {
            color: #005B41;
            text-align: center;
            margin-bottom: 30px;
        }
        p {
            margin-bottom: 10px;
            font-size: 16px;
        }
        strong {
            color: #6c757d;
        }
        .section-header {
            background-color: #005B41;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $studentNumber = htmlspecialchars($_POST['studentNumber']);
        $entryDate = htmlspecialchars($_POST['entryDate']);
        $entryType = htmlspecialchars($_POST['entryType']);
        $grade = htmlspecialchars($_POST['grade']);
        $classHomeroom = htmlspecialchars($_POST['classHomeroom']);
        $expelled = htmlspecialchars($_POST['expelled']);
        $fullName = htmlspecialchars($_POST['fullName']);
        $preferredName = htmlspecialchars($_POST['preferredName']);
        $gender = htmlspecialchars($_POST['gender']);
        $dob = htmlspecialchars($_POST['dob']);
        $siblings = htmlspecialchars($_POST['siblings']);
        $proofOfBirth = htmlspecialchars($_POST['proofOfBirth']);
        $prevSchoolBoard = htmlspecialchars($_POST['prevSchoolBoard']);
        $prevSchool = htmlspecialchars($_POST['prevSchool']);
        $prevSchoolGrade = htmlspecialchars($_POST['prevSchoolGrade']);
        $languageOfInstruction = htmlspecialchars($_POST['languageOfInstruction']);
        $transferReason = htmlspecialchars($_POST['transferReason']);
        $prevAttendWRDSB = htmlspecialchars($_POST['prevAttendWRDSB']);
        $prevAttendWRDSBDetails = htmlspecialchars($_POST['prevAttendWRDSBDetails']);
        $medicalConditions = htmlspecialchars($_POST['medicalConditions']);
        $immunizationRecord = htmlspecialchars($_POST['immunizationRecord']);
        $epiPen = htmlspecialchars($_POST['epiPen']);
        $birthCountry = htmlspecialchars($_POST['birthCountry']);
        $provinceOfBirth = htmlspecialchars($_POST['provinceOfBirth']);
        $countryOfCitizenship = htmlspecialchars($_POST['countryOfCitizenship']);
        $year = htmlspecialchars($_POST['year']);
        $month = htmlspecialchars($_POST['month']);
        $day = htmlspecialchars($_POST['day']);
        $statusInCanada = htmlspecialchars($_POST['statusInCanada']);
        $verificationInOSR = isset($_POST['verificationInOSR']) ? "Yes" : "No";

        // Perform string formatting
        $fullNameFormatted = ucwords(strtolower($fullName));
        $preferredNameFormatted = ucwords(strtolower($preferredName));
        $entryDateFormatted = date("F j, Y", strtotime($entryDate)); }
    ?>
    <div class="container mt-4">
        <h3>Registration Details</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="section-header">Personal Information</div>
                <p><strong>Full Legal Name:</strong> <?php echo $fullNameFormatted; ?></p>
                <p><strong>Preferred Name:</strong> <?php echo $preferredNameFormatted; ?></p>
                <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
                <p><strong>Gender:</strong> <?php echo $gender; ?></p>
                <p><strong>Proof of Birth:</strong> <?php echo $proofOfBirth; ?></p>
                <p><strong>Siblings:</strong> <?php echo $siblings; ?></p>
            </div>
            <div class="col-md-6">
                <div class="section-header">Academic Information</div>
                <p><strong>Student Number:</strong> <?php echo $studentNumber; ?></p>
                <p><strong>Entry Date:</strong> <?php echo $entryDateFormatted; ?></p>
                <p><strong>Entry Type:</strong> <?php echo $entryType; ?></p>
                <p><strong>Grade:</strong> <?php echo $grade; ?></p>
                <p><strong>Class/Homeroom:</strong> <?php echo $classHomeroom; ?></p>
                <p><strong>Expelled:</strong> <?php echo $expelled; ?></p>
            </div>
            <div class="col-md-6">
                <div class="section-header">Previous Education</div>
                <p><strong>Previous School Board:</strong> <?php echo $prevSchoolBoard; ?></p>
                <p><strong>Previous School:</strong> <?php echo $prevSchool; ?></p>
                <p><strong>Previous School Grade:</strong> <?php echo $prevSchoolGrade; ?></p>
                <p><strong>Language of Instruction:</strong> <?php echo $languageOfInstruction; ?></p>
                <p><strong>Reason for Transfer:</strong> <?php echo $transferReason; ?></p>
                <p><strong>Attended WRDSB Before:</strong> <?php echo $prevAttendWRDSB; ?></p>
                <p><strong>Previous WRDSB Schools:</strong> <?php echo $prevAttendWRDSBDetails; ?></p>
            </div>
            <div class="col-md-6">
                <div class="section-header">Health Information</div>
                <p><strong>Medical Conditions:</strong> <?php echo $medicalConditions; ?></p>
                <p><strong>Immunization Record:</strong> <?php echo $immunizationRecord; ?></p>
                <p><strong>Epi-Pen Required:</strong> <?php echo $epiPen; ?></p>
                <p><strong>Birth Country:</strong> <?php echo $birthCountry; ?></p>
                <p><strong>Province of Birth:</strong> <?php echo $provinceOfBirth; ?></p>
                <p><strong>Country of Citizenship:</strong> <?php echo $countryOfCitizenship; ?></p>
                <p><strong>Date of Entry to Philippines:</strong> <?php echo "$year-$month-$day"; ?></p>
                <p><strong>Status in Philippines:</strong> <?php echo $statusInCanada; ?></p>
                <p><strong>Verification in OSR:</strong> <?php echo $verificationInOSR; ?></p>
            </div>
        </div>
    </div>
</body>
</html>

