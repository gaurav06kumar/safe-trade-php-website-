<?php
session_start();
require_once('include/tradesmen.php');
require_once('include/db_config.php');



$tid = $_SESSION['TID'];
$result = tradesmen::find($db,$tid);
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Trader Profile</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
                <a class="nav-link" href="My_Estimate.php">My Estimate </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Trader_Dash.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Trader_LogOut.php">LogOut </a>
            </li>    
            </ul>
        </div>
        </div>  
        </nav>


        <div align="center">
        <br><br><br>
        <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 id="h" class="mt-0">Profile</h2>
                </div>
            </div>
            <div class="container" id="contact">
            <br><br>
            <div class="row">
                <div class="col-lg-3 ml-auto text-center mb-5 mb-lg-0"></div>
                <div class="col-lg-2 ml-auto text-center mb-5 mb-lg-0">
                <h5>Trader Name</h5>
                <div><?php echo $result->getName(); ?></div>
                </div>

                <div class="col-lg-2 ml-auto text-center mb-5 mb-lg-0">
                <h5>Username</h5>
                <div><?php  echo $result->getUname(); ?></div>
                </div>


                <div class="col-lg-2 ml-auto text-center mb-5 mb-lg-0">
                <h5>E-Mail</h5>
                <div><?php echo $result->getEmail(); ?></div>
                </div>
                <div class="col-lg-3 ml-auto text-center mb-5 mb-lg-0"></div>



                </div>
            </div>
            </div>
</div>






        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    </body>
</html>
