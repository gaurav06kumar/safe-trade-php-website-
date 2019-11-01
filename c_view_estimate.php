<?php
session_start();
require_once('include/job.php');
require_once('include/estimate.php');
require_once('include/db_config.php');

$apid = $_GET['jid'];
$_SESSION['jid']=$apid;
$data=Job::find($db, $apid);


 ?>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title>Appointments</title>

 	<!-- Bootstrap CDN -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

   <!-- css -->
   <link rel="stylesheet" href="css/style.css">


 </head>




<body>

<!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

            <!-- Button that toggles the navbar on and off on small screens -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                <!-- Hides information from screen readers -->
                <span class="sr-only"></span>

                <!-- Draws 3 bars in navbar button when in small mode -->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>

            <!-- You'll have to add padding in your image on the top and right of a few pixels (CSS Styling will break the navbar) -->
            <a class="pull-left"><img src="Images/Logo.png" width="60px" height="60px"></a>
            <a class="navbar-brand" href="#">&nbsp Safe Trade</a>

        </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="navbar-form navbar-right">
                <ul class="nav navbar-nav">

                    
                    <li><a href="Customer_Profile.php">Profile </a></li>
                    <li><a href="Customer_Dash.php">Home </a></li>
                    <li>  <a href="My_jobs.php">Back</a></li>
                    <li><a href="Customer_LogOut.php">LogOut </a></li>


                </ul>

            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<table class="table-condensed">
 <tr>
   <th>Job Name: </th>
   <td><?php echo $data->getJObName(); ?></td>
 </tr>
 <tr>
   <th>Location: </th>
   <td><?php echo $data->getLoc(); ?></td>
 </tr>
 <tr>
   <th>Discription: </th>
   <td><?php echo $data->getDescrip(); ?></td>
 </tr>
 <tr>
   <th>Expected Cost: </th>
   <td><?php echo $data->getEcost(); ?></td>
 </tr>
 <tr>
   <th>Start Date: </th>
   <td><?php echo $data->getSdate(); ?></td>
 </tr>
 <tr>
   <th>End Date: </th>
   <td><?php echo $data->getEdate(); ?></td>
 </tr>

 </table>
 <?php $result = estimate::view_c_estimate($db,$apid);?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>