<?php
    require_once '../session.php';
    require_once '../connect.php';
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
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/sley.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background: #fff">
            <?php include 'header.php'?>
            <!-- /.navbar-top-links -->
            <?php include 'sidebar.php'?>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
            <br />
            <a class = "btn btn-success" href = "index.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
            <br /><br />
            <div class="panel panel-default">
            <div class="panel-heading">
            Bursary/Application
            </div>
            <div class="alert alert-danger">
                Note: We USE the above details for application and AMOUNT computetional.if incorrect kindly go back and update .
            </div>
            <div class="panel-body">
            <div style = "width:40%; margin-left:32%;"> 
                <form method="post" enctype = "multipart/form-data" action = "add_application.php?activity_id=<?php echo $_REQUEST['activity_id'];?>" role = "form" id = "form" name= "form">
                <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ADM</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>GENDER</th>
                                        <th>CONSTITUENCY</th>
                                        <th>WARD</th>
                                        <th>Level</th>
                                        <th>familystatus</th>
                                        <th>Account Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $b_query = $conn->query("SELECT * FROM `users` WHERE  `id` = '$_SESSION[id]' && `edulevel`='$_SESSION[edulevel]' ") or die(mysqli_error($conn));
                                    $b_valid = $b_query->num_rows;
                                    $b_fetch = $b_query->fetch_array()
                                    

                                ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $b_fetch['adm']?></td>
                                        <td><?php echo $b_fetch['firstname']?></td>
                                        <td><?php echo $b_fetch['lastname']?></td>
                                        <td><?php echo $b_fetch['gender']?></td>
                                        <td><?php echo $b_fetch['constituency']?></td>
                                        <td><?php echo $b_fetch['ward']?></td>
                                        <td><?php echo $b_fetch['edulevel']?></td>
                                        <td><?php echo $b_fetch['family']?></td>
                                        <td><?php echo $b_fetch['status']?></td>
                                    </tr>
                                <?php
                                    
                                ?>
                                </tbody>
                            </table>
                        </div> 
                <div class = "form-group">
                <input type="submit" class = "btn btn-primary form-control" name = "save_application" value="Apply">
                </div>
                </form> 
            </div>
            </div>
            </div>
            </div>
        </div>     
        </div>
</div>
 
</body> 
<!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src = "../js/script.js"></script>

    <script type="text/javascript">
       $('#parents').on('change', function() {
          $eduVal = this.value;
          if($eduVal == 'Single_Parent' || $eduVal == 'Total_Orphan'){
            $('#deceased_div').show();
          }else{
            $('#deceased_div').hide();
          }
        });
    </script>
</html>