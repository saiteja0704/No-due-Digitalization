<!DOCTYPE html>
<html>

<head>
    <title>
        No-Due
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <style>
        html,body {
            background-image: url(2.png)  ;
            /* background-size:105%; */
            background-size: cover;
            background-repeat:no-repeat ;
            
        }
    </style>



</head>

<body>

    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1">
                    <img src="Picture1.png" style="filter:saturate(6) " alt="LOGO" width="90" height="90" class="float-right">
                </div>
                <div class="col-lg-11">
                    <p style="text-align:center; font-family: 'UnifrakturMaguntia', cursive; font-size:51px" class="text-black">Geethanjali College of Engineering and Technology</p>
                </div>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-light  bg-transparent ">
        <a class="navbar-brand" style="font-size: 35px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">No-Due</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" style="font-size: 20px" href="http://www.geethanjaliinstitutions.com/engineering/index.html">GCTC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 20px" href="#">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="font-size: 20px" href="#">Creators</a>
                </li>
            </ul>

        </div>
    </nav>
    <style>
        #i {
            font-size: larger;
            font-weight: 300;
            font-family: 'Times New Roman', Times, serif;
            color: white;

        }

        #u {
            font-size: larger;
            font-weight: 300;
            font-family: Arial, Helvetica, sans-serif;
            color: whitesmoke;
        }

        #r {
            font-family: 'Times New Roman', Times, serif;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .center {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        .mail {
            padding: 15px;
            height: 510px;
            background: rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            width: 420px;
            position: absolute;
            top: 25%;
            left: 36%;
            text-align: center;
        }
    </style>
    <div class="w-60 m-auto">
        <form class="mail " method="post" action="validstudent.php">
            <div class="from-group ">
                <label id="i">Name:</label>
                <input type="text" name="student_name" required placeholder="Enter your name" class="form-control" autocomplete="off">
            </div>
            <div class="from-group">
                <label id="i">Roll Number:</label>
                <input type="text" name="student_roll" required placeholder="Roll Number" class="form-control" autocomplete="off">
            </div>
            <br>
            <div class="from-group">
                <label id="i">Branch:</label>
                <select name="student_branch" required>
                    <option value="none" selected disabled hidden> Select an Option </option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="MEC">MEC</option>
                    <option value="CIVIL">CIVIL</option>
                </select>
            </div>
            <div class="from-group">
                <label style="margin-left:20px;" id="i">Year:</label>
                <select name="student_year" required>
                    <option value="none" selected disabled hidden> Select an Option </option>
                    <option value="1">I</option>
                    <option value="2">II</option>
                    <option value="3">III</option>
                    <option value="4">IV</option>
                </select>
            </div>
            <!-- Default unchecked -->
            <div class="form-group">
                <label id="r">Departments:</label>
                <table class="table table-sm table-borderless">
                    <tr>
                        <td><label id="u" for="dept1"> Library</label></td>
                        <td><input type="checkbox" id="dept1" name="dept[]" value="Library"></td>
                        <td><label id="u" for="dept2"> Accounts</label></td>
                        <td><input type="checkbox" id="dept2" name="dept[]" value="Accounts"></td>

                    </tr>
                    <tr>
                        <td><label id="u" for="dept3"> Sports</label></td>
                        <td><input type="checkbox" id="dept3" name="dept[]" value="Sports"></td>
                        <td><label id="u" for="dept4"> Admin</label></td>
                        <td><input type="checkbox" id="dept4" name="dept[]" value="Admin"></td>

                    </tr>
                    <tr>
                        <td><label id="u" for="dept5"> HOD </label> </td>
                        <td><input type="checkbox" id="dept5" name="dept[]" value="HOD"></td>
                        <td><label id="u" for="dept6"> Labs </label></td>
                        <td><input type="checkbox" id="dept6" name="dept[]" value="Labs"></td>
                    </tr>

                </table>
            </div>

            <div>
                <input class="btn btn-light" type="submit" name='Status' formaction="status.php" value="Status">
                <input class="btn btn-success" style="margin-right:50px;margin-left:50px;" type="submit" value="Submit">
                <input class="btn btn-danger" type="reset" value="Reset">

            </div>
        </form>
    </div>

</body>

</html>