<!DOCTYPE html>
    <html>
        <head >
            <title>
                Status
            </title>
            <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
            <style>
                html,body{
                    background-image:url(1.png) ;
                    background-size: cover;
                    background-repeat: no-repeat;
                }
                .mail{
                padding:15px;
                height:250px;
                background:rgba(255, 255, 255, 0.61);
                box-sizing:border-box;
                width:420px;
                position:absolute;
                top:35%;
                left:36%;
                text-align: center;
                }
                #u{
                font-size:x-large;
                font-weight:bolder;
                font-family:serif;
                color:black;
                }
                #yes
                {
                    color:green;
                    font-weight: bolder;
                }
                #no
                {
                    color:red;
                    font-weight: bolder;
                }
            </style>
    </head>
        <body >
            <div>
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-1">
                            <img  src="Picture1.png" style="filter:saturate(6) "  alt="LOGO" width="90" height="90" class="float-right" >
                        </div>
                        <div class="col-lg-11">
                            <p  style="text-align:center; font-family: 'UnifrakturMaguntia', cursive; font-size:51px" class="text-black">Geethanjali College of Engineering and Technology</p>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <nav class="navbar navbar-expand-lg navbar-light  bg-transparent border border-primary" >
                    <a class="navbar-brand" style="font-size: 35px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif" >Status</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" style="font-size: 20px" href="http://www.geethanjaliinstitutions.com/engineering/index.html">GCTC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"style="font-size: 20px" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 20px"href="#" >Creators</a>
                            </li>
                        </ul>
                    </div>
        </nav>
    <?php
        $num='';
        $check["accounts"]="NO";
        $check["admin"]="NO";
        $check["hod"]="NO";
        $check["library"]="NO";
        $check["sports"]="NO";
        $check["labs"]="NO";
        $name_pattern = '/^[a-zA-Z ]*$/';
    if((preg_match($name_pattern,$_POST['student_name']))&&is_numeric($_POST['student_year'])&&ctype_alpha($_POST['student_branch'])&&ctype_alnum($_POST['student_roll']))
    {
        $student_name = $_POST['student_name'];
        $student_branch = $_POST['student_branch'];
        $roll = $_POST['student_roll'];
        $student_year = $_POST['student_year'];
    }
    else 
    {
        
        //header("Location:http://localhost/project/student.php");
        echo "<script type='text/javascript'>alert('EmpTy Fields');</script>";
    }

            $con = mysqli_connect('localhost','root')or die('Unable To connect');
            if($con)
            {   
                
                $i=0;
                
                mysqli_select_db($con,'due');
                $query = "SELECT id FROM accounts WHERE rollnumber ='$roll'";
                $result=mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result))
                    if($row['id'])
                        {
                            $num++;
                            $check['accounts']='YES';
                        }
                $query = "SELECT id FROM labs WHERE rollnumber ='$roll'";
                $result=mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result))
                    if($row['id'])
                        {
                            $num++;
                            $check['labs']='YES';
                        }
                $query = "SELECT id FROM hod WHERE rollnumber ='$roll'";
                $result=mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result))
                    if($row['id'])
                        {
                            $num++;
                            $check['hod']='YES';
                        }
                $query = "SELECT id FROM admin WHERE rollnumber ='$roll'";
                $result=mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result))
                    if($row['id'])
                        {
                            $num++;
                            $check['admin']='YES';
                        }
                $query = "SELECT id FROM sports WHERE rollnumber ='$roll'";
                $result=mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result))
                        if($row['id'])
                        {
                            $num++;
                            $check['sports']='YES';
                        }
                $query = "SELECT id FROM library WHERE rollnumber ='$roll'";
                $result=mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result))
                        if($row['id'])
                        {
                            $num++;
                            $check['library']='YES';
                        }
            }
            else
            echo "UI database connection fail";
            if($num==6)
            {
                session_start();
                $_SESSION['name']=$student_name;
                $_SESSION['roll']=$roll;
                $_SESSION['branch']=$student_branch;
                $_SESSION['year']=$student_year;
            }
        ?>
        <div class="form-group mail" >  
                <label id="u">Departments:</label>
                    <table class="table table-sm table-borderless" >   
                    <tr>
                        <td><?php if('YES'==$check["library"])echo"<p id='yes'>YES</p>";else echo"<p id='no'>NO</p>";?></td>
                        <td><label id="u" > Library</label></td>  
                        <td><?php if('YES'==$check["accounts"])echo"<p id='yes'>YES</p>";else echo"<p id='no'>NO</p>";?></td>
                        <td><label id="u"> Accounts</label></td>
                    </tr>  
                    <tr>  
                        <td><?php if('YES'==$check["sports"])echo"<p id='yes'>YES</p>";else echo"<p id='no'>NO</p>";?></td>
                        <td><label  id="u"> Sports</label></td>  
                        <td><?php if('YES'==$check["admin"])echo"<p id='yes'>YES</p>";else echo"<p id='no'>NO</p>";?></td>
                        <td><label  id="u" > Admin</label></td>
                    </tr>  
                    <tr>  
                        <td><?php if('YES'==$check["hod"])echo"<p id='yes'>YES</p>";else echo"<p id='no'>NO</p>";?></td>
                        <td><label  id="u" > HOD </label> </td>  
                        <td><?php if('YES'==$check["labs"])echo"<p id='yes'>YES</p>";else echo"<p id='no'>NO</p>";?></td>
                        <td><label id="u" > Labs </label></td>
                    </tr>  
                    </table>  
            </div>
            <div>
                <center>
                <input style='margin-top:365px;'class='btn btn-primary' type='button' id='i' onclick='otp()'  value='Request OTP'>
                <form method="post" action="otp.php">
                    <input style='margin-top:10px;' type="text" name="otp" id='o' autocomplete="off">
                    <input class='btn btn-success'name='stamp' type='submit' value='Send OTP'>
                </form>
                </center>
            </div>
    <script type="text/javascript">
    function otp()
    {
        var flag=0;
        var digits = '0123456789'; 
        let OTP = '';
        var e= "<?php echo $num; ?>";
        if(e==6)
            {
            if(flag==0)
            {
            for (let i = 0; i < 4; i++)
                { 
                     OTP += digits[Math.floor(Math.random() * 10)]; 
                }
                flag=1;
            }
            else
            alert("OTP genrates only once");
            }
        else
        alert("Complete your Dues");
        document.getElementById('o').value= OTP;
        document.getElementById("i").disabled = true;
        
    }
</script>

    </body>
</html>
