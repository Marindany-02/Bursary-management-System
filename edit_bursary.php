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
            <div class="row">
                <div class="col-lg-12">
                    </br>
                    <a class = "btn btn-success" href = "home.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
                    </br></br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Bursary/Update
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                            <div style = "width:40%; margin-left:32%;">	
							<?php
								$q_activity = $conn->query("SELECT * FROM `bursaries` WHERE `bursary_id` = '$_REQUEST[bursary_id]'") or die(mysqli_error($conn));
								$f_activity = $q_activity->fetch_array();
							?>
							<form method = "POST" action = "edit_bursary_query.php?bursary_id=<?php echo $f_activity['bursary_id']?>">	
								<div class = "form-group">
									<label>Title</label>
									<input type = "text" value = "<?php echo $f_activity['title']?>" class = "form-control" name = "title" />
								</div>
								<div class = "form-group">
									<label>Decription</label>
									<textarea name = "description" style = "height:100px; resize:none;" class = "form-control"><?php echo $f_activity['description']?></textarea>
								</div>
								<div class = "form-group">
									<label>Constituency</label>
									<select class="form-control" name="constituency" id="constituency">
										<option value="<?php echo $f_activity['constituency']?>"><?php echo $f_activity['constituency']?></option>
										<option value="">Select Counstituency</option>
										<option value="konoin">Konoin</option>
                                        <option value="Bomet East">Bomet East</option>
                                        <option value="Bomet Central">Bomet Central</option>
									</select>
								</div>
								<div class = "form-group">
									<label>Ward</label>
									<select class="form-control" name="ward" id="ward">
										<option value="<?php echo $f_activity['ward']?>"><?php echo $f_activity['ward']?></option>
										<option value="">Select ward</option>
										<<option value="kip">Kipreres</option>
                                         <option value="Longisa">Longisa</option>
                                        <option value="sigor"></option>
                                        <option value="Mogogosiek">Mogogosiek</option>
                                        <option value="boito">Boito</option>
                                        <option value="chepchabas">Chepchabas</option>
									</select>
								</div>
								<div class = "form-group">
									<label>Level</label>
									<select class="form-control" name="level" id="level">
										<option value="<?php echo $f_activity['level']?>"><?php echo $f_activity['level']?></option>
										<option value="">---Select Education Level---</option>
										<option value="Undergraduate">Undergraduate</option>
										<option value="Secondary">Secondary</option>
										<option value="Primary">Primary</option>
									</select>
								</div>
								<div class = "form-inline">
									<label>Start</label>
									<input type = "date" value = "<?php echo $f_activity['start']?>" style = "width:41%;" class = "form-control"  name = "start"/>
									<label>End</label>
									<input type = "date" value = "<?php echo $f_activity['end']?>" style = "width:41%;" class = "form-control"  name = "end"/>
								</div>
								<br />
								<div class = "form-group">
									<button class = "btn btn-warning form-control" name = "update_bursary"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
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
