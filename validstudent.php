<?php
include 'student.php';

$name_pattern = '/^[a-zA-Z ]*$/';
if ((preg_match($name_pattern, $_POST['student_name'])) && is_numeric($_POST['student_year']) && ctype_alpha($_POST['student_branch']) && ctype_alnum($_POST['student_roll'])) {
    $student_name = $_POST['student_name'];
    $student_branch = $_POST['student_branch'];
    $student_roll = $_POST['student_roll'];
    $student_year = $_POST['student_year'];
    $dep = $_POST['dept'];
    $n = 0;
    $con = mysqli_connect('localhost', 'root');
    if ($con) {
        $flag = 1;
        mysqli_select_db($con, 'student');
        $query = "SELECT rollnumber FROM issued where name='$student_name' AND rollnumber ='$student_roll'";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result))
            if ($row['rollnumber']) {
                $n = 1;
            } else {
                $n = 0;
            }
        if ($n == 0) {
            foreach ($dep as $chk1) {
                $query = "INSERT INTO $chk1 (name,branch,rollnumber,year) values('$student_name','$student_branch','$student_roll','$student_year')";
                mysqli_query($con, $query);
                $flag = 1;
                $n = 0;
            }
        }
        if ($n == 1) {
            echo "<marquee  behavior='alternate'><h1>Already Issued</h1></marquee>";
        }
        if ($flag)
            echo "<script type='text/javascript'>alert('Submitted');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Insertion Failed');</script>";
    }
} else
    echo "<script type='text/javascript'>alert('Empty Fields');</script>";
