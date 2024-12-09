<?php 
// Your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['submit']))
{
    $teacherid=$_POST['teacherid'];
    $fullname=$_POST['fullname'];
    $dateofbirth=$_POST['dateofbirth'];
    $gender=$_POST['gender'];
    $email=$_POST['email']; 
    $phonenumber=$_POST['phonenumber'];   
    $address=$_POST['address'];
    $city=$_POST['city'];
    $degree=$_POST['degree'];
    $institute=$_POST['institute'];
    $graduationyear=$_POST['graduationyear'];
    $subjectstaught=$_POST['subjectstaught'];
    $yearsofexperience=$_POST['yearsofexperience'];
    $teachingclass=$_POST['teachingclass'];
    $gradelevel=$_POST['gradelevel'];
    $schoolid=$_POST['schoolid'];
    $schoolname=$_POST['schoolname'];
    $joineddate=$_POST['joineddate'];

    $query1 = "INSERT INTO personal_information(teacherid,fullname,dateofbirth,gender) VALUES ('$teacherid','$fullname','$dateofbirth','$gender')";
    $res1=mysqli_query($conn,$query1) ;

    $query2 = "INSERT INTO contact_information(email,phonenumber,address,city) VALUES ('$email','$phonenumber','$address','$city')";
    $res2=mysqli_query($conn,$query2);

    $query3 = "INSERT INTO education_details(degree,institute,graduationyear) VALUES ('$degree','$institute','$graduationyear')";
    $res3=mysqli_query($conn,$query3);
   
    $query4 = "INSERT INTO teaching_subject(subjectstaught,yearsofexperience,teachingclass,gradelevel) VALUES (' $subjectstaught','$yearsofexperience','$teachingclass','$gradelevel')";
    $res4=mysqli_query($conn,$query4);
    
    $query5 = "INSERT INTO teaching_school_information(schoolid,schoolname,joineddate) VALUES ('$schoolid','$schoolname','$joineddate')";
    $res5=mysqli_query($conn,$query5);
    

    if(($res1)&&($res2)&&($res3)&&($res4)&&($res5))
    {
        echo"<script>alert('Application Success')</script>";
        echo"<script>window.location.href='form.php';</script>";
    }    
    else
    {
            echo"<script>alert('There Is An Error')</script>";
            echo"<script>window.location.href='form.php';</script>";
    }
}
?>