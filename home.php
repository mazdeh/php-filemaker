<?php
// to display php errors, uncomment this line
// error_reporting(E_ALL); ini_set('display_errors', 'On'); 
session_start();
$_SESSION['numsubmitted'];
?>

<!DOCTYPE HTML PUBLIC "-#W3C#DTD HTML 4.0 Transitional#EN">
<html>

<head>
    <title>SASC Midterm Evaluations</title>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- bootstrap css -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/css/custom.css" rel="stylesheet">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>

<script>
  function showAlert() {
    $("#successfulEntry").addClass("in")
  }

  function hideAlert() {
    $("#successfulEntry").removeClass("in");
    $("#successfulEntry").html("")
  }
  
  window.setTimeout(function () {
    hideAlert();
  }, 6000)
</script>

<!-- include database -->
<?php include ("dbaccess.php"); ?>

<div class='container' style="margin-bottom: 150px;">

  <div class="container">
    
      <div class="row text-left">
        <br>
        <a href="http://www.colorado.edu/sasc"><img src="images/sascbanner.png"></a>
      </div>

      <h4 class="text-center"><!--SASC--> Midterm Evaluations</h4><hr>

      <div class="well" id="info">
        <p>This midterm information enables SASC to serve students who receive scholarships, instruction, and services while participating in one of our programs. All our students have released their data to SASC under FERPA. Your evaluation will be handled confidentially to instruct, advise, and mentor students or to assess the effectiveness of our programs and services.<br>
          <br><b>Thank you</b> for your contribution to the success of the students.</p>
      </div>

    <div id="logo" class="row">
          <h2 class="col-md-offset-7 col-sm-offset-7 col-md-5 col-sm-5">
            <form class="form-inline" action="signin.php" method="post">
              <div class="form-group">
                <input class="form-control" id="pass" type="password" minlength="7" placeholder="Enter Password" type="text" name="password" required>
                <input class="form-control btn btn-default" id="loginbtn" type="submit" name="login" value="Login">
              </div>
            </form>
          </h2>
    </div>
  </div> <!-- container -->

<?php

  // handles bad password/login
  if ($_SESSION['badpass'] == True) {
    echo '<div id="successfulEntry" class="alert alert-danger col-md-offset-3 col-md-6 text-center fade in">
      Could not match your password, please double check and try again.
      </div>';
      $_SESSION['badpass'] = False;
  }

  // found the instructor, continue on showing the table of students.
  if ($_SESSION['instructorInstance'] != null) {
    
    // hide the info box
    ?> <style>#info{display: none;}</style> <?php

    // check if session is expired
    $now = time();
    if ($now > $_SESSION['expires']) {
      header('Location: logout.php');
    }
    // check for form submissions by instructor
    else if ($_SESSION['submitted'] == true) {
      // IF WE CAN GET THE TEMP HIGHTLIGHTS TO WORK FOR LAST SUBMISSION!
      // this isnt doing anything right now
      // echo "<script>
      // $('table', 'tbody', 'tr .row-".end($_SESSION['submittedSids'])."').css('color', 'red');
      // </script>";

      $_SESSION['submitted'] = false;
    }
    include 'userheader.php';
    include 'table.php';

  }
  else {
    if ($_SESSION['timeout'] == true) {
      echo '<div id="successfulEntry" class="alert alert-info col-md-offset-3 col-md-6 text-center fade in">
      You have successfully logged off, or your session has expired.
      </div>';
      session_start();
      session_unset();
      session_destroy();
    }
  }
?>


</div> <!-- closes container -->
<!-- footer -->
<div class="navbar navbar-bottom" role="navigation">
  <div class="container text-center">
  <p><b>Site Help:</b> 303-492-3734 or <a href="mailto:sascit@colorado.edu">sascit@colorado.edu</a><br>
    <small>Mailing Address: 109 UCB, Boulder, CO 80309-0109 &copy Regents of the University of Colorado</small></p>
  </div>
</div>
    
</body>
</html>
