
<?php
session_start();
include_once 'include/tradesmen.php';
$t_user = new tradesmen();

if (isset($_POST['submit'])) {
	//	extract($_POST);
  $emailusername=$_POST['email'];
   $password=$_POST['pass'];
	    $login = $t_user->check_login($emailusername, $password);
	    if ($login) {
	        // Registration Success
	       //echo "pass";
		 //echo  $_SESSION['TID'];
		 ?>
		 <script type="text/javascript">
			 window.open('Trader_Dash.php','_self');
		 </script>
		 <?php

	    } else {
	        // Registration Failed
	       // echo 'Wrong username or password';
         ?>
     		<script type="text/javascript">
     			window.open('Trader_LogIN.php?ss=0','_self');
     		</script>
     		<?php
	    }
	}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trader LogIn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>

        body{

            background: url(Images/YinYang.jpg) no-repeat;
            width: 100%;
            height: 782px;
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


  <div class="container">


	<!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
	<nav class="navbar navbar-default">
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


	</div>

	<!-- Login section -->
	<div class="row">

		<div class="col-md-4 col-sm-4 col-xs12"></div>

			<div class="col-md-4 col-sm-4 col-xs-12">

				<form action="#" method="post"  class="form-container">
					<?php
							if(isset($_GET['ss']))
							{
								if($_GET['ss']==1)
								{
									echo "<legend> Registered Successfully.</legend>";
								}
								if($_GET['ss']==0)
								{
									echo "<legend style='color:orange;'> Wrong username or password.</legend>";
								}

							}
					?>
					<h1>Trader LogIn</h1>

					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" id="email" name="email" required class="form-control" placeholder="Enter Email">
					</div>

					<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" id="pass" name="pass" required class="form-control" placeholder="Enter Password">
					</div>



					<input type="submit" name="submit" value="Login" class="btn btn-success form-control"> <br>

				</form>

			</div>

		</div>

	</div>

	<!-- end of Login section -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



</body>
