<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
</head>

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
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
        }
        .header {
            margin-bottom: 30px;
            text-align: center;
        }
        .header h2 {
            font-weight: 600;
            color: #333;
        }

        
        .form-group label {
            font-weight: 600;
        }
        .form-control {
            border-radius: 30px;
            padding: 15px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
            height: 8vh;
        }
        .form-control:focus {
            border-color: #af4261;
            box-shadow: 0 0 10px rgba(175, 66, 97, 0.1);
        }
        .form-check-label {
            margin-right: 1rem;
        }
        button {
            background-color: #af4261;
            color: #fff;
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #f3ec78;
            color: #af4261;
        }
        .section-header {
            margin: 30px 0 15px;
            font-size: 20px;
            color: #af4261;
            font-weight: 600;
            border-bottom: 2px solid #af4261;
            padding-bottom: 5px;
        }
    </style>

<body>
    <div class="container">
        <div class="header">
            <h2>Student Registration Form</h2>
        </div>
        <form method="POST" action="./form-output.php">
            <div class="section-header">Student Information</div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="studentNumber">Student Number:</label>
                    <input type="text" class="form-control" id="studentNumber" name="studentNumber" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="entryDate">Entry Date:</label>
                    <input type="date" class="form-control" id="entryDate" name="entryDate" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="entryType">Entry Type:</label>
                    <input type="text" class="form-control" id="entryType" name="entryType" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="grade">Grade:</label>
                    <input type="text" class="form-control" id="grade" name="grade" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="classHomeroom">Class/Homeroom:</label>
                    <input type="text" class="form-control" id="classHomeroom" name="classHomeroom" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Is the student currently expelled from any school or school board?</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="expelled" id="expelledYes" value="Yes">
                            <label class="form-check-label" for="expelledYes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="expelled" id="expelledNo" value="No" checked>
                            <label class="form-check-label" for="expelledNo">No</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-header">Personal Details</div>
            <div class="form-group">
                <label for="fullName">Full Legal Name:</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="preferredName">Preferred Name:</label>
                <input type="text" class="form-control" id="preferredName" name="preferredName">
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male">
                        <label class="form-check-label" for="genderMale">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
                        <label class="form-check-label" for="genderFemale">Female</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="siblings">If the student has other siblings in this school, please list them:</label>
                    <input type="text" class="form-control" id="siblings" name="siblings">
                </div>
            </div>

            <div class="section-header">School History</div>
            <div class="form-group">
                <label for="proofOfBirth">For School Use - Proof of Birth:</label>
                <select class="form-control" id="proofOfBirth" name="proofOfBirth">
                    <option value="Copy in OSR">Copy in OSR</option>
                    <option value="Baptismal Record">Baptismal Record</option>
                    <option value="Birth Registration">Birth Registration</option>
                    <option value="Birth Certificate">Birth Certificate</option>
                    <option value="Immigration Papers/Card">Immigration Papers/Card</option>
                    <option value="Passport">Passport</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="prevSchoolBoard">Name of Previous School Board / Municipality:</label>
                <input type="text" class="form-control" id="prevSchoolBoard" name="prevSchoolBoard" required>
            </div>
            <div class="form-group">
                <label for="prevSchool">Name of Previous School:</label>
                <input type="text" class="form-control" id="prevSchool" name="prevSchool" required>
            </div>
            <div class="form-group">
                <label for="prevSchoolGrade">Grade at previous school:</label>
                <input type="text" class="form-control" id="prevSchoolGrade" name="prevSchoolGrade" required>
            </div>
            <div class="form-group">
                <label for="languageOfInstruction">Language of Instruction:</label>
                <select class="form-control" id="languageOfInstruction" name="languageOfInstruction">
                    <option value="English">English</option>
                    <option value="Tagalog">Tagalog</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="transferReason">Reason for Transfer:</label>
                <input type="text" class="form-control" id="transferReason" name="transferReason">
            </div>
            <div class="form-group">
                <label>Did the student ever attend any Far Eastern campuses in the past?</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="prevAttendWRDSB" id="prevAttendWRDSBYes" value="Yes">
                        <label class="form-check-label" for="prevAttendWRDSBYes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="prevAttendWRDSB" id="prevAttendWRDSBNo" value="No" checked>
                        <label class="form-check-label" for="prevAttendWRDSBNo">No</label>
                    </div>
                    <input type="text" class="form-control mt-2" id="prevAttendWRDSBDetails" name="prevAttendWRDSBDetails" placeholder="If yes, name school(s):">
                </div>
            </div>

            <div class="section-header">Medical Information</div>
            <div class="form-group">
                <label for="medicalConditions">Medical Conditions:</label>
                <textarea class="form-control" id="medicalConditions" name="medicalConditions"></textarea>
            </div>
            <div class="form-group">
                <label>For School Use - Immunization Record provided:</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="immunizationRecord" id="immunizationRecordYes" value="Yes">
                        <label class="form-check-label" for="immunizationRecordYes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="immunizationRecord" id="immunizationRecordNo" value="No" checked>
                        <label class="form-check-label" for="immunizationRecordNo">No</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Does the student require an epi-pen?</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="epiPen" id="epiPenYes" value="Yes">
                        <label class="form-check-label" for="epiPenYes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="epiPen" id="epiPenNo" value="No" checked>
                        <label class="form-check-label" for="epiPenNo">No</label>
                    </div>
                </div>
            </div>

            <div class="section-header">Citizenship Information</div>
            <div class="form-group">
                <label for="birthCountry">Birth Country:</label>
                <input type="text" class="form-control" id="birthCountry" name="birthCountry" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="provinceOfBirth">If Philippines, Province of Birth:</label>
                    <input type="text" class="form-control" id="provinceOfBirth" name="provinceOfBirth">
                </div>
                <div class="form-group col-md-6">
                    <label for="countryOfCitizenship">Country of Citizenship:</label>
                    <input type="text" class="form-control" id="countryOfCitizenship" name="countryOfCitizenship" required>
                </div>
            </div>
            <div class="form-group">
                <label>If student not born in Philippines, provide date of student entering the country to live for the first time:</label>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Year" name="year">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Month" name="month">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Day" name="day">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Status in Philippines:</label>
                <select class="form-control" id="statusInCanada" name="statusInCanada">
                    <option value="Philippines Citizen">Filipino Citizen</option>
                    <option value="Permanent Resident/Landed Immigrant">Permanent Resident/Landed Immigrant</option>
                    <option value="Study Permit/ Student Visa">Study Permit/Student Visa</option>
                    <option value="Refugee Claimant">Refugee Claimant</option>
                    <option value="Native Ancestry">Native Ancestry</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="verificationInOSR" name="verificationInOSR">
                <label class="form-check-label" for="verificationInOSR">Verification in OSR</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>



