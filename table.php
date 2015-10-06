<?php
session_start();
?>
 <div class="container">
      <div class="panel panel-success">
        <div class="panel-heading text-center">Please select a name to begin the evaluation.</div>
          <table class="table table-hover">
            <th>Student Name</th>
            <th>Course ID</th>
            <th>Course Title</th>
            <th>Submitted</th>
      </div>
 	</div>

<?php

	// list of students
			$fm->setProperty('database', 'SASCContactData');
      $fm->setProperty('hostspec', 'http://localhost');
      $fm->setProperty('username', $_SESSION['instructorID']);
      $fm->setProperty('password', $_SESSION['pass']);

      $findCommand =& $fm->newFindCommand('Midterm Evals');
      $findCommand->addFindCriterion('Instructor ID', $_SESSION["instructorID"]);
      $findCommand->addFindCriterion('InstructorPassword', $_SESSION["pass"]);
      $findCommand->addSortRule('Crs ID', 1, FILEMAKER_SORT_ASCEND);
      $findCommand->addSortRule('Name', 2, FILEMAKER_SORT_ASCEND);

      $result = $findCommand->execute();
      $students = $result->getRecords();

      if (sizeof($students) != 0) {
        $i = 1;

        foreach ($students as $student) {
          
          $name = $student->getField('Name');
          $id = $student->getField('id');
          $courseId = $student->getField('Crs ID');
          $courseTitle = $student->getField('Course_Title');

          // if the student has already been submitted, get all the fields that are set
          $enrollment = $student->getField('Enrollment');
          $attendance = $student->getField('Attendance');
          $effort = $student->getField('Effort');
          $assignments = $student->getField('Assignments');
          $estGrade = $student->getField('Est Grade');
          $evalComments = $student->getField('Eval Comments');
          $participation = $student->getField('Participation');
          $exam1 = $student->getField('ExamPaperI');
          $exam2 = $student->getField('ExamPaperII');
          $additionalScores = $student->getField('additionalscores');
          
          // VAHID -- we need to figure these out
          $evalBasis = $student->getField('Eval Basis');
          $recoms = $student->getField('Recommendations');

          // if (strcmp($enrollment, 'Enr - Nev Att') == 0) {
          //   echo ' emtpy';
          // }

          // echo $evalBasis.'<br>';

          // check if there's any info already in the db
          // if 
          if ((strcmp($enrollment, '') > 0) || (strcmp($evalComments, '') > 0)
            || (strcmp($exam1, '') > 0) || (strcmp($exam2, '') > 0)
            || (strcmp($additionalScores, '') > 0) || (strcmp($recoms, '') > 0)
            || (strcmp($attendance, '') > 0) || (strcmp($effort, '') > 0)
            || (strcmp($assignments, '') > 0) || (strcmp($estGrade, '') > 0)
            || (strcmp($participation, '') > 0)|| (strcmp($evalBasis, '') > 0)) {
              if ($_SESSION['numsubmitted'] == 0) {
                $_SESSION['submittedSids'] = array();
              }
              array_push($_SESSION['submittedSids'], $i);
          }
        
          echo '
          <tr class="row-'.$i.'">
            <td>
              <a data-toggle="modal" data-target="#modal-'.$i.'">'.$name.'
              </a>
              <div class="modal fade" id="modal-'.$i.'" tabindex="-10" role="dialog">';
              include "form.php";
          echo '
              </div>
            </td>
            <td>'.$courseId.'</td>
            <td>'.$courseTitle.'</td>
            <td id="'.$i.'">';
            if (in_array($i, $_SESSION['submittedSids'])) { echo '<span class="label label-success glyphicon glyphicon-ok"> </span>';}
          echo
            '</td>
          </tr>';
          $i += 1;
        }
        echo '</table>';
      }
      //   echo '<div class="alert alert-info col-md-offset-3 col-md-6 text-center">
      //     No Records Found!</div>';
      // }

?>
</div>
</div>
