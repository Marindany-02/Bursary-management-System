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
           <br />
           <div class="alert alert-success">
                Welcome, <?php $name = ISSET($_SESSION['firstname']) ? $_SESSION['firstname'].' '.$_SESSION['lastname']:"";echo $name ?>
           </div>
           <div class="alert alert-danger">
                Note: We ONLY list Bursaries under your WARD and you should ONLY apply once.
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
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
                                        <th>Account Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $act_query = $conn->query("SELECT * FROM `bursaries` WHERE `ward` = '$_SESSION[ward]' ") or die(mysqli_error($conn));
                                while($act_fetch = $act_query->fetch_array()){
                                    $b_query = $conn->query("SELECT * FROM `users` WHERE  `id` = '$_SESSION[id]' && `edulevel`='$_SESSION[edulevel]' ") or die(mysqli_error($conn));
                                    $b_valid = $b_query->num_rows;
                                    $b_fetch = $b_query->fetch_array()
                                    

                                ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $act_fetch['title']?></td>
                                        <td><?php echo $act_fetch['description']?></td>
                                        <td><?php echo $act_fetch['constituency']?></td>
                                        <td><?php echo $act_fetch['ward']?></td>
                                        <td><?php echo $act_fetch['level']?></td>
                                        <td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['start']))."</label>"?></td>
                                        <td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['end']))."</label>"?></td>
                                        <td><?php echo $b_fetch['status']?></td>
</i></td>
                                        <td class="center">
                                         <?php
                                              if($act_fetch['ward'] == $_SESSION['ward' ] && $b_fetch['status'] == 'Approved'){
                                                ?>
                                                <a href = "applicant_details.php?activity_id=<?php echo $act_fetch['bursary_id']?>" class = "btn btn-success">Apply</a> 
                                                <?php
                                            }else{
                                                ?>
                                                <a href = "#" class = "btn btn-success" disabled>Apply</a>
                                                <?php
                                              }
                                         ?> 
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
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
                        <div class = "alert alert-success">add job/ new</div>
                        <div style = "width:40%; margin-left:32%;"> 
                            <form method = "POST" action = "add_activity.php">  
                                <div class = "form-group">
                                    <label>Title</label>
                                    <input type = "text" class = "form-control" name = "title" required = "required"/>
                                </div>
                                <div class = "form-group">
                                    <label>Description</label>
                                    <textarea name = "description" style = "height:100px; resize:none;" class = "form-control" required = "required"></textarea>
                                </div>
                                <div class = "form-inline">
                                    <label>Start</label>
                                    <input type = "date" style = "width:41%;" class = "form-control"  name = "start" required = "required"/>
                                    <label>End</label>
                                    <input type = "date" style = "width:41%;" class = "form-control"  name = "end" required = "required"/>
                                </div>
                                <br />
                                <div class = "form-group">
                                    <button class = "btn btn-primary form-control" name = "save_activity"><span class = "glyphicon glyphicon-save"></span> Save</button>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src = "../js/script.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });

        $('.activity_id').on('click', function(){
            $activity_id = $(this).attr('name');
            $('.delete_activity').on('click', function(){
                window.location = 'delete_activity.php?activity_id=' + $activity_id;
            });
        })
    });
    </script>
</body>
</html>
