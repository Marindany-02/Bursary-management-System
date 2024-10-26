<?php
    require_once 'session.php';
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
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/sley.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background: #fff">
            <?php include 'header.php'?>
            <!-- /.navbar-top-links -->
            <?php include 'sidebar.php'?>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
           <!--  <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Students</h1>
                </div>
               
            </div> -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    </br>
                    <a class = "btn btn-success" href = "adminAcc.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
                    </br></br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Accounts/Administrator/Update
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                            <div style = "width:40%; margin-left:32%;">	
						<?php
							$q_admin = $conn->query("SELECT * FROM `users` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error($conn));
							$f_admin = $q_admin->fetch_array();
						?>
							<form method = "POST" action = "edit_admin_query.php?id=<?php echo $f_admin['id']?>">	
                            <div class = "form-group">
									<label>Employment no.</label>
									<input type = "text" value = "<?php echo $f_admin['adm']?>" class = "form-control"  name = "adm"/>
								</div>
                            <div class = "form-group">
									<label>Email</label>
									<input type = "email" value = "<?php echo $f_admin['email']?>" class = "form-control"  name = "email"/>
								</div>
                                <div class = "form-group">
									<label>Phone</label>
									<input type = "text" value = "<?php echo $f_admin['phone']?>" class = "form-control"  name = "phone"/>
								</div>
                                <div class = "form-group">
									<label>Gender</label>
									<input type = "text" value = "<?php echo $f_admin['gender']?>" class = "form-control"  name = "gender"/>
								</div>
								<div class = "form-group">
									<label>Password</label>
									<input type = "password" value = "<?php echo $f_admin['password']?>" class = "form-control"  name = "password"/>
								</div>
								<div class = "form-group">
									<label>First Name</label>
									<input type = "text" value = "<?php echo $f_admin['firstname']?>" class = "form-control"  name = "firstname"/>
								</div>
                                <div class = "form-group">
                                    <label>Last Name</label>
                                    <input type = "text" value = "<?php echo $f_admin['lastname']?>" class = "form-control"  name = "lastname"/>
                                </div>
								<div class = "form-group">
									<button class = "btn btn-warning form-control" name = "update_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
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
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <script src = "js/script.js"></script>
</html>