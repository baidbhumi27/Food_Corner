
<?php 

session_start();


if($_SESSION['loggedInUser']){
$clientID = $_SESSION['restname'];
$restname = str_replace(' ','',$clientID);
$restname = strtolower($restname);
include('includes/functions.php');
include('includes/connections.php');
?>

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
         
            
            
            
            
           
            <li><a href="loggedin.php">Logout</a></li>
            
            
            </ul>
        </div>
        </div>
    
    </nav>

<div class="cover">
    <div class="cover-text"><h1 class="center-align"> Add Cuisine</h1>
        
        
        <?php  echo "<div class='alert alert-success'>$alertMessage</div>";
        
        echo $restname ;
        ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<div class="card">
					
					<div class="form-row">
			    		<div class="form-group col-sm-6">
			    			<label>Cuisine Name</label>
			    			<input type="text" name="dish" class="form-control">
			    		</div>
			    		<div class="form-group col-sm-4">
			    			<label>Cuisine type</label>
			    			<input type="text" name="type" class="form-control">
			    		</div>
			    		<div class="form-group col-sm-2">
			    			<label>Cuisine Cost</label>
			    			<input type="integer" name="cost" class="form-control">
			    		</div>
		    		</div>
		    		<div><button type="submit" class="btn btn-success" name="addcuisine">Add</button></div>
	    		</div>
	        </form>
    </div>
</div>




<?php
    
if(isset($_POST['addcuisine']))
{
   $dish_q=$type_q=$cost_q="";
    $dish = validateFormData($_POST['dish']);
    $type = validateFormData($_POST['type']);
    $cost = validateFormData($_POST['cost']);
    $clientID = $_SESSION['restname'];
$query = "INSERT into $restname(dish_id,cuisine,type,cost) values (NULL,'$dish','$type','$cost')";
    
    $result = mysqli_query($conn,$query);
    if($result)
        {
            
            header("Location:add_cuisine.php?alert=success");
        }
    else
        {
            echo "error:".$query."<br>".mysqli_error($conn);
        }
//    unset($_POST['addcuisine']);
    
}


if($_GET['alert']=='success')
    {
        $alertMessage = "New Cuisine Added !";
    }


mysqli_close($conn);


}
else if(!$_SESSION['loggedInUser']){
    echo "<br><br><br><br><h2 class='alert alert-warning'>You are Logged out of your account.<a href='index.php'>Log In</a></h2>";
}
include('includes/footer.php');
?>