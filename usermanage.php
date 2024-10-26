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
            <!-- /.row -->
             </br>
            <div class="alert alert-success">
                STUDENTS CENTER  <button id='printButton' class="btn btn-success" onclick='printTable()'>Print List Of ALL Students</button>

                
            </div> 

            <div class="row">
                <div class="col-lg-12">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           List of Students
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                      <th>ADM</th>
                                        <th>Firstname</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>ward</th>
                                        <th>Edu_Level</th>
                                        <th>School</th>
                                        <th>Family</th>
                                        <th>Evidence</th>
                                        <th>Bank A/c</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    $s_query = $conn->query("SELECT * FROM `users` WHERE `role`='0'") or die(mysqli_error($conn));
                                    while($s_fetch = $s_query->fetch_array())
                                   
                                 
                                    {  
                                ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $s_fetch['adm']?></td>
                                        <td><?php echo $s_fetch['firstname']?></td>
                                        <td><?php echo $s_fetch['email']?></td>
                                        <td><?php echo $s_fetch['phone']?></td>
                                        <td><?php echo $s_fetch['gender']?></td>
                                        <td><?php echo $s_fetch['ward']?></td>
                                        <td><?php echo $s_fetch['edulevel']?></td>
                                        <td><?php echo $s_fetch['school']?></td>
                                        <td><?php echo $s_fetch['family']?></td>
                                        <td><a href="<?php echo $s_fetch['familystatus'] ?>" target="_blank" rel="noopener noreferrer">View Document</a></td>
                                        <td><?php echo $s_fetch['bank']?></td>
                                        <td style="color:yellowgreen;font-weight: bold"><?php echo $s_fetch['status']?></td>
                                        <td class="center">
                                        <a href = "edit_status.php?id=<?php echo $s_fetch['id']?>" class = "btn btn-success id"> Approve</a> 
                                        <a href = "edit_status.php?rejected_id=<?php echo $s_fetch['id']?>" class = "btn btn-warning id"><span class=  "glyphicon glyphicon-remove"></span> Reject</a>
                                             
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
     $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        function printTable() {
            // Open a new window and write the table content to it
            var printWindow = window.open('doc by BSM', '_blank');
            printWindow.document.write('<html><head><title>Print</title></head><body>');
            printWindow.document.write('<style>table { border-collapse: collapse; width: 100%; } th, td { border: 1px solid #dddddd; text-align: left; padding: 8px; } th { background-color: #f2f2f2; }</style>');
            printWindow.document.write(document.querySelector('table').outerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();

            // Wait for the document to be ready before printing
            printWindow.onload = function () {
                printWindow.print();
                printWindow.onafterprint = function () {
                    printWindow.close();
                };
            };
        }
</script>

</body>

</html>
