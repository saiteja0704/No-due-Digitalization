<!DOCTYPE html>
    <html>
        <head >
            <title>
                LOGIN
            </title>
            <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
            <style>
                html,body{
                    background-image:url(3.jpg) ;
                    background-size: cover;
                    /* background-repeat: no-repeat; */
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
                    <a class="navbar-brand" style="font-size: 35px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif" >No-Due</a>
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
        <style>
            .mail{
                padding:15px;
                height:300px;
                background:rgba(0,0,0,0.2);
                box-sizing:border-box;
                width:420px;
                position:absolute;
                top:35%;
                left:36%;
                text-align: center;
                }
                #i{
                font-size:larger;
                font-weight:bold;
                font-family:'Times New Roman', Times, serif;
                color:black;
                }
        </style>       
    <div class="w-50 m-auto" >
            <form class="mail " method="post" action="validadmin.php" >
                <div class="from-group">
                    <label id="i">Email:</label>
                    <input type="email" name="email" required placeholder="Enter your email"autocomplete="off" class="form-control">
                </div>
                <div class="from-group">
                    <label id="i">Password:</label>
                    <input type="password" name="pass" required placeholder="Password"autocomplete="off" class="form-control">
                </div>
                <br>
                
                <div class="form-group">
                    <input class="btn btn-success"  style="margin-right:100px ;" type="submit" value="Submit">
                    <input class="btn btn-danger" type="reset" value="Reset" >
                </div>
            </form> 
            
    </body>
</html>
