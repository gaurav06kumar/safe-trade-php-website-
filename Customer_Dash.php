<?php
session_start();
require_once('include/customer.php');
require_once('include/job.php');
require_once('include/db_config.php');



$uid = $_SESSION['uid'];
 $result=User::find($db,$uid);
 $name=$result->getName();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Dashboard</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/style.css">



</head>
<body>







<!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
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
                <a class="nav-link" href="Create_Job.php">Create Job </a></li>
                <li class="nav-item">
                <a class="nav-link" href="My_Jobs.php">My Jobs </a></li>
                <li class="nav-item">
                <a class="nav-link" href="Customer_Profile.php">Profile </a></li>
                <li class="nav-item">
                <a class="nav-link" href="Customer_LogOut.php">LogOut </a></li>

                </ul>

                </div>
        </div>  
        </nav>

<div class="container" align="center">

  <h1 id="h">Welcome <?php  echo $name; ?></h1>


</div>

<div class="container" id="job_list">
        <?php JOb::view_all_Cjob($db);?>

    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
