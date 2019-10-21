<?php
session_start();
require_once('include/job.php');
$apid = $_GET['jid'];
$job = new Job();
$data=$job->view_job($apid);


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
     <style>
       body{

       background: url(Images/Massage2.jpg) no-repeat;
       background-size: cover;
       background-attachment: fixed;

       }




     </style>

 </head>


 <div class="container">


 <!-- navbar -->
 <nav class="navbar navbar-default">
   <div class="container-fluid">

     <!-- Brand and toggle get grouped for better display -->
     <div class="navbar-header">

       <!-- Button that toggles the navbar on and off on small screens -->
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

         <!-- Hides information from screen readers -->
         <span class="sr-only"></span>

         <span class="icon-bar"></span>

       </button>

       <a class="pull-left"><img src="Images/YY.svg" width="60px" height="60px"></a>
       <a class="navbar-brand" href="#">Hamilton Massage Center</a>

     </div>

     <!-- nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <div class="navbar-form navbar-right">
         <ul class="nav navbar-nav">
           <li><a href="user_logout.php">Logout</a></li>
           <li>  <a href="viewAppointment.php">Back</a></li>

         </ul>

       </div>
     </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
 </nav>


 </div>





 <div class="page-header">
   <h1 align="center">Appointment Details</h1>
 </div>

 <div clss="col-lg-6">

 <div class="container">
 <div class="col-md-3 col-sm-3 col-xs12"></div>

   <div class="jumbotron col-md-6 col-sm-6 col-xs-12">

     <!-- appointment details -->
 <table class="table-condensed">
 <tr>
   <th>Job Name: </th>
   <td><?php echo $data[0]; ?></td>
 </tr>
 <tr>
   <th>Location: </th>
   <td><?php echo $data[1]; ?></td>
 </tr>
 <tr>
   <th>Discription: </th>
   <td><?php echo $data[2]; ?></td>
 </tr>
 <tr>
   <th>Expected Cost: </th>
   <td><?php echo $data[3]; ?></td>
 </tr>
 <tr>
   <th>Start Date: </th>
   <td><?php echo $data[4]; ?></td>
 </tr>
 <tr>
   <th>End Date: </th>
   <td><?php echo $data[5]; ?></td>
 </tr>
 
 </table>

 </div>

 </div>

 </div>
