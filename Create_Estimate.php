<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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

                    <li><a href="Customer_Job.php">Back </a></li>
                    <li><a href="Trader_LogOut.php">LogOut </a></li>


                </ul>

            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


</div>




<div class="row" id="estimate">

<div class="col-md-4 col-sm-4 col-xs12"></div>

    <div class="col-md-4 col-sm-4 col-xs-12" id="form-container">

        <div class="form-header" align="center">
            <h1 id="h1">Create Job</h1>
        </div>

        <form action="#" method="post"  class="booking-form">


            <div class="row">

            
                <div class="col-sm-4">
                    <div class="form-group">
                        <span class="form-label">Labour Cost</span>
                        <input class="form-control" type="text">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <span class="form-label">Material Cost</span>
                        <input class="form-control" type="tel">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <span class="form-label">Transport Cost</span>
                        <input class="form-control" type="text">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <span class="form-label">Total Cost</span>
                        <input class="form-control" type="text">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <span class="form-label">Expected Date</span>
                        <input class="form-control" type="date" required>
                    </div>
                </div>

            </div>

            <div class="form-btn">
                <button class="submit-btn">Post Estimate</button>
            </div>

        </form>

    </div>

</div>

</div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
</body>
</html>