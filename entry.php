<?php
session_start();
?>

<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });

  
  $(function() {
    $('#start').timepicker({ 'scrollDefault': 'now' });
  });

  $(function() {
    $('#stop').timepicker({ 'scrollDefault': 'now' });
  });

</script>

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript" src="style/js/bootstrap.min.js"></script>

<!-- entry form -->


<div class="container">
  <div class="panel panel-success">
    <div class="panel-heading">
      <button class="btn btn-success text-center" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create New Entry
      </button>

    </div>

    <div class="collapse panel-body" id="collapseExample">
      
      <form class="form-default" id="entry" method="post" action="home.php">
        <fieldset>
        
        <div class="row">
          
          <div class="form-group">
            <label class="col-md-3 col-sm-3" for="enrollment">Enrollment: </label>

              <select class="btn btn-default" name="enrollment" required>
                <option selected disabled value="">Select...</option>
                <option value="Is Enrolled">Is Enrolled</option>
                <option value="Enrolled - Nev Att">Enrolled, Never Attends</option>
                <option value="Not Enrolled">Not Enrolled</option>
              </select>
              
          </div>
        </div> <!-- row closed -->

         <div class="row">
          
          <div class="form-group">
            <label class="col-md-3 col-sm-3" for="attendance">Attendance: </label>
            <select class="btn btn-default" name="attendance" required>
              <option selected disabled value="">Select...</option>
              <option value="Regular">Regular</option>
              <option value="Irregular">Irregular</option>
              <option value="Rarely Attends">Rarely Attends</option>
              <option value="Missed Some Classes">Missed Some Classes</option>
              <option value="Class too large to take attendance">Class too large to take attendance</option>
              <option value="Further absences will hurt grade">Further absences will hurt grade</option>
              <option value="Not Appl">Not Applicable</option>
            </select>
          </div>

        </div> <!-- row closed -->

        <div class="row">
          
          <div class="form-group">
            <label class="col-md-3 col-sm-3" for="effort">Effort: </label>

            <select class="btn btn-default" name="effort" required>
              <option selected disabled value="">Select...</option>
              <option value="Above Avg">Above Average</option>
              <option value="Average">Average</option>
              <option value="Below Average">Below Average</option>
              <option value="Not Appl">Not Applicable</option>
              <option value="Not Known">Not Known</option>
            </select>

          </div>

        </div> <!-- row closed -->

        <div class="row">
          
          <div class="form-group">
            <label class="col-md-3 col-sm-3" for="assignment">Assignments: </label>

            <select class="btn btn-default" name="assignment" required>
              <option selected disabled value="">Select...</option>
              <option value="On Time">On Time</option>
              <option value="Late">Late</option>
              <option value="Incomplete">Incomplete</option>
              <option value="Intermittent">Intermittent</option>
              <option value="Not Turned In">Not Turned In</option>
              <option value="Not Appl">Not Applicable</option>
            </select>

          </div>

        </div> <!-- row closed -->

        <div class="row">
          
          <div class="form-group">
            <label class="col-md-3 col-sm-3" for="grade">Est. Grade: </label>

            <select class="btn btn-default" name="grade" required>
              <option selected disabled value="">Select...</option>
              <option value="A">A</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B">B</option>
              <option value="B-">B-</option>
              <option value="C+">C+</option>
              <option value="C">C</option>
              <option value="C-">C-</option>
              <option value="D+">D+</option>
              <option value="D">D</option>
              <option value="D-">D-</option>
              <option value="F">F</option>
              <option value="P">P - Pass/Fail Courses Only</option>
              <option value="W">W - Incomplete</option>
              <option value="Incomplete F">F - Incomplete</option>
              <option value="Not Appl">Not Applicable</option>
            </select>

          </div>

        </div> <!-- row closed -->

         <div class="row">
          
          <div class="form-group">
            <label class="col-md-3 col-sm-3 col-xs-12">Evaluation Basis:<br><small>(select all that applies)</small></label>

            <div class="col-md-9 col-sm-9 col-xs-12">
              <div class="well well-sm">
                <label class="checkbox-inline">
                  <input type="checkbox" name="eval[]" value="Exams"> Exams
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="eval[]" value="Class Attendance"> Class Attendance
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="eval[]" value="Class Discussion"> Class Discussion
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="eval[]" value="Projects"> Projects
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" iname="eval[]" value="Performance"> Performance
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="eval[]" value="Quizes"> Quizes
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="eval[]" value="Paper/Written assign."> Papers/Written Assign.
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="eval[]" value="Problem Sets"> Problem Sets
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="eval[]" value="Labs"> Labs
                </label>
              </div>
            </div>

          </div>

        </div> <!-- row closed -->

         <div class="row">
          
          <div class="form-group">
            <label class="col-md-3 col-sm-3 col-xs-12">Recommendations:<br><small>(select all that applies)</small></label>

            <div class="col-md-9 col-sm-9 col-xs-12">
              <div class="well well-sm">
                <label class="checkbox-inline">
                  <input type="checkbox" name="recom[]" value="Consult with Faculty Member"> Consult with Faculty Member
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="recom[]" value="Meet with TA"> Meet with TA
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="recom[]" value="Participate more in Class"> Participate more in Class
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="recom[]" value="Tutorial Assistance"> Tutorial Assistance
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="recom[]" value="Improve Attendanc"> Improve Attendance
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="recom[]" value="Make-up Past Due Work"> Make-up Past Due Work
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="recom[]" value="Writing Needs more Attention"> Writing Needs more Attention
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="recom[]" value="Consider Withdrawal from Course"> Consider Withdrawal from Course
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="recom[]" value="No Action Necessary/Student is Doing Fine"> No Action Necessary/Student is Doing Fine
                </label>
              </div>
            </div>

          </div>

        </div> <!-- row closed -->


        <div class="row">
          
          <div class="form-group">
            <label for="comments" class="col-md-3 col-sm-3">Comments: </label>
            <div class="col-md-9">
              <textarea class="form-control" name="comments" id="comments"></textarea>
            </div>
          </div>

        </div> <!-- row closed -->


        <div class="row">
          <div class="col-md-offset-3 col-sm-offset-4 btn-group col-xs-8 col-sm-8 col-md-8" role="group">

            <button type="submit" name="submit" class="btn btn-success col-md-4 col-sm-3 col-xs-3">
                <span class="glyphicon glyphicon-ok pull-left" aria-hidden="true"></span>
              Submit
            </button>
          
            <button class="btn btn-danger col-md-4 col-sm-3 col-xs-3" data-toggle="collapse" data-target="#collapseExample" aria-controls="collapseExample" onClick="document.getElementById('entry').reset();">
                <span class="glyphicon glyphicon-remove pull-right" aria-hidden="true"></span>
              Cancel
            </button>
        
          </div> <!-- button group closed -->
        </div> <!-- row closed -->
        
