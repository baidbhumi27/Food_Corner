<?php
session_start();

include('includes/connections.php');
$query = "SELECT * from add_a_restraunt";
$result = mysqli_query($conn,$query);

include('includes/header.php');


?>



   <form class="modal fade" id="signUpBox" action="login_signup/signup.php" method="post" class="row"><!---         sign up      ---->
            
            <div class="modal-dialog modal-sm">
            
                <div class="modal-content">
                
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h4 class="modal-title">Sign Up</h4>
                    </div>
                    
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label>Username</label>
                            
                            <input name="sign_name" type="text" placeholder="Username" class="form-control" required>
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <label>Password</label>
                            
                            <input name="sign_pass" type="password" placeholder="Password" class="form-control" required>
                        </div>

                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button name="submit_sign" type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                
                </div>
                
            </div>
            
        </form><!---         sign up      ---->
    
    
    
    
    <form action="login_signup/login.php" method="post" class="modal fade" id="loginBox"><!---         login      ---->
            
            <div class="modal-dialog modal-sm">
            
                <div class="modal-content">
                
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h4 class="modal-title">User Login</h4><?php echo $loginError;   ?>
                    </div>
                    
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label>Username</label>
                            <input name="log_name" type="text" placeholder="Username" class="form-control" value="<?php echo $formUser;   ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="log_pass" type="password" placeholder="Password" class="form-control" required>
                        </div>

                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button name="login" type="submit" class="btn btn-primary">Login</button>
                    </div>
                
                </div>
                
            </div>
            
        </form><!---         login      ---->
   <?php
if(!$_SESSION['loggedInUser']){
    ?>
    <div class="cover">
        <div class="cover-text">
        <h1 class="center-align">Eat Well Feel Good</h1>
            <p class="blockqoute-reverse">Order your Favourite food here and we will rush it to you within minutes</p><br>
           
        </div>
    
    
    </div>
    
    <section class="testimonial">
        <div class="container">
            <blockquote>
            &ldquo; People Who Love To Eat Are The Best People <scan class="glyphicon glyphicon-heart"></scan>  &rdquo;
                <cite>&mdash; A Happy Customer</cite>
            </blockquote>
        
        
        </div>
    
    
    </section>
 <?php
}
    ?>

