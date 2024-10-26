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
                                       <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $act_query = $conn->query("SELECT * FROM `sms`") or die(mysqli_error($conn));
                                while($act_fetch = $act_query->fetch_array()){
                                     $a_query = $conn->query("SELECT * FROM `applicants` ") or die(mysqli_error($constituency));
                                     $a_fetch = $a_query->fetch_array();
                                ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $act_fetch['name']?></td>
                                        <td><?php echo $act_fetch['message']?></td>
                                        <td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['send_date']))."</label>"?></td>
                                        <td style="color: yellowgreen"><?php echo $a_fetch['status']?></td>
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
                   

                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src = "../js/script.js"></script>
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
