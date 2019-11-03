<?php
include_once 'include/customer.php';
require_once('include/db_config.php');
//$user = new User();

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
      //  $user = User::create($mysqli, $_POST['name'], $_POST['studentId'], $_POST['email'], $_POST['dateOfBirth']);

        $register = User::reg_user($db,$fullname, $uname, $upass, $email);
        if (is_null($register)) {
            // Registration Success


            ?>
            <script type="text/javascript">
              window.open('Customer_SignUP.php?ss=0','_self');
            </script>
            <?php

        }

    elseif ($register=='0') {

      //echo "alredy prenst";

      ?>
      <script type="text/javascript">
        window.open('Customer_SignUP.php?ss=2','_self');
      </script>
      <?php

      // code...
    }
        else {
          //echo "login";


          ?>
          <script type="text/javascript">
            window.open('Customer_LogIN.php?ss=1','_self');
          </script>
          <?php

        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer SignUp</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">


</head>
<body>


<nav class="navbar navbar-expand-md bg-light navbar-light">
        <a class="pull-left"><img src="Images/Logo.png" width="60px" height="60px"></a>
            <a class="navbar-brand js-scroll-trigger" href="index.php">&nbsp Safe Trade</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <div class="navbar-nav ml-auto">

            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Home </a></li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         
      Customer      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Customer_LogIN.php">LogIn</a>
        <a class="dropdown-item" href="Customer_SignUP.php">SignUp</a>
      </div>
    </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Trader      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Trader_LogIN.php">LogIn</a>
        <a class="dropdown-item" href="Trader_SignUP.php">SignUp</a>
      </div>
    </li> &nbsp &nbsp &nbsp &nbsp &nbsp
        
    </ul>
        </div>
        </div>  

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

					<h2>Customer Registration</h2>

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




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>
