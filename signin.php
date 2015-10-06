<?php 
session_start();

  include ("dbaccess.php");

  $_SESSION['pass'] = $_POST["password"];

  if (strlen($_SESSION['pass']) < 7) {
    $_SESSION['badpass'] = True;
    header('Location: home.php');
  } else {
    $findCommand =& $fm->newFindCommand('Midterm Evals');
    $findCommand->addFindCriterion('InstructorPassword', $_SESSION['pass']);

    $result = $findCommand->execute();  

    // if no records were fouund, return to homepage, display error
    if (FileMaker::isError($result)) {
      $_SESSION['badpass'] = True;
      header('Location: home.php');
    }
    
    // instrcutor found, return to homepage with instructorInstance
    $records = $result->getRecords();

    if (sizeof($records) != 0) {
      foreach ($records as $record) {
        $_SESSION['instructorInstance'] = $record;
        $_SESSION["courseInstructor"] = $_SESSION['instructorInstance']->getField('Course_Instructor');
        $_SESSION["instructorID"] = $_SESSION['instructorInstance']->getField('Instructor ID');
        $_SESSION['start'] = time();
        // session expires after 30 minutes
        $_SESSION['expires'] = $_SESSION['start'] + (30 * 60);
        header('Location: home.php');
      }
    }
  }
  
?>