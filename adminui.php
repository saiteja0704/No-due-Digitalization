<!DOCTYPE html>
    <html>
        <head >
            <title>
                Admin Login
            </title>
            <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
            <style>
                html,body{
                    background-image:url(3.jpg) ;
                    background-size: cover;
                    background-repeat: no-repeat;
                }
                table.c {
                    table-layout: auto;
                    width: 50%;  
                    margin-top:10px;
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
            <script type="text/javascript">
                function selectAll() {
                    var items = document.getElementsByName('due[]');
                    for (var i = 0; i < items.length; i++) {
                        if (items[i].type == 'checkbox')
                            items[i].checked = true;
                    }
                }

                function UnSelectAll() {
                    var items = document.getElementsByName('due[]');
                    for (var i = 0; i < items.length; i++) {
                        if (items[i].type == 'checkbox')
                            items[i].checked = false;
                    }
                }			
            </script>
        <nav class="navbar navbar-expand-lg navbar-light  bg-transparent border border-primary" >
            <a class="navbar-brand" style="font-size: 35px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif" >Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" style="font-size: 20px" href="#">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"style="font-size: 20px" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 20px"href="logout.php" >Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div>
    <?php
    session_start();
        
        $con = mysqli_connect('localhost','root')or die('Unable To connect');
            if($con)
            {
                mysqli_select_db($con,'student');
                $query = "SELECT * FROM admin";
                $result = mysqli_query($con, $query);
            }
            else
            echo "UI database connection fail";

        
        
        ?><table align='center' class='table-bordered table-secondary c'>
        <thead>
            <tr>
                <th style='text-align:center' >ID</th>
                <th style='text-align:center' >Name</th>
                <th style='text-align:center' >Branch</th>
                <th style='text-align:center' >Roll-Number</th>
                <th style='text-align:center' >Year</th>
                <th style='text-align:center' >No-Due</th>
            </tr>
    <?php while ($row = mysqli_fetch_array($result)) 
            {
                $num=mysqli_num_rows($result);
                $field1name = $row["name"];
                $field2name = $row["branch"];
                $field3name = $row["rollnumber"];
                $field4name = $row["year"];
                $field5name = $row["id"];?>
                    <form method='POST' name="form" action='selectall.php'>
                        <tr>
                            <th style='text-align:center'><?php echo "$field5name"; ?></th>
                            <td style='text-align:center'><?php echo "$field1name"; ?></td>
                            <td style='text-align:center'><?php echo "$field2name"; ?></td>
                            <td style='text-align:center'><?php echo "$field3name"; ?></td>
                            <td style='text-align:center'><?php echo "$field4name"; ?></td>
                            <td style='text-align:center'>
                            <?php echo "
                            <input type='checkbox' name='due[]' value= '".$row['rollnumber']."'>";
                            ?>
                            </td>
            <?php }?>
            <div>
            <input style="margin-top:10px;margin-left:600px;margin-right:10px;color:black;" class="btn btn-outline-secondary" type="button" onclick="selectAll()" value="Select All"/>
            <input style="width:100px;margin-top:10px;margin-right:10px;"class="btn btn-success"   type="submit" value="submit">
            <input style="margin-top:10px;color:black;" class="btn btn-outline-secondary" type="button" onclick="UnSelectAll()" value="Unselect All"/>
            </div>
            </form>
        
    </body>
</html>