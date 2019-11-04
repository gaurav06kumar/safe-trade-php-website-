<!-- this page is for crating  a job  -->
<?php
session_start();
include_once 'include/job.php';
require_once('include/db_config.php');


if (isset($_POST['p_job'])) {
	//	extract($_POST);
    $jname=$_POST['j_name'];
    $loc=$_POST['loc'];
    $descrip=$_POST['discr'];
    $estcost=$_POST['exp_cos'];
    $sdate=$_POST['s_date'];
    $edate=$_POST['e_date'];
    $uid=$_SESSION['uid'];
	   $result = Job::createjob($db,$jname ,$loc, $descrip, $estcost, $sdate, $edate,$uid);
	    if (is_null($result)) {
        // job creation Failed

       ?>
        <script type="text/javascript">
          window.open('Create_Job.php?ss=0','_self');
        </script>
        <?php



	    } else {


        // job creation success
    ?>
       <script type="text/javascript">
        window.open('Create_Job.php?ss=1','_self');
       </script>
       <?php

	    }
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Job</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-md bg-light navbar-light">
        <a class="pull-left"><img src="Images/Logo.png" width="60px" height="60px"></a>
            <a class="navbar-brand js-scroll-trigger" href="Trader_Dash.php">&nbsp Safe Trade</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <div class="navbar-nav ml-auto">

            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="My_Jobs.php">My Jobs </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Customer_Profile.php">Profile</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Customer_Dash.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Customer_LogOut.php">LogOut </a>
            </li>    
            </ul>
        </div>
        </div>  
        </nav>


        <br><br>






<div class="row" id="booking">

<div class="col-md-4 col-sm-4 col-xs12"></div>

    <div class="col-md-4 col-sm-4 col-xs-12" id="form-container">

        <div class="form-header" align="center">
            <h1 id="h1">Create Job</h1>
        </div>

        <form action="#" method="post"  class="booking-form">
          <?php
              if(isset($_GET['ss']))
              {
                if($_GET['ss']==1)
                {
                  echo "<legend style='color:green;'> Job created Successfully.</legend>";
                }
                if($_GET['ss']==0)
                {
                  echo "<legend style='color:red;'> Failed.</legend>";
                }
              }
          ?>

            <div class="form-group">
                <span for="j_name" class="form-label">Job Name</span>
                <input class="form-control" type="text" id="j_name" name="j_name" placeholder="Enter the job name">
            </div>

            <div class="form-group">
                <span for="loc" class="form-label">Location</span>
                <input class="form-control" type="text" id="loc" name="loc" placeholder="Enter location of the job">
            </div>

            <div class="form-group">
                <span for="discr" class="form-label">Discription</span>
                <input class="form-control" type="text" id="discr" name="discr" placeholder="Enter job discription">
            </div>

            <div class="form-group">
                <span for="exp_cos" class="form-label">Expected Cost</span>
                <input class="form-control" type="number" id="exp_cos" name="exp_cos" placeholder="Enter an expected cost">
            </div>


            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <span for="s_date" class="form-label">Start Date</span>
                        <input class="form-control" type="date" id="s_date" name="s_date" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <span for="e_date" class="form-label">End Date</span>
                        <input class="form-control" type="date" id="e_date" name="e_date" required>
                    </div>
                </div>

            </div>

            <div class="form-btn">
                <button type="submit" name="p_job" value="p_job" class="submit-btn btn btn-lg btn-primary btn-block">Post Now</button>
            </div>
        </form>

    </div>

</div>

</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
