<?php
session_start();
$OTP=$_POST['otp'];
echo $OTP;
$student_name =  $_SESSION['name'];
$student_branch = $_SESSION['branch'];
$student_roll = $_SESSION['roll'];
$student_year = $_SESSION['year'];
$con = mysqli_connect('localhost','root');
if($con)
{
        mysqli_select_db($con,'student'); 
        $query = " insert into otp (name,branch,rollnumber,year,otp) values('$student_name','$student_branch','$student_roll','$student_year','$OTP')";
        mysqli_query($con,$query);  
}  
unset($_SESSION["name"]);
unset($_SESSION["branch"]);
unset($_SESSION["roll"]);
unset($_SESSION["year"]);
header("Location:http://localhost/project/student.php");

?>