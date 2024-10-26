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
                    <button type = "button" id = "add_activity" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Compose</button>
                    <button style = "display:none;" type = "button" id = "cancel_activity" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
                    </br></br>

                    <div  id = "act_table" class="panel panel-default">
                        <div class="panel-heading">
                           Messages
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Send To</th>
                                        <th>Messages</th>
                                        <th>DateTime</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                $act_query = $conn->query("SELECT * FROM `sms`") or die(mysqli_error($conn));
                                while($act_fetch = $act_query->fetch_array()){
                                ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $act_fetch['name']?></td>
                                        <td><?php echo $act_fetch['message']?></td>
                                        <td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['send_date']))."</label>"?></td>
                                        <td>
                                            <a href = "#" data-toggle = "modal" data-target = "#delete_activity" name = "<?php echo $act_fetch['sms_id']?>" class = "btn btn-danger sms_id"><span class=  "glyphicon glyphicon-trash"></span> Delete</a></td>
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
                        <div class = "alert alert-success">add message/ new</div>
                        <div style = "width:40%; margin-left:32%;"> 
                            <form method = "POST" action = "add_sms.php">  
                                <div class = "form-group">
                                    <label>Send To</label>
                                    <select class="form-control" name="sms_group">
                                        <option>--select  group--</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Rejected">Rejected</option>
                                       
                                    </select>
                                   
                                </div>
                                <div class = "form-group">
                                    <label>Message</label>
                                    <textarea name = "message" style = "height:100px; resize:none;" class = "form-control" required = "required"></textarea>
                                </div>
                                
                                <br />
                                <div class = "form-group">
                                    <button class = "btn btn-primary form-control" name = "save_sms"><span class = "glyphicon glyphicon-send"></span> Send</button>
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

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <script src = "js/script.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });

        $('.sms_id').on('click', function(){
            $sms_id = $(this).attr('name');
            $('.delete_activity').on('click', function(){
                window.location = 'delete_sms.php?sms_id=' + $sms_id;
            });
        })
    });
    </script>

</body>

</html>
