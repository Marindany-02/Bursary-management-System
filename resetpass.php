<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BMSYSTEM</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body style="background: #e9eaed">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: #fff">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span celass="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="font-weight:bold;padding: 0"><img src="images/logo.png"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="login.php">LOGIN</a></li>
                <li>|</li>
                <li><a href="signup.php"><button style="background: #006600;color: #fff;border:0;padding: 10px 15px">REGISTER</button></a></li>
            </ul>
        </div>
        </nav>
    </div> 

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="margin-top: 5%">
                    <div class="panel-heading">
                        <div class="text-center">
                            <h2>RESET PASSWORD</h2>
                        </div>
                        
                    </div>
                    <div class="panel-body">
                        <form role="form" action="resetapplicant.php" method = "POST" enctype = "multipart/form-data" id = "login" name= "login">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" id = "email" name="email" type="email" required="required" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="ADM" id="password" name="adm" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="New Password" id="password" name="password" type="password" >
                                </div>
                                <div id = "loading"></div>
                                <button type = "submit" class = "form-control btn btn-success" id = "lgbtn" style="border-radius:0px"><span class = "glyphicon glyphicon-log-in"></span> RESET</button>
                            </fieldset>
                        </form>

                        <br>
                        <div class="text-center">
                            <div>Not Registered ? <a href="signup.php">Sign Up Now</a></div>
                            <hr>
                            <a href="login.php">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
   <!--  <script src = "js/script.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>

</body>
</html>
