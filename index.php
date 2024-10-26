<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BMSYSTEM</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/sley.css" rel="stylesheet" type="text/css">
    <style type="text/css">

    html { 
          background: url(images/background.jpg) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }
       /* #body{
            background-image: url("images/background.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }*/
    </style>
</head>

<body style="background: transparent;">

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
        <div class="row text-center" style="color:#fff;margin-top: 13%">
            <h1>Find Bursaries and Scholarships</h1>
            <h3>For Undergraduate, High School, and Primary School Students</h3>
        </div>
        <div class="row" style="margin-top: 3%">
            <form method="POST" action="auto_search.php">
                <div class="col-sm-12">
                    <div class="col-sm-3"><input class="form-control" placeholder="Keyword e.g Bursary name" type="text" id="title" name="title" style="height: 50px;border-radius: 0" required="required"></div>
                    <div class="col-sm-3">
                        <select class="form-control" id="constituency" name="constituency" style="height: 50px;border-radius: 0" required="required">
                            <option value="">---Select Constituency---</option>
                            <option value="sotik">sotik</option>
                            <option value="bomet east">Bomet east</option>
                            <option value="chepalungu">chepalungu</option>
                            <option value="bomet central">bomet central</option>
                            <option value="konoin">konoion</option>
                            
                        </select>
                    </div>
                    <div class="col-sm-3">
                         <select class="form-control" id="ward" name="ward" style="height: 50px;border-radius: 0" required="required">
                            <option value="">--ward--</option>
                            <option value="Nyali">kipreres</option>
                            <option value="Likoni">nyangores</option>
                            <option value="Msambweni">Msambweni</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <input class="btn btn-primary" type="submit" id="autoSearchbtn" name="autoSearchbtn" style="width: 100%;height:50px;border-radius: 0" value="Search">
                    </div>
                </div>
            </form>
        </div>
        <div class="row text-center" style="margin-top: 3%;">
            <h3><a href="auto_search.php" style="color: #fff">Or Browse All Opportunities &raquo;</a></h3>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
</body>
</html>
