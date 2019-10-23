<?php
include_once 'include/tradesmen.php';
require_once('include/db_config.php');

// Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
if (isset($_POST['signup'])){
        //extract($_POST);
        $fullname=$_POST['fname'];
        $uname=$_POST['Uname'];
        $email=$_POST['email'];
        $upass= $_POST['pass'];
        $register = tradesmen::reg_user($db,$fullname, $uname, $upass, $email);
        if (is_null($register)) {

          //"Registration Failed";

            ?>
           <script type="text/javascript">
             window.open('Trader_SignUP.php?ss=0','_self');
           </script>
           <?php

        }

        elseif ($register=='0') {

          //  "alredy prenst"

          ?>
          <script type="text/javascript">
            window.open('Trader_SignUP.php?ss=2','_self');
          </script>
          <?php


        }
        else {

          // Registration Success
          ?>
          <script type="text/javascript">
            window.open('Trader_LogIN.php?ss=1','_self');
          </script>
          <?php

        }
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trader SignUp</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>

        body{

            background: url(Images/signupbg.jpg) no-repeat;
			background-size: cover;
			background-attachment: fixed;

        }

		.form-container{

			padding: 50px 60px;
			margin-top: 10vh;
			-webkit-box-shadow: -1px 2px 61px 12px rgba(0,0,0,0.75);
			-moz-box-shadow: -1px 2px 61px 12px rgba(0,0,0,0.75);
			box-shadow: -1px 2px 61px 12px rgba(0,0,0,0.75);
			color: black;
		}


    #signup_btn{

        background-color: royalblue;
    }



    </style>

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
						<li><a href="index.php">Home </a></li>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Customer<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="Customer_LogIN.php">LogIn</a></li>
                <li><a href="Customer_SignUP.php">SignUp</a></li>
              </ul>
            </li>


            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trader<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="Trader_LogIN.php">LogIn</a></li>
                <li><a href="Trader_SignUP.php">SignUp</a></li>
              </ul>
            </li>





					</ul>

				</div>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>




	<div class="row">

		<div class="col-md-4 col-sm-4 col-xs12"></div>

			<div class="col-md-4 col-sm-4 col-xs-12">

				<form action="#" method="post"  class="form-container">

					<?php
							if(isset($_GET['ss']))
							{
								if($_GET['ss']==0)
								{
									echo "<legend> Unable To Register User , Please Try Again.</legend>";
								}

								if($_GET['ss']==2)
								{
									echo "<legend> Email alredy present  , Please Try Again.</legend>";
								}
							}


					?>

					<h1>Trader Registration</h1>

					<div class="form-group">
						<label for="fname">Full Name</label>
						<input type="text" class="form-control" id="fname" name="fname" required>
					</div>

					<div class="form-group">
						<label for="lname">Username</label>
						<input type="text" class="form-control" id="Uname" name="Uname" required>
					</div>

					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>

					<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" class="form-control" id="pass" name="pass" required>
					</div>



					<div class="form-group" >
						<input type="submit" name="signup" value="Signup" class="btn btn-primary form-control">
					<div>



				</form>

			</div>

		</div>


	</div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>




</body>
