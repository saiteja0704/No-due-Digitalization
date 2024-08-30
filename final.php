<?php
$age = array("1"=>"accounts", "2"=>"admin", "3"=>"hod", "4"=>"library" ,"5"=>"sports" ,"6"=>"labs");
$con = mysqli_connect('localhost','root')or die('Unable To connect');
if($con)
{
    
    mysqli_select_db($con,'due');
    $c=$_POST['due'];
    for($x = 1; $x <= 6; $x++) 
    {
        foreach($c as $id)
        {
        $query = "DELETE FROM $age[$x] WHERE rollnumber='$id'";
        
        mysqli_query($con, $query);
        echo $query;
        echo "<br>";
        }
    }
    mysqli_select_db($con,'student');
    $query = "SELECT * FROM otp WHERE rollnumber='$id'";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) 
        {
            $field1name = $row["name"];
            $field2name = $row["branch"];
            $field3name = $row["rollnumber"];
            $field4name = $row["year"];
            $field6name = $row["otp"];
            $query = "INSERT INTO issued (name,branch,rollnumber,year,otp) values('$field1name','$field2name','$field3name','$field4name','$field6name')";
            mysqli_query($con, $query);
            echo $query;
            echo "<br>";
        }
        $query = "DELETE FROM otp WHERE rollnumber='$id'";
        mysqli_query($con, $query);
    header("Location:http://localhost/project/mentorui.php");
    
}
echo "<h1>Succesfully Submitted</h1>";
?>