<?php
session_start();
$con = mysqli_connect('localhost','root')or die('Unable To connect');
if($con)
{
    mysqli_select_db($con,'due');
    $c=$_POST['due'];
    foreach($c as $id)
    {
    $query = " INSERT INTO {$_SESSION['dept']} (rollnumber) values('$id'); ";
    mysqli_query($con, $query);
    echo $query;
    echo "<br>";
    }
    foreach($c as $id){
    mysqli_select_db($con,'student');
    $query = "DELETE FROM {$_SESSION['dept']} WHERE rollnumber='$id'";
    mysqli_query($con, $query);
    echo $query;
    echo "<br>";
    }
    
    if($_SESSION['dept']=="accounts")
    header("Location:http://localhost/project/accountui.php");
    else if($_SESSION['dept']=="library")
        header("Location:http://localhost/project/libraryui.php");
    else if($_SESSION['dept']=="sports")
        header("Location:http://localhost/project/sportsui.php");
    else if($_SESSION['dept']=="hod")
        header("Location:http://localhost/project/hodui.php");
    else if($_SESSION['dept']=="labs")
        header("Location:http://localhost/project/labsui.php");
    else if($_SESSION['dept']=="admin")
    header("Location:http://localhost/project/adminui.php");
    
}
echo "<h1>Succesfully Submitted</h1>";
?>