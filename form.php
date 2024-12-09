<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EOS &#8211;Education of Sri Lanka</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <header>
        <h1>Teacher Details Form</h1>
    </header>
    
        <nav>
        <ul>
            <li><a href="home.php" class="active"> <<<</a></li>
            <li><a href="print.php" class="active" >>>></a></li>
        </ul>
        </nav> 
    
    <main>
        <form id="teacher-form" action="connect.php" method="post">
            <!-- Table 1: Personal Information -->
            <table class="teacher-table">
                <caption>Personal Information</caption>
                <tr>
                    <td><label for="teacher-id">Teacher ID:</label></td>
                    <td><input type="text" id="teacher-id" name="teacherid" placeholder="Enter your teacher id" required></td>
                </tr>
                <tr>
                    <td><label for="full-name">Full Name:</label></td>
                    <td><input type="text" id="full-name" name="fullname" placeholder="Enter your full name" required></td>
                </tr>
               
                <tr>
                    <td><label for="date-of-birth">Date of Birth:</label></td>
                    <td><input type="date" id="date-of-birth" name="dateofbirth" max="2025-12-31" min="1900-01-01" required></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td>
                        <select id="gender" name="gender">
                           <option value="male">Male</option>
                           <option value="female">Female</option>
                           <option value="other">Other</option>
                        </select>
                    </td>
                </tr>
            </table>

            <!-- Table 2: Contact Information -->
            <table class="teacher-table">
                <caption>Contact Information</caption>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" placeholder="Enter your email" required></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="tel" id="phone" name="phonenumber" placeholder="Enter your phone number" required pattern="[0-9]{10,14}"></td>
                </tr>
                <tr>
                    <td><label for="address">Address:</label></td>
                    <td><input type="text" id="address" name="address" placeholder="Enter your address" required></td>
                </tr>
                <tr>
                    <td><label for="city">City:</label></td>
                    <td><input type="text" id="city" name="city" placeholder="Enter your city" required></td>
                </tr>
            </table>

            <!-- Table 3: Education Details -->
            <table class="teacher-table">
                <caption>Education Details</caption>
                <tr>
                    <td><label for="degree">Degree:</label></td>
                    <td><input type="text" id="degree" name="degree" placeholder="Enter your degree" required></td>
                </tr>
                <tr>
                    <td><label for="institute">Institute:</label></td>
                    <td><input type="text" id="institute" name="institute" placeholder="Enter your institute" required></td>
                </tr>
                <tr>
                    <td><label for="graduation-year">Graduation Year:</label></td>
                    <td><input type="text" id="graduation-year" name="graduationyear"  placeholder="Enter your graduation year" required></td>
                </tr>
            </table>

            <!-- Table 4: Teaching Subject -->
            <table class="teacher-table">
                <caption>Teaching Subject</caption>
                <tr>
                    <td><label for="subjects-taught">Subject Taught:</label></td>
                    <td><input type="text" id="subjects-taught" name="subjectstaught"  placeholder="Enter your subjects taught" required></td>
                </tr>
                <tr>
                    <td><label for="years-of-experience">Years of Experience:</label></td>
                    <td><input type="number" id="years-of-experience" name="yearsofexperience" placeholder="Enter your experience year " min="1" max="50" required></td>
                </tr>
                <tr>
                    <td><label for="teaching-certificates">Teaching Class:</label></td>
                    <td><select id="teaching-class" name="teachingclass">
                          <option value="1-5">1-5</option>
                          <option value="6-11">6-11</option>
                          <option value="6-13">6-13</option>
                          <option value="12-13">12-13</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="grade-level">Grade Level:</label></td>
                    <td>
                        <select id="tgrade-level" name="gradelevel">
                            <option value="3-II">3-II</option>
                            <option value="3-I (c)">3-I<span> (c)</span> </option>
                            <option value="3-I (b)">3-I<span> (b)</span></option>
                            <option value="3-I (a)">3-I<span> (a)</span</option>
                            <option value="2-II">2-II</option>
                            <option value="2-I (c)">2-I</option>
                            <option value="1">1</option>

                        </select>
                            
                        
                    </td>
                </tr>
            </table>

            <!-- Table 5: Teaching School Information -->
            <table class="teacher-table">
                <caption>Teaching School Information</caption>
                <tr>
                    <td><label for="school-id">School ID:</label></td>
                    <td><input type="text" id="school-id" name="schoolid" placeholder="Enter your school id"  required></td>
                </tr>
                <tr>
                    <td><label for="school-name">School Name:</label></td>
                    <td><input type="text" id="school-name" name="schoolname" placeholder="Enter your school name" required></td>
                </tr>
                <tr>
                    <td><label for="joined-date">Joined Date:</label></td>
                    <td><input type="date" id="joined-date" name="joineddate" max="2025-12-31" min="2000-01-01" required></td>
                </tr>
                
            </table>

            <input type="submit" class="submit-button" name="submit" value="Submit">
            <input type="reset"  class="reset-button" value="Reset">
            
        </form>
    </main>
</body>
</html>
