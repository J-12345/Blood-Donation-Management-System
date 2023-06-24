<html>

<head>


    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="icofont/icofont.min.css">


</head>


<body>
    <div id="wrapper">

      <?php
      include('includes/header.php');
      include('includes/navbar.php');
      ?>


        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class=".col-lg-12">
                        <h1 class="page-header">Retrieve Password</h1>
                    </div>
                </div>
                <div class="row">
                    <form action="#" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                          <div class="form-group" text-center justify-content-center>
                              <label>Enter Date Of Birth</label>
                              <input class="form-control" type="date" name="dob" id="dob" required><span id="age-msg"></span>
                          </div>
                          <div class="form-group" text-center justify-content-center>

                                <label>Enter Email Id</label>

                                <input class="form-control" type="email" id="email" placeholder="Enter Email Id" name="email" required> <span id="email-msg"></span>
                          </div>

                        <div class="form-group center-aligned">
                            <button type="submit" class="btn btn-lg btn-success" name="submit">Search</button>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="row">
                    <div class=".col-lg-12">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                        <?php
                                        if (isset($_GET['submit'])) {
                                            include("admin/dbconnect.php");
                                            $email_info = $_GET['email'];
                                            $dob_info = $_GET['dob'];
                                            $qry = "select * from donor where email='$email_info' and dob='$dob_info'";
                                            $result = mysqli_query($conn, $qry);


                                            echo "
						<thead>
						<tr>
							<th>Password</th>
						</tr>
						</thead>";

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<tbody>
						  <tr>
						  <td>" . $row['password'] . "</td>

						</tr>
						</tbody>";
                                            }
                                            echo " <a href='userlogin.php' div style='text-align: center'><h3>Go Back</h3>";
                                        }


                                        ?>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
