<?php
    require_once 'session.php';
    require_once 'connect.php';
    $mysql_query_1 = "SELECT * FROM applicants";
$mysql_query_2 = "SELECT * FROM bursaries";

if(isset($_POST["btn_search"])){

  $search_by = $_POST["filter-by"];
  $search_term = $_POST["txt_search_term1"];
  $search_term1 = $_POST["txt_search_term2"];

  if($search_by!=""&& $search_term!=""){

    switch ($search_by) {
      case 'Filter By':
        $mysql_query_1 = "SELECT * FROM applicants";
        $mysql_query_2 = "SELECT * FROM bursaries";

        break;

      case 'firstname':

      $mysql_query_1 = "SELECT * FROM applicants WHERE firstname LIKE '%$search_term%' ";

      break;
      case 'shool':

        $mysql_query_1 = "SELECT * FROM applicants WHERE school LIKE '%$search_term%'";
  
        break;
        case 'edulevel':

        $mysql_query_1 = "SELECT * FROM applicants WHERE edulevel LIKE '%$search_term%'";
      
        break;

      case 'lastname':

      $mysql_query_1 = "SELECT * FROM applicants WHERE lastname LIKE '%$search_term%'";

      break;

      case 'adm':

      $mysql_query_1 = "SELECT * FROM applicants WHERE adm LIKE '%$search_term%'";

        break;

      case 'ward':

      $mysql_query_1 = "SELECT * FROM applicants WHERE ward LIKE '%$search_term%'";

        break;

      case 'gender':

      $mysql_query_1 = "SELECT * FROM applicants WHERE gender = '$search_term'";

        break;

      case 'constituency':

      $mysql_query_1 = "SELECT * FROM applicants WHERE constituency LIKE '%$search_term%'";

        break;

      default:

      $mysql_query_1 = "SELECT * FROM applicants";

        break;
    }
  }
}

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
           
            <div class="row">
                <div class="col-lg-12">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <center  class="alert alert-success">REPORTS CENTER</center><br>
                         <button id='printButton' class="btn btn-success" onclick='window.print()'>Print</button>
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class = "panel-body pbody">

<form method="post" action="">
<div class="container">
    <div class="row">
        <div class="col-xs-5 col-xs-offset-0">
            <div class="input-group">
                <div class="form-group">
                    <select class="form-control" name="filter-by" value="filter">
                      <option>FilterBy</option>
                      <option>gender</option>
                      <option>school</option>
                      <option>edulevel</option>
                      <option>lastname</option>
                      <option>adm</option>
                      <option>email</option>
                      <option>ward</option>
                      <option>constituency</option>
                      <option>firstname</option>
                    </select>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">
                <input type="text" class="form-control" name="txt_search_term1" placeholder="Search term...">
               
            </div>
            <div class="input-group">
                <div class="form-group">
                    <select class="form-control" name="filter-by" value="filter">
                      <option>FilterBy</option>
                      <option>gender</option>
                      <option>school</option>
                      <option>edulevel</option>
                      <option>lastname</option>
                      <option>adm</option>
                      <option>email</option>
                      <option>ward</option>
                      <option>constituency</option>
                      <option>firstname</option>
                    </select>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">
                <input type="text" class="form-control" name="txt_search_term2" placeholder="Search term...">
            </div>
            <span class="input-group-btn">
                    <input type="submit" class = "form-control btn btn-success" value="search" name="btn_search" id="btn_search" style="border-radius:0px">
                </span>

        </div>
    </div>
</div>
</form>
<br>
<table class="table table-bordered table-hover">

    <thead>
      <tr>
          <th style="text-align:center">Student Name</th>
          <th style="text-align:center">Adm</th>
          <th style="text-align:center">Email</th>
          <th style="text-align:center">Gender</th>
          <th style="text-align:center">Constituency</th>
          <th style="text-align:center">Ward</th>
          <th style="text-align:center">EduLevel</th>
          <th style="text-align:center">School</th>
          <th style="text-align:center">sch. account</th>
          <th style="text-align:center">bursary title</th>
          <th style="text-align:center">Amount</th>

      </tr>

    </thead>

    <tbody>
      <?php
      $mysql_query_command_1 = $mysql_query_1;
      $execute_result_query = mysqli_query($conn,$mysql_query_command_1);
      while ($row_set = mysqli_fetch_array($execute_result_query)){

        echo "<tr style='text-align:center;font-size:1.1em'>";

        echo "<td>".$row_set["firstname"]."&nbsp;".$row_set["lastname"]."</td>";
        echo "<td>".$row_set["adm"]."</td>";
        echo "<td>".$row_set["email"]."</td>";
        echo "<td>".$row_set["gender"]."</td>";
        echo "<td>".$row_set["constituency"]."</td>";
        echo "<td>".$row_set["ward"]."</td>";
        echo "<td>".$row_set["edulevel"]."</td>";
        echo "<td>".$row_set["school"]."</td>";
        echo "<td>".$row_set["bank"]."</td>";
        echo "<td>".$row_set["bursary_title"]."</td>";
        echo "<td>".$row_set["amount"]."</td>";

        echo "</tr>";

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
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    function printTable() {
        // Open a new window and write the table content to it
        var printWindow = window.open('', '_blank');
        printWindow.document.write('<html><head><title>Print</title></head><body>');
        printWindow.document.write(document.querySelector('table').outerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        // Wait for the document to be ready before printing
        printWindow.onload = function() {
            printWindow.print();
            printWindow.onafterprint = function() {
                printWindow.close();
            };
        };
    }
</script>

</body>

</html>
