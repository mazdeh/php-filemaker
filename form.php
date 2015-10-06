<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      <?php
        echo '<h3 class="modal-title text-primary" id="myModalLabel">'.$name.'</h3>';
        echo '<span class="text-muted">'.$courseId.' - '.$courseTitle.'</span>';
      ?>
        </div>

      <div class="modal-body">

        <form class="form-default" id="entry" method="post" action="submissions.php">
        <fieldset>

        <?php
        echo '
          <input name="student-name" value="'.$name.'" hidden></input>
          <input name="student-courseid" value="'.$courseId.'" hidden></input>
          <input name="sid" value="'.$i.'" hidden></>';
        ?>



        <div class="row">
          
          <div class="form-group">
            
            <label class="col-md-3 col-sm-3" for="enrollment">Enrollment: </label>
              <?php echo '<select class="enr-'.$i.' btn btn-default col-md-3" name="enrollment">';?>
                <option id="enr-select" selected disabled value="">Select...</option>
                <option id="isenrolled" value="Is Enrolled">Is Enrolled</option>
                <option id="enr-nevatt" value="Enr - Nev Att">Enrolled, Never Attends</option>
                <option id="notenrolled" value="Not enrolled">Not Enrolled</option>
              </select>
          </div>

        </div> <!-- row closed -->

         <div class="row">
          <div>
          <div class="form-group">
            <label class="col-md-3 col-sm-3" for="attendance">Attendance: </label>
            
            <?php echo '<select class="att-'.$i.' btn btn-default col-md-3" name="attendance">';?>
              <option selected disabled value="">Select...</option>
              <option id="regular" value="Regular">Regular</option>
              <option id="irregular" value="Irregular">Irregular</option>
              <option id="rare" value="Rarely Attends">Rarely Attends</option>
              <option id="missed" value="Missed Some Classes">Missed Some Classes</option>
              <option id="large" value="Class too large to take attendance">Class Too Large to Take Attendance</option>
              <option id="hurt" value="Further absences will hurt grade">Further Absences Will Hurt Grade</option>
              <option id="not" value="Not Appl">Not Applicable</option>
            </select>
          </div>
          </div>

        </div> <!-- row closed -->

        <div class="row">
          <div>
          <div class="form-group">
            <label class="col-md-3 col-sm-3" for="effort">Effort: </label>

            <?php echo '<select class="eff-'.$i.' btn btn-default col-md-3" name="effort">';?>
              <option selected disabled value="">Select...</option>
              <option id="above" value="Above Avg.">Above Average</option>
              <option id="avg" value="Average">Average</option>
              <option id="below" value="Below Avg.">Below Average</option>
              <option id="notappl" value="Not Appl.">Not Applicable</option>
              <option id="notknown" value="Not Known">Not Known</option>
            </select>

          </div>
          </diV>
        </div> <!-- row closed -->

        <div class="row">
          
          <div>
          <div class="form-group">
            <label class="col-md-3 col-sm-3" for="participation">Participation: </label>

            <?php echo '<select class="par-'.$i.' btn btn-default col-md-3" name="participation">';?>
              <option selected disabled value="">Select...</option>
              <option id="above" value="Above Avg.">Above Average</option>
              <option id="avg" value="Average">Average</option>
              <option id="below" value="Below Avg.">Below Average</option>
              <option id="not" value="Not Appl.">Not Applicable</option>
            </select>

          </div>
        </div>

        </div> <!-- row closed -->

        <div class="row">
          
          <div>
          <div class="form-group">
            <label class="col-md-3 col-sm-3" for="assignment">Assignments: </label>

            <?php echo '<select class="ass-'.$i.' btn btn-default col-md-3" name="assignment">';?>
              <option selected disabled value="">Select...</option>
              <option id="on" value="On Time">On Time</option>
              <option id="late" value="Late">Late</option>
              <option id="incom" value="Incomplete">Incomplete</option>
              <option id="inter" value="Intermittent">Intermittent</option>
              <option id="trun" value="Not Turned In">Not Turned In</option>
              <option id="not" value="Not Appl.">Not Applicable</option>
            </select>

          </div>
          </div>
        </div> <!-- row closed -->

        <div class="row">
          
          <div>
          <div class="form-group">
            <label class="col-md-3 col-sm-3" for="grade">Est. Grade: </label>

            <?php echo '<select class="est-'.$i.' btn btn-default col-md-3" name="grade">';?>
              <option selected disabled value="">Select...</option>
              <option id="A" value="A">A</option>
              <option id="A-" value="A-">A-</option>
              <option id="B+" value="B+">B+</option>
              <option id="B" value="B">B</option>
              <option id="B-" value="B-">B-</option>
              <option id="C+" value="C+">C+</option>
              <option id="C" value="C">C</option>
              <option id="C-" value="C-">C-</option>
              <option id="D+" value="D+">D+</option>
              <option id="D" value="D">D</option>
              <option id="D-" value="D-">D-</option>
              <option id="F" value="F">F</option>
              <option id="P" value="P">P - Pass/Fail Courses Only</option>
              <option id="IW" value="IW">W - Incomplete</option>
              <option id="IF" value="IF">F - Incomplete</option>
              <option id="not" value="Not Appl.">Not Applicable</option>
            </select>

          </div>
        </div>
        </div> <!-- row closed -->
