<!DOCTYPE html>
<html lang="en">
        
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>Trader LogIn</title>

    </head>


    <body>

        <div class="container">


            <nav class="navbar navbar-default">
                <div class="container-fluid">
    
                    <div class="navbar-header">
    
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                
                            <span class="sr-only"></span>
                    
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
    
                        </button>
    
                        <a class="pull-left"><img src="#" width="60px" height="60px"></a>
                        <a class="navbar-brand" href="#">Safe Trade</a>
    
                    </div>
    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="navbar-form navbar-right">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="Login.php">Customer</a></li>
                                <li class="active"><a href="Trader Login.php" >Trader<span class="sr-only">(current)</span></a></li>
                            </ul>
                    
                        </div>
                    </div>
                </div>
            </nav>
    
    
        </div>

        <div class="container col-md-4">

            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#LogIn1" aria-controls="LogIn1" role="tab" data-toggle="tab">LogIn</a></li>
                <li role="presentation"><a href="#SignUp1" aria-controls="SignUp1" role="tab" data-toggle="tab">SignUp</a></li>
            </ul>


            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="LogIn1">

                        <form action="#" method="post"  class="form-container">

                                <h1>Trader LogIn</h1>
                    
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" id="t_email" name="t_email" required class="form-control" placeholder="Enter Email">
                                </div>
                                
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" id="pass1" name="pass1" required class="form-control" placeholder="Enter Password">
                                </div>
                                
                                    
                    
                                <input type="submit" name="submit1" value="Login" class="btn btn-success form-control"> <br>
                    
                            </form>
                            
                </div>


                <div role="tabpanel" class="tab-pane" id="SignUp1">

                    <form action="#" method="post"  class="form-container">

                        <h1>Trader SignUp</h1>

                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname1" name="fname1" required>
                        </div>

                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname1" name="lname1" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email1" name="email1" required>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" id="pass1" name="pass1" required>
                        </div>

                        <div class="form-group">
                            <label for="cpass">Confrim Password</label>
                            <input type="password" class="form-control" id="cpass1" name="cpass1" required>
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
    

</html>
















<!--
    E-mail ID: t_email
    E-mail name: t_email
    Password ID: pass1
    Password name: pass1
    btn name: submit1
-->

