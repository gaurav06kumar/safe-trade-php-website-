<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Job</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">


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

                    <li><a href="Customer_Dash.php">Back </a></li>
                    <li><a href="Customer_LogOut.php">LogOut </a></li>


                </ul>

            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


</div>




<div class="row" id="booking">

<div class="col-md-4 col-sm-4 col-xs12"></div>

    <div class="col-md-4 col-sm-4 col-xs-12" id="form-container">

        <div class="form-header" align="center">
            <h1 id="h1">Create Job</h1>
        </div>

        <form action="#" method="post"  class="booking-form">

            <div class="form-group">
                <span for="j_name" class="form-label">Job Name</span>
                <input class="form-control" type="text" id="j_name" name="j_name" placeholder="Enter the job name">
            </div>

            <div class="form-group">
                <span for="loc" class="form-label">Location</span>
                <input class="form-control" type="text" id="loc" name="loc" placeholder="Enter location of the job">
            </div>

            <div class="form-group">
                <span for="discr" class="form-label">Discription</span>
                <input class="form-control" type="text" id="discr" name="discr" placeholder="Enter job discription">
            </div>

            <div class="form-group">
                <span for="exp_cos" class="form-label">Expected Cost</span>
                <input class="form-control" type="number" id="exp_cos" name="exp_cos" placeholder="Enter an expected cost">
            </div>


            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <span for="s_date" class="form-label">Start Date</span>
                        <input class="form-control" type="date" id="s_date" name="s_date" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <span for="e_date" class="form-label">End Date</span>
                        <input class="form-control" type="date" id="e_date" name="e_date" required>
                    </div>
                </div>

            </div>

            <div class="form-btn">
                <button type="submit" name="p_job" value="p_job" class="submit-btn">Post Now</button>
            </div>
        </form>

    </div>

</div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
</body>
</html>