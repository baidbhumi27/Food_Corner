<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FoodCorner</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    
<!--- Navigation Bar---------------------   -->     

    <nav class="nav bar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </button>
            <a class="navbar-brand" href="index.php">FoodCorner &nbsp; <span class="glyphicon glyphicon-cutlery"></span></a>
            
        
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse" navbar-default>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="">Home</a></li>
         
            
            <?php if(!$_SESSION['loggedInUser']){   ?>
             <li><a href="add.php">Add a restraunt</a></li>
            
            
            <li><button class="btn btn-default" type="button" data-toggle="modal" data-target="#signUpBox">Sign Up</button></li>
            
           <li><button class="btn btn-default" type="button" data-toggle="modal" data-target="#loginBox">Login</button></li>
            <?php    }          ?>
            
            
            <?php
            if($_SESSION['loggedInUser']){
            
            ?>
            
            <li><a href="loggedin.php">Logout</a></li>
            
            <?php  } ?>
            </ul>
        </div>
        </div>
    
    </nav>