<?php
if($_SESSION['loggedInUser']){
$name1 = $_SESSION['loggedInUser'];
   
    

?>
<div class="cover">
        <div class="cover-text">
        <h1 class="center-align">Welcome, <?php  echo $name1; 
           
  
            ?></h1>
            <p class="blockqoute-reverse">Order your Favourite food here and we will rush it to you within minutes</p><br>
           
        </div>
    
    
    </div>
<?php
}
if(!$_SESSION['loggedInUser']){
    echo "<br><h4 class='alert alert-warning'> Log in to Order</h4>";
}

    
    ?>


    <section>
        <h2 class="crave">What are you craving for?</h2>
        <sidebar class="col-sm-3"><h2 class="headin">Restraunts</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="https://www.zomato.com/surat/retro-bistro-piplod/menu">Restro Bistro</a></li>
            <li class="list-group-item"><a href="https://www.zomato.com/surat/the-sizzling-salsa-piplod/menu">Sizzling Salsa</a></li>
            <li class="list-group-item"><a href="https://www.zomato.com/surat/spice-villa-piplod/menu">Spice Villa</a></li>
            <li class="list-group-item"><a href="https://www.zomato.com/surat/geetha-restaurant-udhna-gam/menu">Geeta</a></li>
            <li class="list-group-item"><a href="https://www.swiggy.com/restaurants/black-pepper-piplod-surat-78338">Black Pepper</a></li>
            <li class="list-group-item"><a href="https://www.zomato.com/surat/enjoy-piplod/menu">Rajhans Enjoy</a></li>
            <li class="list-group-item"><a href="https://www.zomato.com/surat/the-ropeway-restaurant-vesu/menu">The Ropeway Restraunt</a></li>
            <li class="list-group-item"><a href="https://www.zomato.com/surat/blue-basil-vesu/menu">Blue Basil</a></li>
            <li class="list-group-item"><a href="https://www.zomato.com/surat/udan-khatola-vesu/menu">Udan Khatola</a></li>
            <li class="list-group-item"><a href="https://www.dineout.co.in/surat/global-local-vesu-south-surat-60105/menu">Global Local</a></li>
            <li class="list-group-item"><a href="https://www.zomato.com/surat/global-local-vesu/menu">Aroma Kitchen</a></li>
            <li class="list-group-item"><a href="https://www.zomato.com/surat/crazy-bite-piplod/menu">Crazy Bite</a></li>
            <li class="list-group-item"><a href="">More...</a></li>
            
            </ul>
        </sidebar>


        
        <div class="container col-sm-9 restraunts">
            <div class="row">
                
                
        
        
        <?php
                if($_SESSION['loggedInUser']){
                
    if(mysqli_num_rows($result)>0){
        
        while($row = mysqli_fetch_assoc($result) ) {
           
            echo "<div class='col-sm-3'>";
            
            
            echo "<h2>".$row['restraunt_name']."</h2><br><h5>".$row['restraunt_address']."</h5><br><h5>".$row['phone']."</h5><br><h5>".$row['type_of_cuisine']."</h5>";
//            echo '<td><a href="edit.php?id='.$row['id'].'" type="button" class="btn btn-primary btn-sm">
            
//            <span class="glyphicon glyphicon-edit"></span></a></td>';
//            
             echo '<a href="order.php?restraunt_name='.$row['restraunt_name'].'" type="button" class="btn btn-primary btn-sm" >Order Online';
            echo "</a>";
             echo '<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#edit">Edit';
           echo "</button></a></div>";
            
        }
        
    }
    mysqli_close($conn);
                }
    ?>
<!--        href="add_cuisine.php?id='.$row['id'].'"-->
            
        
        </div>
        </div>
            </section>

<form action="login_signup/edit.php" method="post" class="modal fade" id="edit"><!---         login      ---->
            
            <div class="modal-dialog modal-sm">
            
                <div class="modal-content">
                
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h4 class="modal-title">Owner Login</h4><?php echo $loginError;   ?>
                    </div>
                    
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label>Email</label>
                            <input name="own_name" type="email" placeholder="Email" class="form-control" value="<?php echo $formUser;   ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="own_pass" type="password" placeholder="Password" class="form-control" required>
                        </div>

                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button name="own_submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                
                </div>
                
            </div>
            
        </form>




    <section id="signup">
    <div class="container"><h2 class="lead">Get your food delivered at your Doorstep </h2>
        
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
            <form>
                <div class="input-group">
                <input type="text" class="form-control input-lg" placeholder="Put your real address here..">
                    <span class="input-group-btn">
                    <button class="btn btn-warning btn-lg" type="button">Place Order</button></span>
                
                </div>
                </form>
                
            </div>
        </div></div></section>
 
    <section id="team">
    <div class="container">
        <h2>Meet our team</h2>
        <div class="row">
        <div class="col-sm-3">
            <img src="" alt="Woman's Face" class="img-circle">
            <h4>Bhumika Baid</h4>
            <p>Founder</p>
            </div>
            
            <div class="col-sm-3">
            <img src="" alt="Man's Face" class="img-circle">
            <h4>Bhumika Doe</h4>
            <p>President</p>
            </div>
            
            <div class="col-sm-3">
            <img src="" alt="Woman's Face" class="img-circle">
            <h4>Bhumika Doe</h4>
            <p>Ceo</p>
            </div>
            
            <div class="col-sm-3">
            <img src="" alt="Man's Face" class="img-circle">
            <h4>Bhumika Doe</h4>
            <p>Co-Founder</p>
            </div>
        </div>
        </div></section>
    
   <?php

//$password = password_hash("bhums12345",PASSWORD_DEFAULT);
//echo $password;

include('includes/footer.php');
?>


