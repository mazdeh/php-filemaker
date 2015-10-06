<?php
    session_start();

    echo "<style type='text/css'>#logo{display:none;}</style>";
    
    echo
    '<div class="container">
      <div class="page-header">
        <h2>'.$_SESSION['courseInstructor'].'</small>
          <a href="logout.php" id="logout" class="pull-right btn btn-default" vale="logout"><span class="glyphicon glyphicon-log-out text-left"></span>  Logout</a>
        </h2>';
        if ($_SESSION['done']) {
          echo '<span id="successfulEntry" data-role="popup" class="alert alert-info col-md-offset-3 col-md-6 text-center fade in" style="z-index: 10;">All Done! Thank you for your time.</span>';
        }
    echo '   
      </div>
    </div>';

  ?>