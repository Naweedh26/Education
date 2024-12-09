<html>
    <head><title>print Details</title>
    </head>
<body>
    <h2>Personal Information</h2>
    <table border="2">
        <tr>
            <th>Teacher ID</th>
            <th>Full Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
        </tr>
<?php   
// Connect to your database (use your own database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


error_reporting(0);
$query="select * from personal_information";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total != 0)
{
   
    while(($result=mysqli_fetch_assoc($data)))
    {
        echo "
        <tr>
        <td>".$result['teacherid']."</td>
        <td>".$result['fullname']."</td>
        <td>".$result['dateofbirth']."</td>
        <td>".$result['gender']."</td>

        </tr>
     ";
    }
}
else 
{
    echo "no record found";
}

?>
</table>
</body>
</html>


<html>
<head><title>print Details</title>
    </head>
  <body>
    <h2>contact Information</h2>
    <table border="2" >
        <tr>
            <th>Email</th>
            <th>phone_number</th>
            <th>Address</th>
            <th>City</th>
        </tr>
      
        <?php   
            // Connect to your database (use your own database details)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "education";

            // Create a connection to the database
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the connection
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }

                error_reporting(0);
                $query="select * from contact_information";
                $data=mysqli_query($conn,$query);
                $total=mysqli_num_rows($data);

                if($total != 0)
                {
   
                     while(($result=mysqli_fetch_assoc($data)))
                {
                    echo "
                    <tr>
                        <td>".$result['email']."</td>
                        <td>".$result['phonenumber']."</td>
                        <td>".$result['address']."</td>
                        <td>".$result['city']."</td>
                    </tr>";
                }
            }
            else 
            {
                echo "no record found";
            }
        ?>
    </table>
  </body>
</html>


<html>
    <head><title>print Details</title>
    </head>
<body>
    <h2>Education Details</h2>
    <table border="2">
        <tr>
            <th>Degree</th>
            <th>Institute</th>
            <th>Graduation Year</th>
        </tr>
<?php   
// Connect to your database (use your own database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


error_reporting(0);
$query="select * from education_details";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total != 0)
{
   
    while(($result=mysqli_fetch_assoc($data)))
    {
        echo "
        <tr>
        <td>".$result['degree']."</td>
        <td>".$result['institute']."</td>
        <td>".$result['graduationyear']."</td>
        </tr>
     ";
    }
}
else 
{
    echo "no record found";
}

?>
</table>
</body>
</html>


<html>
<head><title>print Details</title>
    </head>
  <body>
    <h2>Teaching Subject</h2>
    <table border="2" >
        <tr>
            <th>Subject Taught</th>
            <th>Years of Experience</th>
            <th>Teaching Class</th>
            <th>Grade Level</th>
        </tr>
      
        <?php   
            // Connect to your database (use your own database details)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "education";

            // Create a connection to the database
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the connection
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }

                error_reporting(0);
                $query="select * from teaching_subject";
                $data=mysqli_query($conn,$query);
                $total=mysqli_num_rows($data);

                if($total != 0)
                {
   
                     while(($result=mysqli_fetch_assoc($data)))
                {
                    echo "
                    <tr>
                        <td>".$result['subjectstaught']."</td>
                        <td>".$result['yearsofexperience']."</td>
                        <td>".$result['teachingclass']."</td>
                        <td>".$result['gradelevel']."</td>
                    </tr>";
                }
            }
            else 
            {
                echo "no record found";
            }
        ?>
    </table>
  </body>
</html>


<html>
<head><title>print Details</title>
    </head>
  <body>
    <h2>Teaching School Information</h2>
    <table border="2" >
        <tr>
            <th>School ID</th>
            <th>School Name</th>
            <th>Joined Date</th>
        </tr>
      
        <?php   
            // Connect to your database (use your own database details)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "education";

            // Create a connection to the database
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the connection
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }

                error_reporting(0);
                $query="select * from teaching_school_information";
                $data=mysqli_query($conn,$query);
                $total=mysqli_num_rows($data);

                if($total != 0)
                {
   
                     while(($result=mysqli_fetch_assoc($data)))
                {
                    echo "
                    <tr>
                        <td>".$result['schoolid']."</td>
                        <td>".$result['schoolname']."</td>
                        <td>".$result['joineddate']."</td>
                    </tr>";
                }
            }
            else 
            {
                echo "no record found";
            }
        ?>
    </table>
  </body>
</html>

