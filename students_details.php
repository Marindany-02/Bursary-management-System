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

    <title>Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                    <button type = "button" id = "add_admin" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Add New student</button>
                    <button style = "display:none;" type = "button" id = "cancel_admin" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
                    </br></br>

                    <div  id = "a_table" class="panel panel-default">
                        <div class="panel-heading">
                           Accounts/students
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Firstname</th>
                                        <th>Pastname</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                    $a_query = $conn->query("SELECT * FROM `students` WHERE `admin_id`='$_SESSION[admin_id]' ") or die(mysqli_error());
                                    while($a_fetch = $a_query->fetch_array()){
                                        
                                ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $a_fetch['user_name']?></td>
                                        <td><?php echo $a_fetch['first_name']?></td>
                                        <td><?php echo $a_fetch['last_name']?></td>
                                        <td><?php echo md5($a_fetch['password'])?></td>
                                        <td><?php echo $a_fetch['email']?></td>
                                        <td><?php echo $a_fetch['gender']?></td>
                                        <td class="center">
                                          <a href = "edit_students.php?student_id=<?php echo $a_fetch['id']?>" class = "btn btn-warning"><span class=  "glyphicon glyphicon-edit"></span> Update</a> <a href = "#" name = "<?php echo $a_fetch['id']?>" data-toggle = "modal" data-target = "#delete_student" class = "btn btn-danger student_id"><span class=  "glyphicon glyphicon-remove"></span> Remove</a>
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

                   <div class = "modal fade" id = "delete_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                    <div class = "modal-dialog" role = "document">
                        <div class = "modal-content ">
                            <div class = "modal-body">
                                <center><label class = "text-danger">Are you sure you want to remove this student from your list?</label></center>
                                <br />
                                <center><a class = "btn btn-danger delete_student" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div id = "a_form" style = "display:none;" class = "panel panel-default">
                        <div  class = " panel-heading" >    
                                <div class = "alert alert-success">Accounts/students/Add new</div>
                                <div style = "width:40%; margin-left:32%;"> 
                                    <form method = "POST" action = "add_student.php"> 
                                        <div class = "form-group">
                                            <label>Username</label>
                                            <input type = "text" class = "form-control"  id="userName" name = "userName"/>
                                        </div>
                                        <div class = "form-group">
                                            <label>Firstname</label>
                                            <input type = "text" class = "form-control"  id="firstName" name = "firstName"/>
                                        </div>
                                        <div class = "form-group">
                                            <label>lastname</label>
                                            <input type = "text" class = "form-control"  id="lastName" name = "lastName"/>
                                        </div>
                                        <div class = "form-group">
                                            <label>Password</label>
                                            <input type = "password" class = "form-control"  id="userPass" name = "userPass"/>
                                        </div>
                                        <div class = "form-group">
                                            <label>Email</label>
                                            <input type = "email" class = "form-control"  id="userEmail" name = "userEmail"/>
                                        </div>
                                        <div class = "form-group">
                                            <label>gender</label>
                                            <input type = "text" class = "form-control"  id="userGender" name = "userGender"/>
                                        </div>
                                        <div class = "form-group">
                                            <button class = "btn btn-primary form-control" name = "save_student"><span class = "glyphicon glyphicon-save"></span> Save</button>
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

        $('.student_id').on('click', function(){
            $student_id = $(this).attr('name');
            $('.delete_student').on('click', function(){
                window.location = 'delete_student.php?student_id=' + $student_id;
            });
        });
    });
    </script>

</body>

</html>
