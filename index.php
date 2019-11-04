<!-- this is index  page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Safe Trade</title>

    <!--BOOTSTAP 4 CSS CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!--BOOTSTAP 4 JS CDN-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!--BOOTSTAP 4 JQUERY CDN-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <!--BOOTSTAP 4 POPPER JS CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
        
    <!--CUSTOM CSS FILE-->    
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-md bg-light navbar-light">
        <a class="pull-left"><img src="Images/Logo.png" width="60px" height="60px"></a>  <!--LOGO-->
            <a class="navbar-brand js-scroll-trigger" href="index.php">&nbsp Safe Trade</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">  <!--Collapsible navbar-->
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <div class="navbar-nav ml-auto">
            <!--nav-links-->
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Home </a></li>
            <!--dropdown-->
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

<!--navbar end-->




<main role="main" id="main">


<!--carousel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!--1st slide-->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="Images\HandShake.jpg" alt="First slide"><!--img-ref: [https://pixabay.com/photos/handshake-hand-give-business-man-2056023/]-->
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>TRADE WITH US</h1>
                <p>Sign up now</p>
              </div>
            </div>
          </div>
          <!--2nd slide-->
          <div class="carousel-item">
            <img class="second-slide" src="Images\hands.jpg" alt="Second slide"><!--img-ref: [https://pixabay.com/illustrations/hands-globe-earth-protection-1222866/]-->
            <div class="container">
              <div class="carousel-caption">
                <h1>TRADING WORLD WIDE</h1>
                <p>Join and learn more.</p>
              </div>
            </div>
          </div>
          <!--3rd slide-->
          <div class="carousel-item">
            <img class="third-slide" src="Images\Fast.jpg" alt="Third slide"><!--img-ref: [https://pixabay.com/illustrations/service-delivery-tracking-logistic-4540203/]-->
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>GET IT DONE QUICKLY</h1>
                <p>We provide fastest services.</p>
              </div>
            </div>
          </div>
        </div>
        <!--buttons-->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!--end of carousel-->


<br><br><br><br>





    <!-- START THE FEATURETTES -->

<!--1st-->
<div class="row featurette">
  <div class="col-md-7">
    <h1 class="featurette-heading">Its free!<span class="text-muted">JOIN NOW.</span></h1>
    <p class="lead">Create your account without any hassle, with just your E-Mail ID.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" src="Images/SignUp.jpg" alt="Generic placeholder image" id="img1"><!--img-ref: [https://pixabay.com/photos/thumbs-up-good-alright-1999780/]-->
  </div>
</div>

<hr class="featurette-divider">

<!--2nd-->
<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h1 class="featurette-heading">Post now and get it done!<span class="text-muted">See for yourself.</span></h1>
    <p class="lead">Get a free evaluation of your job from multiple traders.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img class="featurette-image img-fluid mx-auto" src="Images\bg4.jpg" alt="Generic placeholder image"  id="img1"><!--img-ref: [https://pixabay.com/photos/thumbs-up-good-alright-1999780/]-->
  </div>
</div>

<hr class="featurette-divider">

<!--3rd-->
<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Hello Traders!<span class="text-muted">Need a job?</span></h2>
    <p class="lead">Sign up as a Tradesmen and get a world full of jobs.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" src="Images\bg5.jpg" alt="Generic placeholder image"  id="img1"><!--img-ref: [https://pixabay.com/photos/dock-feet-footwear-jetty-mat-1846008/]-->
  </div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<!-- FOOTER -->
<footer class="container">
<p class="float-right"><a href="#">Back to top</a></p>
</footer>





</main>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>