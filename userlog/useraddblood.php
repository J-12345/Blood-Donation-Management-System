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

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">

</head>

<body>

    <div id="wrapper">

    <?php include 'includes/donornav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class=".col-lg-12">
                    <h1 class="page-header">Donate Blood Section</h1>
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
                                    <form role="form" action="useraddedblood.php" method="POST" onsubmit="return validate()>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" placeholder="Harry Den" type="text" name="name" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Gender [ M/F/O ]</label>
                                            <select class="form-control" placeholder="M for Male & F for Female & O for Other" type="text" name="gender" required>
                                              <option value='M'>M</option>
                                              <option value='F'>F</option>
                                              <option value='O'>O</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter D.O.B</label>
                                            <input class="form-control" type="date" name="dob" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Weight</label>
                                            <input class="form-control" type="number" placeholder="KG" name="weight" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Blood Group</label>
                                            <select class="form-control" type="text" placeholder="Example: B+, O-, B-" name="bloodgroup" required>
                                                <!-- <option>Select Blood Group</option> -->
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label>Enter Address</label>
                                            <input class="form-control" type="text" placeholder="Full Address" name="address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Contact Number</label>
                                            <input class="form-control" type="number" placeholder="10 digits" name="contact" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Blood Quantity</label>
                                            <input class="form-control" type="number" name="bloodqty" required>
                                        </div>

                                        <div class="form-group">
                                                <label>Collection Date</label>
                                                <input class="form-control" type="date" name="collection" required>
                                            </div>



                                        <button type="submit"  class="btn btn-success">Submit</button>
                                        </div>
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
    <!-- /#wrapper -->
    <script>
      function validate() {
          var email = document.getElementById("email").value;
          var mobNo = document.getElementById("contact").value;
          var currYear = new Date().getFullYear()
          var dob = document.getElementById("dob").value
          var dobArray = dob.split('-');
          var year = dobArray[0];
          var age = currYear - year;
          var weight = document.getElementById("weight").value
          if (email.IndexOf('@') <= 0) {
              document.getElementById('email-msg').innerHTML = "Please Enter a Valid Email Address";
              return False;
          }
          if (strlen(mobNo) != 10 || isNaN(mobNo)) {
              document.getElementById('mob-msg').innerHTML = "Please Enter a 10 Digit Contact Number";
              return False;
          }
          if (age < 18 || age >= 65) {
              document.getElementById("age-msg").innerHTML = "Sorry, you cannot register as Donor, you must be between 18-65 years to donate Blood";
              return False;
          }
          if (weight < 50) {
              document.getElementById("weight-msg").innerHTML = "Sorry, you cannot register as Donor, you must at least 50 kg weight to donate Blood";
              return False;
          }
          return True;
      }
    </script>
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
