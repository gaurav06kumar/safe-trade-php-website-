<!-- this page is shows all the job details for tradesman  , and tradesman click on the create estimate button   -->
<?php
session_start();
require_once('include/job.php');
include_once 'include/job.php';
$apid = $_GET['jid'];
$data=Job::find($db, $apid);
 


 ?>

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title>Appointments</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">


 </head>


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
                <a class="nav-link" href="My_Estimate.php">My Estimate </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Trader_Dash.php">Back</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Trader_LogOut.php">LogOut </a>
            </li>    
            </ul>
        </div>
        </div>  
        </nav>





<br><br><br>



 <!--
 <nav class="navbar navbar-inverse">
   <div class="container-fluid">

     <div class="navbar-header">

       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

         <span class="sr-only"></span>

         <span class="icon-bar"></span>

       </button>

        <a class="pull-left"><img src="Images/Logo.png" width="60px" height="60px"></a>
        <a class="navbar-brand" href="#">&nbsp Safe Trade</a>

     </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <div class="navbar-form navbar-right">
         <ul class="nav navbar-nav">

          <li><a href="My_Estimate.php">My Estimate </a></li>
          <li>  <a href="Trader_Dash.php">Back</a></li>
          <li><a href="Trader_LogOut.php">Logout</a></li>

         </ul>

       </div>
     </div>
   </div>
 </nav>-->







 <div class="page-header">
   <h1 align="center" id="h">Job Details</h1>
 </div>
 
 <br><br><br>

 <div clss="col-lg-6" align="center">

 <div class="container">
 <div class="col-md-3 col-sm-3 col-xs12"></div>

   <div class="jumbotron col-md-6 col-sm-6 col-xs-12" id="job_list">

     <!-- job  details -->
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
 <br>
 
 <td><a href="Create_Estimate.php?jid=<?php echo $apid; ?>" class="btn btn-info">Create Estimate</a></td>


 </div>

 </div>

 </div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>