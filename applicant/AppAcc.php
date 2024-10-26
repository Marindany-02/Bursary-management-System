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
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background: #fff">
            <?php include 'header.php'?>
            <!-- /.navbar-top-links -->
            <?php include 'sidebar.php'?>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
           <br>
            <div class="row">
                <div class="col-lg-12">
                    <div  id = "a_table" class="panel panel-default">
                        <div class="panel-heading">
                           Accounts / My Info
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ADM</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>Edu_Level</th>
                                        <th>School</th>
                                        <th>Constituency</th>
                                        <th>Ward</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                    $a_query = $conn->query("SELECT * FROM `users` WHERE `id`='$_SESSION[id]' ") or die(mysqli_error($conn));
                                    while($a_fetch = $a_query->fetch_array()){
                                        
                                ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $a_fetch['adm']?></td>
                                        <td><?php echo $a_fetch['firstname']?></td>
                                        <td><?php echo $a_fetch['lastname']?></td>
                                        <td><?php echo $a_fetch['email']?></td>
                                        <td><?php echo $a_fetch['phone']?></td>
                                        <td><?php echo $a_fetch['gender']?></td>
                                        <td><?php echo $a_fetch['edulevel']?></td>
                                        <td><?php echo $a_fetch['school']?></td>
                                        <td><?php echo $a_fetch['constituency']?></td>
                                        <td><?php echo $a_fetch['ward']?></td>
                                        <td class="center">
                                          <a href = "edit_details.php?id=<?php echo $a_fetch['id']?>" class = "btn btn-warning"><span class=  "glyphicon glyphicon-edit"></span></a> 
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

                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
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