<br>

        <div class="row">
          <label class="col-md-3 col-sm-3">Scores: </label>

            <div class="form-group col-md-3 col-sm-3">
              <label for="exam1">Exam/Paper I</label>
              <?php echo '<input name="exam1" type="text" class="form-control" value="'.$exam1.'">';?>
            </div>

            <div class="form-group col-md-3 col-sm-3">
              <label for="exam2">Exam/Paper II</label>
              <?php echo '<input name="exam2" type="text" class="form-control" value="'.$exam2.'">';?>
            </div>

            <div class="form-group col-md-3 col-sm-3">
              <label for="additional-scores">Additional Scores</label>
              <?php echo '<input name="additional-scores" type="text" class="form-control" value="'.$additionalScores.'">';?>
            </div>
        </div> <!-- row closed -->
<hr>
         <div class="row">       
          <div class="form-group">
            <label class="col-md-3 col-sm-3 col-xs-12">Evaluation Basis:<br><small>(select all that apply)</small></label>
                <div class="col-md-4 col-sm-4 col-xs-offset-1 col-xs-3">           
                  <label class="checkbox">
                    <input type="checkbox" name="eval[]" value="Exams"> Exams
                  </label>
                  <label class="checkbox">
                    <input type="checkbox" name="eval[]" value="Class attend."> Class Attendance
                  </label>
                  <label class="checkbox">
                    <input type="checkbox" name="eval[]" value="Class discuss."> Class Discussion
                  </label>
                  <label class="checkbox">
                    <input type="checkbox" name="eval[]" value="Projects"> Projects
                  </label>
                  <label class="checkbox">
                    <input type="checkbox" name="eval[]" value="Labs"> Labs
                  </label>
                </div> 

                <div class="col-md-4 col-sm-4 col-xs-3">
                  <label class="checkbox">
                    <input type="checkbox" name="eval[]" value="Performance"> Performance
                  </label>
                  <label class="checkbox">
                    <input type="checkbox" name="eval[]" value="Quizzes"> Quizzes
                  </label>
                  <label class="checkbox">
                    <input type="checkbox" name="eval[]" value="Paper/Written assign."> Papers/Written Assign.
                  </label>
                  <label class="checkbox">
                    <input type="checkbox" name="eval[]" value="Problem Sets"> Problem Sets
                  </label>
            </div>
          </div>
        </div> <!-- row closed -->
<hr>
         <div class="row">
          
          <div class="form-group">
            <label class="col-md-3 col-sm-3 col-xs-12">Recommendations:<br><small>(select all that apply)</small></label>

            <!-- <div class="col-md-9 col-sm-9 col-xs-12"> -->
              <div class="col-md-4 col-sm-4 col-xs-offset-1 col-xs-6">
                <label class="checkbox">
                  <input type="checkbox" name="recom[]" value="Make-up past due work"> Make-up Past Due Work
                </label>
                <label class="checkbox">
                  <input type="checkbox" name="recom[]" value="Writing needs more attention"> Writing Needs more Attention
                </label>
                <label class="checkbox">
                  <input type="checkbox" name="recom[]" value="Consider withdrawal from course"> Consider Withdrawal from Course
                </label>
                <label class="checkbox">
                  <input type="checkbox" name="recom[]" value="No action necessary/Student is doing fine"> No Action Necessary/Student is Doing Fine
                </label>
                <label class="checkbox">
                  <input type="checkbox" name="recom[]" value="Improve Attendance"> Improve Attendance
                </label>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-4">
                <label class="checkbox">
                  <input type="checkbox" name="recom[]" value="Consult with faculty member"> Consult with Faculty Member
                </label>
                <label class="checkbox">
                  <input type="checkbox" name="recom[]" value="Meet with TA"> Meet with TA
                </label>
                <label class="checkbox">
                  <input type="checkbox" name="recom[]" value="Participate more in class"> Participate more in Class
                </label>
                <label class="checkbox">
                  <input type="checkbox" name="recom[]" value="Tutorial assistance"> Tutorial Assistance
                </label>
              </div>
            <!-- </div> -->

          </div>

        </div> <!-- row closed -->
