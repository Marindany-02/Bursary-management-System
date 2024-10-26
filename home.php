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
                    <button type = "button" id = "add_activity" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Add Bursary</button>
                    <button style = "display:none;" type = "button" id = "cancel_activity" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
                    </br></br>

                    <div  id = "act_table" class="panel panel-default">
                        <div class="panel-heading">
                           Bursaries
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
                                $act_query = $conn->query("SELECT * FROM `bursaries`") or die(mysqli_error($conn));
                                while($act_fetch = $act_query->fetch_array()){
                                ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $act_fetch['title']?></td>
                                        <td><?php echo $act_fetch['description']?></td>
                                        <td><?php echo $act_fetch['constituency']?></td>
                                        <td><?php echo $act_fetch['ward']?></td>
                                        <td><?php echo $act_fetch['level']?></td>
                                        <td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['start']))."</label>"?></td>
                                        <td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['end']))."</label>"?></td>
                                        <td class="center">

                                           <a href = "edit_bursary.php?bursary_id=<?php echo $act_fetch['bursary_id']?>" class = "btn btn-warning"><span class=  "glyphicon glyphicon-edit"></span> Update</a> 

                                           <a href = "delete_bursary.php?bursary_id= <?php echo $act_fetch['bursary_id']?>" class = "btn btn-danger bursary_id"><span class=  "glyphicon glyphicon-trash"></span> Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                 
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                   <div class = "modal fade" id = "delete_activity" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                    <div class = "modal-dialog" role = "document">
                        <div class = "modal-content ">
                            <div class = "modal-body">
                                <center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
                                <br />
                                <center><a class = "btn btn-danger delete_activity" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
                            </div>
                        </div>
                    </div>
                 </div>

                 <div id = "act_form" style = "display:none;" class = "panel panel-default">
                    <div  class = " panel-heading" >    
                        <div class = "alert alert-success">add Hostel/ room</div>
                        <div style = "width:40%; margin-left:32%;"> 
                            <form method = "POST" action = "add_bursary.php">  
                                <div class = "form-group">
                                    <label>Title</label>
                                    <input type = "text" class = "form-control" name = "title" required = "required"/>
                                </div>
                                <div class = "form-group">
                                    <label>Hostel Name</label>
                                    <textarea name = "description" style = "height:100px; resize:none;" class = "form-control" required = "required"></textarea>
                                </div>
                                <div class = "form-group">
                                    <label>Constituency</label>
                                    <select class="form-control" name="constituency" id="county" required = "required">
                                        <option value="">Select constituency</option>
                                        <option value="sotik">Sotik</option>
                                        <option value="chepalu">Chepalungu</option>
                                        <option value="konoin">Konoin</option>
                                        <option value="Bomet East">Bomet East</option>
                                        <option value="Bomet Central">Bomet Central</option>
                                    </select>
                                </div>
                                <div class = "form-group">
                                    <label>Ward</label>
                                    <select class="form-control" name="ward" id="const" required = "required">
                                        <option value="">Select Ward</option>
                                        <option value="kip">Kipreres</option>
                                         <option value="Kimulot">Kimulot</option>
                                        <option value="sigor">Sigor</option>
                                        <option value="Mogogosiek">Mogogosiek</option>
                                        <option value="boito">Boito</option>
                                        <option value="chepchabas">Chepchabas</option>
                                    </select>
                                </div>
                                <div class = "form-group">
                                    <label>Level</label>
                                    <select class="form-control" name="level" id="level" required = "required">
                                        <option value="">Select Education Level</option>
                                        <option value="Undergraduate">Undergraduate</option>
                                        <option value="Secondary">Secondary</option>
                                        <option value="Primary">Primary</option>
                                    </select>
                                </div>
                                <div class = "form-inline">
                                    <label>Start</label>
                                    <input type = "date" style = "width:41%;" class = "form-control"  name = "start" required = "required"/>
                                    <label>End</label>
                                    <input type = "date" style = "width:41%;" class = "form-control"  name = "end" required = "required"/>
                                </div>
                                <br />
                                <div class = "form-group">
                                    <button class = "btn btn-primary form-control" name = "save_bursary"><span class = "glyphicon glyphicon-save"></span> Save</button>
                                </div>
                            </form> 
                        </div>  
                    </div>
                </div>
                <!--end of a_form div -->

                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <div class = "modal fade" id = "delete_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
        <div class = "modal-dialog" role = "document">
            <div class = "modal-content ">
                <div class = "modal-body">
                    <center><label class = "text-danger">Are you sure you want to delete this particulars?</label></center>
                    <br />
                    <center><a class = "btn btn-danger delete_student" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
                </div>
            </div>
        </div>
    </div>

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
    <script src="dist/js/sb-admin-2.js"></script>

    <script src = "js/script.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });

        $('.activity_id').on('click', function(){
            $activity_id = $(this).attr('name');
            $('.delete_activity').on('click', function(){
                window.location = 'delete_bursary.php?activity_id=' + $activity_id;
            });
        })
    });
    </script>

</body>

</html>
