<?php
session_start();

  include ("dbaccess.php");
  
  if(isset($_POST['submit'])) {

      $_SESSION['start'] = time();
      $_SESSION['expires'] = $_SESSION['start'] + (30 * 60);

      $fm->setProperty('database', 'SASCContactData');
      $fm->setProperty('hostspec', 'http://localhost');
      $fm->setProperty('username', $_SESSION["instructorID"]);
      $fm->setProperty('password', $_SESSION['pass']);

      // instantiate array only on the first submission
      if ($_SESSION['numsubmitted'] == 0) {
        $_SESSION['submittedSids'] = array();
      }

      // grab form inputs
      $sid = $_POST['sid'];
      array_push($_SESSION['submittedSids'], $sid);
      $name = $_POST['student-name'];
      $courseid = $_POST['student-courseid'];
      $enrollment = $_POST['enrollment'];
      $attendance = $_POST['attendance'];
      $effort = $_POST['effort'];
      $assignments = $_POST['assignment'];
      $grade = $_POST['grade'];
      $comments = $_POST['comments'];
      $participation = $_POST['participation'];
      $exam1 = $_POST['exam1'];
      $exam2 = $_POST['exam2'];
      $additionalScores = $_POST['additional-scores'];

      if(isset($_POST['eval']) && is_array($_POST['eval'])) {
        foreach ($_POST['eval'] as $eval) {
          $evals .= $eval.PHP_EOL;
        }
      }

      if(isset($_POST['recom']) && is_array($_POST['recom'])) {
        foreach ($_POST['recom'] as $recom) {
          $recoms .= $recom.PHP_EOL;
        }
      }

      $findStudent =& $fm->newFindCommand('Midterm Evals');
      $findStudent->addFindCriterion('Instructor ID', $_SESSION["instructorID"]);
      $findStudent->addFindCriterion('InstructorPassword', $_SESSION["pass"]);
      $findStudent->addFindCriterion('InstructorPassword', $_SESSION["pass"]);
      $findStudent->addFindCriterion('Name', $name);
      $findStudent->addFindCriterion('Crs ID', $courseid);
      

      $result = $findStudent->execute();
      $students = $result->getRecords();

      foreach($students as $student) {
        $studentRecord = $student;
        $studentRecord->setField('Enrollment', $enrollment);
        $studentRecord->setField('Attendance', $attendance);
        $studentRecord->setField('Effort', $effort);
        $studentRecord->setField('Assignments', $assignments);
        $studentRecord->setField('Est Grade', $grade);
        $studentRecord->setField('Eval Comments', $comments);
        $studentRecord->setField('Participation', $participation);
        $studentRecord->setField('ExamPaperI', $exam1);
        $studentRecord->setField('ExamPaperII', $exam2);
        $studentRecord->setField('additionalscores', $additionalScores);
        $studentRecord->setField('Eval Basis', $evals);
        $studentRecord->setField('Recommendations', $recoms);

        $result = $studentRecord->commit();
      }

      $_SESSION['submitted'] = true;
      $_SESSION['numsubmitted'] = $_SESSION['numsubmitted'] + 1;
      header('Location: home.php');

    }

?>