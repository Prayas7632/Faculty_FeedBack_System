<?php
session_start();
require('dbconfig.php');

error_reporting(0);

extract($_POST);
if (isset($save)) {
  // echo "jhkgjhvj";
  // check user alereay exists or not
  $sql = mysqli_query($conn, "select * from students where stu_email='$e'");

  $r = mysqli_num_rows($sql);

  if ($r == true) {
    $err = "<font color='red'><h3 align='center'>This user already exists</h3></font>";
  } else {

// echo("hello");
    //encrypt your password
    // $pass = md5($p);

    // $query = "INSERT INTO `students`(`stu_id`, `stu_name`, `stu_email`, `stu_password`, `stu_class`, `stu_semester`, `stu_gender`, `stu_dob`) VALUES (6,\"$n\",\"$e\",\"$p\",\"$pro\",\"$sem\",\"$gen\",\"$yy\")";
    // echo("$n\n");
    // echo("$e\n");
    // echo("$p\n");
    // echo("$pro\n");
    // echo("$sem\n");
    // echo("$gen\n");
    // echo("$yy\n");

    $query = mysqli_query($conn, "INSERT INTO `students`(`stu_name`, `stu_email`, `stu_password`, `stu_class`, `stu_semester`, `stu_gender`, `stu_dob`) VALUES (\"$n\",\"$e\",\"$p\",\"$pro\",\"$sem\",\"$gen\",\"$d\")");

    $err = "<h3 align='center' style='color: blue'>Registration successfull !!<h3>";
  }
}

?>

<!DOCTYPE HTML>

<html>

<head>
  <link rel="icon" type="image/png" href="images/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Faculty Feedback System</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/main_reg.css">

  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Vendor CSS-->
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


  <style>
    body {
      width: 100%;
      color: #bfbfbf;
      background-size: cover;
      background: url("images/blur2.jpg");
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
    }

    input[type="radio"] {
      -webkit-appearance: radio;
    }

    input::placeholder {

      font-size: 1.2em;
    }
  </style>
</head>



<body>

  <header id="header" class="alt">
    <div class="logo"><a href="home.php">Welcome to <span> Online Feedback System</span></a></div>
    <a href="#menu">Menu</a>
  </header>

  <!-- Nav -->
  <nav id="menu">

    <ul class="links">

      <li style="color:#FFFFFF">
        <a style="color:#FFFFFF" href="home.php"><i class="fa fa-home fa-fw"></i>Home</a>
      </li>

      <li style="color:#FFFFFF">
        <a style="color:#FFFFFF" href="About1.php"><i class="fa fa-home fa-fw"></i>About</a>
      </li>

      <li style="color:#FFFFFF">
        <a style="color:#FFFFFF" href="Registration1.php"><i class="fa fa-home fa-fw"></i>Registration</a>
      </li>

      <li class="dropdown">
        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
          <span class="caret"></span></a>
        <ul class="dropdown-menu">

            <li><a href="all_in_one.php">Login</a></li>
            
        </ul>
      </li>


    </ul>
  </nav>

  <!-- One -->
  <div class="wrapper-style4">
    <header class="align-center">
      <h2 style="color:white; margin-top: 20px">Registration Form</h2>
    </header>
  </div>

  <div class="signup-form" style="padding: 10px 50px 50px 300px">
    <div class="main-div">
      <div class="panel panel-default" style="padding: 30px 25px">
        <!-- <h2 style="margin-top: 10px; margin-bottom: 20px; text-align: center; color:#ffffff">Student Signup</h2> -->
        <form id="signup" method="post" enctype="multipart/form-data">
          <div style="color: red "><?php

                                    echo @$err;

                                    ?>
          </div>
          <div class="form-group">
            <input type="Name" class="form-control" id="inputName" style="color:white; font-size: 1.2em" placeholder="Name" name="n" required>
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="inputEmail" style="color:white;font-size: 1.2em" placeholder="Email Address" name="e" required>
          </div>
          <!-- 
            <div class="form-group">
                <input type="text" class="form-control" id="inputMob" style="color:white;font-size: 1.2em" placeholder="Mobile Number" maxlength="10" name="mob" required>
            </div> -->

          <div class="form-group">
            <select class="form-control" id="inputProgram" style="color:white;font-size: 1.2em;background-color: transparent" placeholder="Program" name="pro" required>

              <option value="" disabled selected>Program</option>
              <option style="color:black">B.Tech</option>
            </select>

          </div>

          <div class="form-group">
            <select class="form-control" id="inputSemester" style="font-size: 1.2em;background-color: transparent; color:white" placeholder="Semester" name="sem" required>

              <option value="" disabled selected>Semster</option>
              <option style="color:black">i</option>
              <option style="color:black">ii</option>
              <option style="color:black">iii</option>
              <option style="color:black">iv</option>
              <option style="color:black">v</option>
              <option style="color:black">vi</option>
              <option style="color:black">vii</option>
              <option style="color:black">viii</option>

            </select>
          </div>

          <div class="form-group">

            <select class="form-control" id="inputGender" style="color:white;font-size: 1.2em;background-color: transparent" placeholder="Gender" name="gen" required>

              <option value="" disabled selected>Gender</option>
              <option style="color:black">Male</option>
              <option style="color:black">Female</option>

            </select>

          </div>

          <!-- <div class="form-group">

                

            	  <input type="file" class="form-control" id="inputImage" style="color:white;font-size: 1.2em; padding-left: 5px; padding-top: 5px;" placeholder="Image" name="image" required>

	


							</div> -->

          <div class="form-group">

            <input type="date" class="form-control" id="inputDate" style="color:white;font-size: 1.2em" placeholder="Birth-Date" name="yy" required>

          </div>

          <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" style="color:white;font-size: 1.2em" placeholder="Password" name="p" required>
          </div>


          <input type="submit" value="Save" class="btn btn-info" name="save" />

          <button type="reset" style="background-color: #ff6600" value="Reset" class="btn btn-warning" /> Reset </button>



        </form>
      </div>

    </div>
  </div>




  <!-- Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.scrollex.min.js"></script>
  <script src="js/skel.min.js"></script>
  <script src="js/util.js"></script>
  <script src="js/main.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/datepicker/moment.min.js"></script>
  <script src="vendor/datepicker/daterangepicker.js"></script>

  <!-- Main JS-->
  <script src="js/global.js"></script>


</body>

</html>