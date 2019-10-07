  <?php    

if($_GET['alert']=='success'){

    $alertMessage = "Application successful !   <a class='close' data-dismiss='alert'>&times;</a>";

    $mesg = 'Moving forward to the next step: <a href="add_cuisine.php?id='.$row['id'].'" type="button" class="btn btn-success">Add cuisine</a>';
    
    }
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FoodCorner</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styling.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="add">
    
<!--- Navigation Bar---------------------   -->>      
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
            <li><a href="index.php">Home</a></li>
           
            <li class="active"><a href="add.php">Add a restraunt</a></li>
           
            
            </ul>
        </div>
        </div>
    
    </nav>
   
    
    
 <h1>Fastest way to get your food delivered at your Doorsteps </h1>
    
    
    
    <?php
    echo "<div class='alert alert-success'>$alertMessage</div>" ;
    
    echo "<div class='cover'><div class='cover-text'><div class='center-align'><h2>$mesg</h2> </div></div></div>";
    
    
    ?>
    
    <div class="row">
        <div class="col-sm-5 col-sm-offset-5">
            <fieldset>
    <legend>Partner with us</legend>
    
            <form action="login_signup/add_rest.php" method="post" class="row">
              <div class="form-group">
                <label for="name">Restraunt name</label>
                  <input class="form-control" class="input-sm" type="text" placeholder="Restraunt name" id="name" name="rest_name" required>
                </div>
                 <div class="form-group">
                <label for="address">Restraunt Address</label>
                  <input class="form-control " class="input-lg" type="text" placeholder="Restraunt address" id="address" name="rest_add" required>
                </div>
                 <div class="form-group">
                <label for="Owner name">First name</label>
                  <input class="form-control" class="input-sm" type="text" placeholder="First name" id="Owner name" name="owner_first">
                </div>
                
              <div class="form-group">
                <label for="phone">Phone</label>
                  <input class="form-control" type="tel"  placeholder="Your phone number" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input class="form-control" type="email"  placeholder="Your email address" id="email" name="email" required>
                </div>
                 <div class="form-group">
                <label for="password">Password</label>
                  <input class="form-control" class="input-sm" type="password" placeholder="password" id="password" name="owner_pass" required>
                </div>
              <br>
                
              <div class="form-group">
  <label for="sel1">Number of Locations</label>
  <select class="form-control" id="sel1" name="loc">
      <option default>-select-</option>
    <option>1</option>
    <option>2-5</option>
    <option>6-10</option>
    <option>11-25</option>
      <option>25+</option>
  </select>
</div>
                
                <div class="form-group">
  <label for="sel2">Type of Cuisine</label>
  <select class="form-control" id="sel2" name="cui">
      <option default>-select-</option>
    <option>Chinese</option>
    <option>South Indian</option>
    <option>Italian</option>
    <option>Mexican</option>
      <option>Dessert</option>
  </select>
</div>
                
                <div class="form-group">
  <label for="sel3">Do your restraunt staff deliver orders</label>
  <select class="form-control" id="sel3" name="staff_del">
      <option default>-select-</option>
    <option>YES</option>
    <option>NO<option>
  
  </select>
</div>
                
                <button type="submit" value="Submit" class="btn btn-success" name="submit">Submit</button>
                
              </form>
                </fieldset>
          </div>
        
    
            </div>
      
     <?php
    
    

include('includes/footer.php');
?>

