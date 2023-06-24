<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <div id="wrapper">
        <?php include 'includes/nav.php' ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Retrieve blood details between start date and end date</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill up the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="#" method="post" onsubmit="return validate()">

                                        <div class="form-group">
                                            <label>Enter Start Date</label>
                                            <input class="form-control" type="date" name="sdate" required>
                                        </div>

                                        <div class="form-group">
                                                <label>Enter Last Date</label>
                                                <input class="form-control" type="date" name="edate" required>
                                            </div>



                                        <button type="submit" class="btn btn-success btn-default" style="border-radius: 0%;">Submit Form</button>


                                    </form>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
      </div>
        <?php
        if (isset($_GET['submit'])) {
            include("../admin/dbconnect.php");
            $sdate_info = $_GET['sdate'];
            $edate_info = $_GET['edate'];
            $qry = "CALL ret_blood('$sdate_info','$edate_info')";
            $result = mysqli_query($conn, $qry);


            echo "
<thead>
<tr>
<th>id</th>
<th>Name</th>
<th>gender</th>
<th>dob</th>
<th>weight</th>
<th>bloodgroup</th>
<th>address</th>
<th>contact</th>
<th>bloodqty</th>
<th>collection</th>
</tr>
</thead>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tbody>
<tr>
<td>" . $row['id'] . "</td>
<td>" . $row['name'] . "</td>
<td>" . $row['gender'] . "</td>
<td>" . $row['dob'] . "</td>
<td>" . $row['weight'] . "</td>
<td>" . $row['bloodgroup'] . "</td>
<td>" . $row['address'] . "</td>
<td>" . $row['contact'] . "</td>
<td>" . $row['bloodqty'] . "</td>
<td>" . $row['collection'] . "</td>

</tr>
</tbody>";
            }
        }


        ?>

    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
