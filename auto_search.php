<?php
    // require_once 'session.php';
    require_once 'connect.php';
?>
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
          background: #e9eaed;
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
                <li><a href="#">CONTACT US</a></li>
                <li>|</li>
                <li><a href="login.php">LOGIN</a></li>
                <li>|</li>
                <li><a href="signup.php"><button style="background: #006600;color: #fff;border:0;padding: 10px 15px">REGISTER</button></a></li>
            </ul>
        </div>
        </nav>
    </div>
    <div class="container" style="margin-top: 3%">
       <div  id = "act_table" class="panel panel-default">
        <div class="panel-heading">
           Available Bursaries
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Constituency</th>
                <th>Ward</th>
                <th>Level</th>
                <th>Start</th>
                <th>End</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (isset($_POST['autoSearchbtn'])) {
            $title = $_POST['title'];
            $constituency = $_POST['constituency'];
            $ward = $_POST['ward'];
            $act_query = $conn->query("SELECT * FROM `bursaries` WHERE `title` LIKE '%$title%' OR `constituency` LIKE '%$constituency%' OR `ward` LIKE '%$ward%' ") or die(mysqli_error($conn));
        } else {
            $act_query = $conn->query("SELECT * FROM `bursaries`") or die(mysqli_error($conn));
        }
        while ($act_fetch = $act_query->fetch_assoc()) {
            ?>
            <tr class="odd gradeX">
                <td><?php echo $act_fetch['title'] ?></td>
                <td><?php echo $act_fetch['description'] ?></td>
                <td><?php echo $act_fetch['constituency'] ?></td>
                <td><?php echo $act_fetch['ward'] ?></td>
                <td><?php echo $act_fetch['level'] ?></td>
                <td><?php echo "<label class='text-info'>" . date("M d, Y", strtotime($act_fetch['start'])) . "</label>" ?></td>
                <td><?php echo "<label class='text-info'>" . date("M d, Y", strtotime($act_fetch['end'])) . "</label>" ?></td>
                <td class="center">
                   <a href="login.php" id="applybtn" name="applybtn" class="btn btn-danger">Apply</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

                 
                </tbody>
            </table>
            <!-- /.table-responsive -->
            
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
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
