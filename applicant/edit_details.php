<?php
    require_once '../session.php';
    require_once '../connect.php';
?>
<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>BMSYSTEM</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
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
                    </br>
                    <a class = "btn btn-success" href = "AppAcc.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
                    </br></br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Accounts / Update
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                            <div style = "width:40%; margin-left:32%;"> 
                            <?php
                                $q_admin = $conn->query("SELECT * FROM `users` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error($conn));
                                $f_admin = $q_admin->fetch_array();
                            ?>
                                <form method = "POST" action = "edit_my_query.php?id=<?php echo $f_admin['id']?>">    
                                    <div class = "form-group">
                                        <label>Firstname</label>
                                        <input type = "text" value = "<?php echo $f_admin['firstname']?>" class = "form-control"  id="firstName" name = "firstName"/>
                                    </div>
                                    <div class = "form-group">
                                        <label>lastname</label>
                                        <input type = "text" value = "<?php echo $f_admin['lastname']?>" class = "form-control"  id="lastName" name = "lastName"/>
                                    </div>
                                    <div class = "form-group">
                                        <label>Email</label>
                                        <input type = "text" value = "<?php echo $f_admin['email']?>" class = "form-control"  id="userEmail" name = "userEmail"/>
                                    </div>
                                    <div class = "form-group">
                                        <label>Phone</label>
                                        <input type = "text" value = "<?php echo $f_admin['phone']?>" class = "form-control"  id="userPhone" name = "userPhone"/>
                                    </div>
                                    <div class = "form-group">
                                        <label>Gender</label>
                                        <input type = "text" value = "<?php echo $f_admin['gender']?>" class = "form-control"  id="userGender" name = "userGender"/>
                                    </div>
                                    <div class = "form-group">
                                        <label>Education Level</label>
                                        <input type = "text" value = "<?php echo $f_admin['edulevel']?>" class = "form-control"  id="eduLevel" name = "eduLevel"/>
                                    </div>
                                    <div class = "form-group">
                                        <label>School</label>
                                        <input type = "text" value = "<?php echo $f_admin['school']?>" class = "form-control"  id="userSchool" name = "userSchool"/>
                                    </div>
                                    <div class = "form-group">
                                        <label>Password</label>
                                        <input type = "password" value = "<?php echo $f_admin['password']?>" class = "form-control" id="userPass" name = "userPass"/>
                                    </div>
                                    <div class = "form-group">
                                        <button class = "btn btn-warning form-control" name = "update_student"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
                                    </div>
                                </form> 
                            </div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
 
</body>	
<!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script src = "../js/script.js"></script>
</html>