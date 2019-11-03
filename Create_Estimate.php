
<?php
session_start();
include_once 'include/job.php';
require_once('include/db_config.php');
require_once('include\tradesmen.php');

require_once('include\estimate.php');







if (isset($_POST['p_est'])) {
    //	extract($_POST);
    
    $jid=$_GET['jid'];
    $tid= $_SESSION['TID'];
    $lcost=$_POST['l_cost'];
    $tcost=$_POST['t_cost'];
    $mcost=$_POST['m_cost'];
    $totaltcost=$_POST['tcost'];
    $edate=$_POST['exp_date'];
    $isAccepted='0';

    $data=Job::find($db, $jid);
    $job= $data->getJObName();

	   $result = estimate ::create_estimate($db, $jid, $tid, $lcost ,$tcost, $mcost, $totaltcost, $edate, $isAccepted ,$job);
	    if (is_null($result)) {
      
        //  creation Failed

      ?>
        <script type="text/javascript">
          window.open('Create_Estimate.php?ss=0','_self');
        </script>
        <?php

 

	    } else {
    

        //  creation success
    ?>
       <script type="text/javascript">
        window.open('Create_Estimate.php?ss=1','_self');
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
    <title>Create Estimate</title>

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
                <a class="nav-link" href="My_Estimate.php">My Estimate</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Trader_Profile.php">Profile</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Trader_Dash.php">Back </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"href="Trader_LogOut.php">LogOut </a>
            </li>    
            </ul>
        </div>
        </div>  
        </nav>





<!--
<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                <span class="sr-only"></span>

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>

            <a class="pull-left"><img src="Images/Logo.png" width="60px" height="60px"></a>
            <a class="navbar-brand" href="#">&nbsp Safe Trade</a>

        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="navbar-form navbar-right">
                <ul class="nav navbar-nav">

                    <li><a href="My_Estimate.php">My Estimate </a></li>
                    <li><a href="Trader_Profile.php">Profile </a></li>
                    <li><a href="Trader_Dash.php">Back </a></li>
                    <li><a href="Trader_LogOut.php">LogOut </a></li>


                </ul>

            </div>
        </div>
    </div>
</nav> -->




<br><br><br>

<div class="row" id="estimate">

<div class="col-md-4 col-sm-4 col-xs12"></div>

    <div class="col-md-4 col-sm-4 col-xs-12" id="form-container">

        <div class="form-header" align="center">
            <h1 id="h1">Create Estimate</h1>
        </div>

        <form action="#" method="post"  class="booking-form">
        <?php
							if(isset($_GET['ss']))
							{
								if($_GET['ss']==1)
								{
									echo "<legend style='color:green;'> Estimate Created Successfully.</legend>";
								}
								if($_GET['ss']==0)
								{
									echo "<legend style='color:orange;'> Failed to create estimate .</legend>";
								}

							}
					?>

            <div class="row">


                <div class="col-sm-4">
                    <div class="form-group">
                        <span for="l_cost" class="form-label">Labour Cost</span>
                        <input class="form-control" type="number" id="l_cost" name="l_cost" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <span for="m_cost" class="form-label">Material Cost</span>
                        <input class="form-control" type="number" id="m_cost" name="m_cost">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div for="t_cost" class="form-group">
                        <span class="form-label">Transport Cost</span>
                        <input class="form-control" type="number" id="t_cost" name="t_cost" required>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-6">
                    <div for="tcost" class="form-group">
                        <span class="form-label">Total Cost</span>
                        <input class="form-control" type="number" id="tcost" name="tcost" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div for="exp_date" class="form-group">
                        <span class="form-label">Expiry Date</span>
                        <input class="form-control" type="date" id="exp_date" name="exp_date" required>
                    </div>
                </div>

            </div>

            <div class="form-btn">
                <button type="submit" name="p_est" value="p_est" class="ubmit-btn btn btn-lg btn-primary btn-block">Post Estimate</button>
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
