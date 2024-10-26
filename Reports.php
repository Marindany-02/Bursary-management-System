<?php
// Include necessary files
require_once 'session.php';
require_once 'connect.php';

// Default SQL queries
$mysql_query_1 = "SELECT * FROM applicants";
$mysql_query_2 = "SELECT * FROM bursaries";

// Check if the form is submitted
if (isset($_POST["btn_search"])) {
    // Get filter criteria from the form
    $gender = $_POST["gender"];
    $ward = $_POST["ward"];
    $school = $_POST["school"];
    $edulevel = $_POST["edulevel"];

    // Build the SQL query based on the provided parameters
    $whereClause = "1"; // Default value to include all records

    if (!empty($gender)) {
        $whereClause .= " AND gender = '$gender'";
    }

    if (!empty($ward)) {
        $whereClause .= " AND ward = '$ward'";
    }
    if (!empty($school)) {
        $whereClause .= " AND school = '$school'";
    }
    if (!empty($edulevel)) {
        $whereClause .= " AND edulevel = '$edulevel'";
    }

    // Build the complete SQL query
    $mysql_query_1 = "SELECT * FROM applicants WHERE $whereClause";
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
    
    <head>
    <!-- ... other head elements ... -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

    
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
            <br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center class="alert alert-success">BSM REPORTS CENTER</center><br>
                            <!-- Add the "Generate PDF" button -->
                            
                            <button class="btn btn-primary" onclick="generatePDF()">Generate PDF</button>
                            <button id='printButton' class="btn btn-success" onclick='printTable()'>Print</button>
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="panel-body pbody">
                                <!-- Rest of your HTML content -->
                                <!-- ... -->
                                <form method="post" action="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-5 col-xs-offset-0">
                                                <div class="input-group">
                                                    <label for="gender">Gender</label>
                                                    <div class="form-group">
                                                        <select class="form-control" name="gender">
                                                            <option value="">Select Gender</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Male">Male</option>
                                                        </select>
                                                    </div>

                                                    <label for="gender">Edulevel</label>
                                                    <div class="form-group">
                                                        <select class="form-control" name="edulevel">
                                                            <option value="">Select EduLevel</option>
                                                            <option value="Undergraduate">Undergraduate</option>
                                                            <option value="Secondary">Secondary</option>
                                                            <option value="Both_Alive">Primary</option>
                                                        </select>
                                                    </div>

                                                    <label for="ward">Ward</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="ward" placeholder="Enter Ward">
                                                    </div>
                                                    <label for="school">School</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="school" placeholder="Enter school">
                                                    </div>

                                                    <span class="input-group-btn">
                                                        <input type="submit" class="btn btn-success" value="Filter The Output" name="btn_search" id="btn_search" style="border-radius:0px">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">#</th>
                                            <th style="text-align:center">Student Name</th>
                                            <th style="text-align:center">Adm</th>
                                            <th style="text-align:center">Email</th>
                                            <th style="text-align:center">Gender</th>
                                            <th style="text-align:center">Ward</th>
                                            <th style="text-align:center">EduLevel</th>
                                            <th style="text-align:center">School</th>
                                            <th style="text-align:center">Sch. account</th>
                                            <th style="text-align:center">Bursary Title</th>
                                            <th style="text-align:center">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
    $execute_result_query = mysqli_query($conn, $mysql_query_1);
    $counter = 1; // Initialize counter
    $totalAmount = 0; // Initialize total amount

    while ($row_set = mysqli_fetch_array($execute_result_query)) {
        echo "<tr style='text-align:center;font-size:1.1em'>";
        echo "<td>" . $counter++ . "</td>";
        echo "<td>" . $row_set["firstname"] . "&nbsp;" . $row_set["lastname"] . "</td>";
        echo "<td>" . $row_set["adm"] . "</td>";
        echo "<td>" . $row_set["email"] . "</td>";
        echo "<td>" . $row_set["gender"] . "</td>";
        echo "<td>" . $row_set["ward"] . "</td>";
        echo "<td>" . $row_set["edulevel"] . "</td>";
        echo "<td>" . $row_set["school"] . "</td>";
        echo "<td>" . $row_set["bank"] . "</td>";
        echo "<td>" . $row_set["bursary_title"] . "</td>";
        echo "<td>" . $row_set["amount"] . "</td>";
        echo "</tr>";

        // Accumulate amount for the total
        $totalAmount += $row_set["amount"];
    }
    ?>
    <!-- Add a row for the total amount -->
    <tr style='text-align:center;font-size:1.1em'>
        <td colspan="9"></td>
        <td><strong>Total</strong></td>
        <td><?php echo $totalAmount; ?></td>
    </tr>
                                    </tbody>
                                </table>
                            </div>
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
    <body>
    <!-- ... existing HTML content ... -->

    <!-- Bar Chart -->
    <div class="chart-container">
        <canvas id="genderBarChart"></canvas>
    </div>

    <!-- Pie Chart -->
    <div class="chart-container">
        <canvas id="genderPieChart"></canvas>
    </div>

    <!-- Doughnut Chart -->
    <div class="chart-container">
        <canvas id="genderDoughnutChart"></canvas>
    </div>

    <!-- ... remaining HTML content ... -->
</body>


    <!-- Add the "Generate PDF" button -->
    <script>
        function generatePDF() {
            // Create a new jsPDF instance
            var pdf = new jsPDF();

            // Add content to the PDF
            pdf.text(20, 20, 'Reports Center');

            // Add table content
            var headers = ['#', 'Student Name', 'Adm', 'Email', 'Gender', 'Ward', 'EduLevel', 'School', 'Sch. account', 'Bursary Title', 'Amount'];
            var data = [];

            <?php
            $execute_result_query = mysqli_query($conn, $mysql_query_1);
            $counter = 1; // Initialize counter
            while ($row_set = mysqli_fetch_array($execute_result_query)) {
                echo "data.push(['" . $counter++ . "', '" . $row_set["firstname"] . ' ' . $row_set["lastname"] . "', '" . $row_set["adm"] . "', '" . $row_set["email"] . "', '" . $row_set["gender"] . "', '" . $row_set["ward"] . "', '" . $row_set["edulevel"] . "', '" . $row_set["school"] . "', '" . $row_set["bank"] . "', '" . $row_set["bursary_title"] . "', '" . $row_set["amount"] . "']);";
            }
            ?>

            pdf.autoTable({
                head: [headers],
                body: data,
                startY: 30
            });

            // Save the PDF
            pdf.save('reports.pdf');
        }
        function printTable() {
        // Open a new window for printing
        var printWindow = window.open('', '_blank');

        // Add the table content to the new window
        printWindow.document.write('<html><head><title>Print</title>');
        printWindow.document.write('<style>table { border-collapse: collapse; width: 100%; } th, td { border: 1px solid #dddddd; text-align: left; padding: 8px; } th { background-color: #f2f2f2; }</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write('<h1>BSM Reports Center</h1>');

        // Get the table HTML content
        var tableContent = document.querySelector('.table').outerHTML;
        printWindow.document.write(tableContent);

        printWindow.document.write('</body></html>');
        printWindow.document.close();

        // Print the new window
        printWindow.print();
    }
    </script>
</body>

</html>
