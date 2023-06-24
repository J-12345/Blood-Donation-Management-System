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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

    <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Donor's Detail</h1>
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
                                    <form role="form" action="added.php" method="post">

                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" name="name" type="text" placeholder="Example:Harry Den" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Guardian's Name</label>
                                            <input class="form-control" placeholder="Guardian's Name" name="guardiansname" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Gender [ M/F/O ]</label>
                                            <select class="form-control" placeholder="M or F" name="gender" required>
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
                                            <input class="form-control" type="number" placeholder="Enter Weight" name="weight" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Blood Group</label>
                                            <select class="form-control" placeholder="Eg: B+" name="bloodgroup" required>
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
                                            <label>Enter Email Id</label>
                                            <input class="form-control" type="email" placeholder="Enter Email Id" name="email" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter City</label>
                                            <select class="form-control" type="text" placeholder="Enter Address Here" name="address" required>
                                              <option value="Afzalpur">Afzalpur</option>
                                              <option value="Ajjampur">Ajjampur</option>
                                              <option value="Aland">Aland</option>
                                              <option value="Alnavar">Alnavar</option>
                                              <option value="Alur">Alur</option>
                                              <option value="Anekal">Anekal</option>
                                              <option value="Ankola">Ankola</option>
                                              <option value="Annigeri">Annigeri</option>
                                              <option value="Arkalgud">Arkalgud</option>
                                              <option value="Arsikere">Arsikere</option>
                                              <option value="Athni">Athni</option>
                                              <option value="Aurad">Aurad</option>
                                              <option value="Badami">Badami</option>
                                              <option value="Bagalkot">Bagalkot</option>
                                              <option value="Bagepalli">Bagepalli</option>
                                              <option value="Bail-Hongal">Bail-Hongal</option>
                                              <option value="Ballari">Ballari</option>
                                              <option value="Banavar">Banavar</option>
                                              <option value="Bangalore Rural">Bangalore Rural</option>
                                              <option value="Bangalore Urban">Bangalore Urban</option>
                                              <option value="Bangarapet">Bangarapet</option>
                                              <option value="Bannur">Bannur</option>
                                              <option value="Bantval">Bantval</option>
                                              <option value="Basavakalyan">Basavakalyan</option>
                                              <option value="Basavana Bagevadi">Basavana Bagevadi</option>
                                              <option value="Belgaum">Belgaum</option>
                                              <option value="Bellary">Bellary</option>
                                              <option value="Belluru">Belluru</option>
                                              <option value="Beltangadi">Beltangadi</option>
                                              <option value="Belur">Belur</option>
                                              <option value="Bengaluru">Bengaluru</option>
                                              <option value="Bhadravati">Bhadravati</option>
                                              <option value="Bhalki">Bhalki</option>
                                              <option value="Bhatkal">Bhatkal</option>
                                              <option value="Bidar">Bidar</option>
                                              <option value="Bijapur">Bijapur</option>
                                              <option value="Bilgi">Bilgi</option>
                                              <option value="Birur">Birur</option>
                                              <option value="Byadgi">Byadgi</option>
                                              <option value="Byndoor">Byndoor</option>
                                              <option value="Canacona">Canacona</option>
                                              <option value="Challakere">Challakere</option>
                                              <option value="Chamrajnagar">Chamrajnagar</option>
                                              <option value="Channagiri">Channagiri</option>
                                              <option value="Channapatna">Channapatna</option>
                                              <option value="Channarayapatna">Channarayapatna</option>
                                              <option value="Chik Ballapur">Chik Ballapur</option>
                                              <option value="Chikkaballapur">Chikkaballapur</option>
                                              <option value="Chikmagalur">Chikmagalur</option>
                                              <option value="Chiknayakanhalli">Chiknayakanhalli</option>
                                              <option value="Chikodi">Chikodi</option>
                                              <option value="Chincholi">Chincholi</option>
                                              <option value="Chintamani">Chintamani</option>
                                              <option value="Chitapur">Chitapur</option>
                                              <option value="Chitradurga">Chitradurga</option>
                                              <option value="Closepet">Closepet</option>
                                              <option value="Coondapoor">Coondapoor</option>
                                              <option value="Dakshina Kannada">Dakshina Kannada</option>
                                              <option value="Dandeli">Dandeli</option>
                                              <option value="Davanagere">Davanagere</option>
                                              <option value="Devanhalli">Devanhalli</option>
                                              <option value="Dharwad">Dharwad</option>
                                              <option value="Dod Ballapur">Dod Ballapur</option>
                                              <option value="French Rocks">French Rocks</option>
                                              <option value="Gadag">Gadag</option>
                                              <option value="Gadag-Betageri">Gadag-Betageri</option>
                                              <option value="Gajendragarh">Gajendragarh</option>
                                              <option value="Gangawati">Gangawati</option>
                                              <option value="Gangolli">Gangolli</option>
                                              <option value="Gokak">Gokak</option>
                                              <option value="Gokarna">Gokarna</option>
                                              <option value="Goribidnur">Goribidnur</option>
                                              <option value="Gorur">Gorur</option>
                                              <option value="Gubbi">Gubbi</option>
                                              <option value="Gudibanda">Gudibanda</option>
                                              <option value="Gulbarga">Gulbarga</option>
                                              <option value="Guledagudda">Guledagudda</option>
                                              <option value="Gundlupēt">Gundlupēt</option>
                                              <option value="Gurmatkal">Gurmatkal</option>
                                              <option value="Hadagalli">Hadagalli</option>
                                              <option value="Haliyal">Haliyal</option>
                                              <option value="Hampi">Hampi</option>
                                              <option value="Hangal">Hangal</option>
                                              <option value="Harihar">Harihar</option>
                                              <option value="Harpanahalli">Harpanahalli</option>
                                              <option value="Hassan">Hassan</option>
                                              <option value="Haveri">Haveri</option>
                                              <option value="Heggadadevankote">Heggadadevankote</option>
                                              <option value="Hirekerur">Hirekerur</option>
                                              <option value="Hiriyur">Hiriyur</option>
                                              <option value="Holalkere">Holalkere</option>
                                              <option value="Hole Narsipur">Hole Narsipur</option>
                                              <option value="Homnabad">Homnabad</option>
                                              <option value="Honavar">Honavar</option>
                                              <option value="Honnali">Honnali</option>
                                              <option value="Hosanagara">Hosanagara</option>
                                              <option value="Hosangadi">Hosangadi</option>
                                              <option value="Hosdurga">Hosdurga</option>
                                              <option value="Hoskote">Hoskote</option>
                                              <option value="Hospet">Hospet</option>
                                              <option value="Hubli">Hubli</option>
                                              <option value="Hukeri">Hukeri</option>
                                              <option value="Hungund">Hungund</option>
                                              <option value="Hunsur">Hunsur</option>
                                              <option value="Ilkal">Ilkal</option>
                                              <option value="Indi">Indi</option>
                                              <option value="Jagalur">Jagalur</option>
                                              <option value="Jamkhandi">Jamkhandi</option>
                                              <option value="Jevargi">Jevargi</option>
                                              <option value="Kadur">Kadur</option>
                                              <option value="Kalghatgi">Kalghatgi</option>
                                              <option value="Kampli">Kampli</option>
                                              <option value="Kankanhalli">Kankanhalli</option>
                                              <option value="Karkala">Karkala</option>
                                              <option value="Karwar">Karwar</option>
                                              <option value="Kavalur">Kavalur</option>
                                              <option value="Kerur">Kerur</option>
                                              <option value="Khanapur">Khanapur</option>
                                              <option value="Kodagu">Kodagu</option>
                                              <option value="Kodigenahalli">Kodigenahalli</option>
                                              <option value="Kodlipet">Kodlipet</option>
                                              <option value="Kolar">Kolar</option>
                                              <option value="Kollegal">Kollegal</option>
                                              <option value="Konanur">Konanur</option>
                                              <option value="Konnur">Konnur</option>
                                              <option value="Koppa">Koppa</option>
                                              <option value="Koppal">Koppal</option>
                                              <option value="Koratagere">Koratagere</option>
                                              <option value="Kotturu">Kotturu</option>
                                              <option value="Krishnarajpet">Krishnarajpet</option>
                                              <option value="Kudachi">Kudachi</option>
                                              <option value="Kudligi">Kudligi</option>
                                              <option value="Kumsi">Kumsi</option>
                                              <option value="Kumta">Kumta</option>
                                              <option value="Kundgol">Kundgol</option>
                                              <option value="Kunigal">Kunigal</option>
                                              <option value="Kurgunta">Kurgunta</option>
                                              <option value="Kushalnagar">Kushalnagar</option>
                                              <option value="Kushtagi">Kushtagi</option>
                                              <option value="Lakshmeshwar">Lakshmeshwar</option>
                                              <option value="Lingsugur">Lingsugur</option>
                                              <option value="Londa">Londa</option>
                                              <option value="Maddagiri">Maddagiri</option>
                                              <option value="Maddur">Maddur</option>
                                              <option value="Madikeri">Madikeri</option>
                                              <option value="Magadi">Magadi</option>
                                              <option value="Mahalingpur">Mahalingpur</option>
                                              <option value="Malavalli">Malavalli</option>
                                              <option value="Malpe">Malpe</option>
                                              <option value="Malur">Malur</option>
                                              <option value="Mandya">Mandya</option>
                                              <option value="Mangalore">Mangalore</option>
                                              <option value="Manipal">Manipal</option>
                                              <option value="Manvi">Manvi</option>
                                              <option value="Mayakonda">Mayakonda</option>
                                              <option value="Melukote">Melukote</option>
                                              <option value="Mudbidri">Mudbidri</option>
                                              <option value="Muddebihal">Muddebihal</option>
                                              <option value="Mudgal">Mudgal</option>
                                              <option value="Mudgere">Mudgere</option>
                                              <option value="Mudhol">Mudhol</option>
                                              <option value="Mulbagal">Mulbagal</option>
                                              <option value="Mulgund">Mulgund</option>
                                              <option value="Mulki">Mulki</option>
                                              <option value="Mundargi">Mundargi</option>
                                              <option value="Mundgod">Mundgod</option>
                                              <option value="Munirabad">Munirabad</option>
                                              <option value="Murudeshwara">Murudeshwara</option>
                                              <option value="Mysore">Mysore</option>
                                              <option value="Nagamangala">Nagamangala</option>
                                              <option value="Nanjangud">Nanjangud</option>
                                              <option value="Narasimharajapura">Narasimharajapura</option>
                                              <option value="Naregal">Naregal</option>
                                              <option value="Nargund">Nargund</option>
                                              <option value="Navalgund">Navalgund</option>
                                              <option value="Nelamangala">Nelamangala</option>
                                              <option value="Nyamti">Nyamti</option>
                                              <option value="Pangala">Pangala</option>
                                              <option value="Pavugada">Pavugada</option>
                                              <option value="Piriyapatna">Piriyapatna</option>
                                              <option value="Ponnampet">Ponnampet</option>
                                              <option value="Puttur">Puttur</option>
                                              <option value="Rabkavi">Rabkavi</option>
                                              <option value="Raichur">Raichur</option>
                                              <option value="Ramanagara">Ramanagara</option>
                                              <option value="Ranibennur">Ranibennur</option>
                                              <option value="Raybag">Raybag</option>
                                              <option value="Robertsonpet">Robertsonpet</option>
                                              <option value="Ron">Ron</option>
                                              <option value="Sadalgi">Sadalgi</option>
                                              <option value="Sagar">Sagar</option>
                                              <option value="Sakleshpur">Sakleshpur</option>
                                              <option value="Sandur">Sandur</option>
                                              <option value="Sanivarsante">Sanivarsante</option>
                                              <option value="Sankeshwar">Sankeshwar</option>
                                              <option value="Sargur">Sargur</option>
                                              <option value="Saundatti">Saundatti</option>
                                              <option value="Savanur">Savanur</option>
                                              <option value="Seram">Seram</option>
                                              <option value="Shahabad">Shahabad</option>
                                              <option value="Shahpur">Shahpur</option>
                                              <option value="Shiggaon">Shiggaon</option>
                                              <option value="Shikarpur">Shikarpur</option>
                                              <option value="Shimoga">Shimoga</option>
                                              <option value="Shirhatti">Shirhatti</option>
                                              <option value="Shorapur">Shorapur</option>
                                              <option value="Shrirangapattana">Shrirangapattana</option>
                                              <option value="Siddapur">Siddapur</option>
                                              <option value="Sidlaghatta">Sidlaghatta</option>
                                              <option value="Sindgi">Sindgi</option>
                                              <option value="Sindhnur">Sindhnur</option>
                                              <option value="Sira">Sira</option>
                                              <option value="Sirsi">Sirsi</option>
                                              <option value="Siruguppa">Siruguppa</option>
                                              <option value="Someshwar">Someshwar</option>
                                              <option value="Somvarpet">Somvarpet</option>
                                              <option value="Sorab">Sorab</option>
                                              <option value="Sravana Belgola">Sravana Belgola</option>
                                              <option value="Sringeri">Sringeri</option>
                                              <option value="Srinivaspur">Srinivaspur</option>
                                              <option value="Sulya">Sulya</option>
                                              <option value="Suntikoppa">Suntikoppa</option>
                                              <option value="Talikota">Talikota</option>
                                              <option value="Tarikere">Tarikere</option>
                                              <option value="Tekkalakote">Tekkalakote</option>
                                              <option value="Terdal">Terdal</option>
                                              <option value="Tiptur">Tiptur</option>
                                              <option value="Tirthahalli">Tirthahalli</option>
                                              <option value="Tirumakudal Narsipur">Tirumakudal Narsipur</option>
                                              <option value="Tumkur">Tumkur</option>
                                              <option value="Turuvekere">Turuvekere</option>
                                              <option value="Udupi">Udupi</option>
                                              <option value="Ullal">Ullal</option>
                                              <option value="Uttar Kannada">Uttar Kannada</option>
                                              <option value="Vadigenhalli">Vadigenhalli</option>
                                              <option value="Virarajendrapet">Virarajendrapet</option>
                                              <option value="Wadi">Wadi</option>
                                              <option value="Yadgir">Yadgir</option>
                                              <option value="Yelahanka">Yelahanka</option>
                                              <option value="Yelandur">Yelandur</option>
                                              <option value="Yelbarga">Yelbarga</option>
                                              <option value="Yellapur">Yellapur</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Contact Number</label>
                                            <input class="form-control" type="number" placeholder="Contact Number" name="contact" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Username</label>
                                            <input class="form-control" placeholder="Enter Here" name="username" required>
                                            <p class="help-block">In order to create donor's account.</p>
                                            <p class="help-block">Example: harry20</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" name="password" type="password" id="myInput" required>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" onclick="myFunction()">Show Password
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success" class="btn btn-success" style="border-radius:0%";>Submit Form</button>


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
            <!-- /.containerfluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
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