<hr>

        <div class="row">
          
          <div class="form-group">
            <label for="comments" class="col-md-3 col-sm-3">Comments: </label>
            <div class="col-md-9">
              <?php echo '<input class="form-control" style="resize:none;" name="comments" id="comments" value="'.$evalComments.'"></input><br>';?>
            </div>
          </div>
        </div> <!-- row closed -->


      <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </fieldset>
      </form>
      </div>

    </div> <!-- modal-body closed -->
 

    </div>
  </div>
 
 <?php
  // enrollment
  if (strcmp($enrollment, 'Is Enrolled') == 0) {
    echo '<script>
      $(".enr-'.$i.'").children().removeAttr("selected");
      $(".enr-'.$i.' #isenrolled").prop("selected", true);
    </script>';
  } else if (strcmp($enrollment, 'Enr - Nev Att') == 0) {
    echo '<script>
      $(".enr-'.$i.'").children().removeAttr("selected");
      $(".enr-'.$i.' #enr-nevatt").prop("selected", true);
    </script>';
  } else if (strcmp($enrollment, 'Not enrolled') == 0) {
    echo '<script>
      $(".enr-'.$i.'").children().removeAttr("selected");
      $(".enr-'.$i.' #notenrolled").prop("selected", true);
    </script>';
  }


   // attendance
  if (strcmp($attendance, 'Regular') == 0) {
    echo '<script>
      $(".att-'.$i.'").children().removeAttr("selected");
      $(".att-'.$i.' #regular").prop("selected", true);
    </script>';
  } else if (strcmp($attendance, 'Irregular') == 0) {
    echo '<script>
      $(".att-'.$i.'").children().removeAttr("selected");
      $(".att-'.$i.' #irregular").prop("selected", true);
    </script>';
  } else if (strcmp($attendance, 'Rarely Attends') == 0) {
    echo '<script>
      $(".att-'.$i.'").children().removeAttr("selected");
      $(".att-'.$i.' #rare").prop("selected", true);
    </script>';
  } else if (strcmp($attendance, 'Missed Some Classes') == 0) {
    echo '<script>
      $(".att-'.$i.'").children().removeAttr("selected");
      $(".att-'.$i.' #missed").prop("selected", true);
    </script>';
  } else if (strcmp($attendance, 'Class too large to take attendance') == 0) {
    echo '<script>
      $(".att-'.$i.'").children().removeAttr("selected");
      $(".att-'.$i.' #large").prop("selected", true);
    </script>';
  } else if (strcmp($attendance, 'Further absences will hurt grade') == 0) {
    echo '<script>
      $(".att-'.$i.'").children().removeAttr("selected");
      $(".att-'.$i.' #hurt").prop("selected", true);
    </script>';
  } else if (strcmp($attendance, 'Not Appl') == 0) {
    echo '<script>
      $(".att-'.$i.'").children().removeAttr("selected");
      $(".att-'.$i.' #not").prop("selected", true);
    </script>';
  }

  // effort
  if (strcmp($effort, 'Above Avg.') == 0) {
    echo '<script>
      $(".eff-'.$i.'").children().removeAttr("selected");
      $(".eff-'.$i.' #above").prop("selected", true);
    </script>';
  } else if (strcmp($effort, 'Average') == 0) {
    echo '<script>
      $(".eff-'.$i.'").children().removeAttr("selected");
      $(".eff-'.$i.' #avg").prop("selected", true);
    </script>';
  } else if (strcmp($effort, 'Below Avg.') == 0) {
    echo '<script>
      $(".eff-'.$i.'").children().removeAttr("selected");
      $(".eff-'.$i.' #below").prop("selected", true);
    </script>';
  } else if (strcmp($effort, 'Not Appl.') == 0) {
    echo '<script>
      $(".eff-'.$i.'").children().removeAttr("selected");
      $(".eff-'.$i.' #notappl").prop("selected", true);
    </script>';
  } else if (strcmp($effort, 'Not Known') == 0) {
    echo '<script>
      $(".eff-'.$i.'").children().removeAttr("selected");
      $(".eff-'.$i.' #notknown").prop("selected", true);
    </script>';
  }


  // participation
  if (strcmp($participation, 'Above Avg.') == 0) {
    echo '<script>
      $(".par-'.$i.'").children().removeAttr("selected");
      $(".par-'.$i.' #above").prop("selected", true);
    </script>';
  } else if (strcmp($participation, 'Average') == 0) {
    echo '<script>
      $(".par-'.$i.'").children().removeAttr("selected");
      $(".par-'.$i.' #avg").prop("selected", true);
    </script>';
  } else if (strcmp($participation, 'Below Avg.') == 0) {
    echo '<script>
      $(".par-'.$i.'").children().removeAttr("selected");
      $(".par-'.$i.' #below").prop("selected", true);
    </script>';
  } else if (strcmp($participation, 'Not Appl.') == 0) {
    echo '<script>
      $(".par-'.$i.'").children().removeAttr("selected");
      $(".par-'.$i.' #not").prop("selected", true);
    </script>';
  }



   // assignments
  if (strcmp($assignments, 'On Time') == 0) {
    echo '<script>
      $(".ass-'.$i.'").children().removeAttr("selected");
      $(".ass-'.$i.' #on").prop("selected", true);
    </script>';
  } else if (strcmp($assignments, 'Late') == 0) {
    echo '<script>
      $(".ass-'.$i.'").children().removeAttr("selected");
      $(".ass-'.$i.' #late").prop("selected", true);
    </script>';
  } else if (strcmp($assignments, 'Incomplete') == 0) {
    echo '<script>
      $(".ass-'.$i.'").children().removeAttr("selected");
      $(".ass-'.$i.' #incom").prop("selected", true);
    </script>';
  } else if (strcmp($assignments, 'Intermittent') == 0) {
    echo '<script>
      $(".ass-'.$i.'").children().removeAttr("selected");
      $(".ass-'.$i.' #inter").prop("selected", true);
    </script>';
  } else if (strcmp($assignments, 'Not Turned In') == 0) {
    echo '<script>
      $(".ass-'.$i.'").children().removeAttr("selected");
      $(".ass-'.$i.' #turn").prop("selected", true);
    </script>';
  } else if (strcmp($assignments, 'Not Appl.') == 0) {
    echo '<script>
      $(".ass-'.$i.'").children().removeAttr("selected");
      $(".ass-'.$i.' #not").prop("selected", true);
    </script>';
  } 


   // est. grade
  if (strcmp($estGrade, 'A') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #A").prop("selected", true);
    </script>';
  } else if (strcmp($estGrade, 'A-') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #A-").prop("selected", true);
    </script>';
  } else if (strcmp($estGrade, 'B+') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #B+").prop("selected", true);
    </script>';
  } else if (strcmp($estGrade, 'B') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #B").prop("selected", true);
    </script>';
  } else if (strcmp($estGrade, 'B-') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #B-").prop("selected", true);
    </script>';
  } else if (strcmp($estGrade, 'C+') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #C+").prop("selected", true);
    </script>';
  }  else if (strcmp($estGrade, 'C') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #C").prop("selected", true);
    </script>';
  }  else if (strcmp($estGrade, 'C-') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #C-").prop("selected", true);
    </script>';
  }  else if (strcmp($estGrade, 'D+') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #D=").prop("selected", true);
    </script>';
  }  else if (strcmp($estGrade, 'D') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #D").prop("selected", true);
    </script>';
  }  else if (strcmp($estGrade, 'D-') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #D-").prop("selected", true);
    </script>';
  }  else if (strcmp($estGrade, 'F') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #F").prop("selected", true);
    </script>';
  }  else if (strcmp($estGrade, 'P') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #P").prop("selected", true);
    </script>';
  }  else if (strcmp($estGrade, 'IW') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #IW").prop("selected", true);
    </script>';
  }  else if (strcmp($estGrade, 'IF') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #IF").prop("selected", true);
    </script>';
  }  else if (strcmp($estGrade, 'Not Appl.') == 0) {
    echo '<script>
      $(".est-'.$i.'").children().removeAttr("selected");
      $(".est-'.$i.' #not").prop("selected", true);
    </script>';
  } 


?>

