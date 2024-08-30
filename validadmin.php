<?php
session_start();
$mail       = isset($_POST['email']) ? $_POST['email'] : $_SESSION['email'];
$password   = isset($_POST['pass'])  ? $_POST['pass']   : $_SESSION['pass'];
$role       = "";
$con = mysqli_connect('localhost','root');
    if($con)
    {
        mysqli_select_db($con,'admin_login');
        $query = "select department from admin where email='$mail' and password='$password'";
        $result = mysqli_query($con, $query);
        if($result)
        {   
            $_SESSION['mail'] = $mail;
            $_SESSION['password'] = $password;
            while($row = mysqli_fetch_assoc($result))
              $role=$row['department'];
              $_SESSION['dept'] = $role;
              
              if($role=="accounts")
                header("Location:http://localhost/project/accountui.php");
              else if($role=="library")
                header("Location:http://localhost/project/libraryui.php");
              else if($role=="sports")
                header("Location:http://localhost/project/sportsui.php");
              else if($role=="hod")
                header("Location:http://localhost/project/hodui.php");
              else if($role=="labs")
                header("Location:http://localhost/project/labsui.php");
              else if($role=="admin")
                header("Location:http://localhost/project/adminui.php");
              else if($role=="mentor")
                header("Location:http://localhost/project/mentorui.php");
              else
                {
                
                echo '<script>alert("Check ID and password")</script>';
                
                }
        }
        else
        {
          echo "<h1>Wrong email or Pass<h1>";
        }
    }
    else
        echo "fail connecting to database";




?>