</fieldset>
      </form>

    </div> <!-- panel body close -->
  </div>
</div>


<script>
$(document).ready(function() {
    var bookIndex = 0;

    $('#entry')
        // .formValidation({
        //     framework: 'bootstrap',
        //     icon: {
        //         valid: 'glyphicon glyphicon-ok',
        //         invalid: 'glyphicon glyphicon-remove',
        //         validating: 'glyphicon glyphicon-refresh'
        //     },
        //     fields: {
        //         'student[0].id': titleValidators,
        //         'student[0].name': isbnValidators
        //     }
        // })

        // Add button click handler
        .on('click', '.addButton', function() {
            if (bookIndex == 4) {
            } else {
            bookIndex++;
            var $template = $('#studentTemplate'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .attr('data-book-index', bookIndex)
                                .insertBefore($template);

            // Update the name attributes
            $clone
                .find('[name="id"]').attr('name', 'student[' + bookIndex + '][id]').end()
                .find('[name="name"]').attr('name', 'student[' + bookIndex + '][name]').end();

            // Add new fields
            // Note that we also pass the validator rules for new field as the third parameter
            // $('#entry')
            //     .formValidation('addField', 'student[' + bookIndex + '].id', titleValidators)
            //     .formValidation('addField', 'student[' + bookIndex + '].name', isbnValidators);
          }
        })

        // Remove button click handler
        .on('click', '.removeButton', function() {
            bookIndex--;
            var $row  = $(this).parents('.row'),
                index = $row.attr('data-book-index');

            // Remove fields
            // $('#entry')
            //     .formValidation('removeField', $row.find('[name="student[' + index + '].id"]'))
            //     .formValidation('removeField', $row.find('[name="student[' + index + '].name"]'));

            // Remove element containing the fields
            $row.remove();
        });
});
</script>


