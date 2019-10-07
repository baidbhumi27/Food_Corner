<?php
session_start();
include('includes/header.php');

if($_SESSION['loggedInUser']){
$name1 = $_SESSION['loggedInUser'];

?>


    <div class="cover">
        <div class="cover-text">
        <h1 class="center-align">Welcome, <?php  echo $name1; ?></h1>
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

      
   
    
   <?php
}
//$password = password_hash("bhums12345",PASSWORD_DEFAULT);
//echo $password;
else if(!$_SESSION['loggedInUser']){
    echo "<br><br><br><br><h2 class='alert alert-warning'>You are Logged out of your account.<a href='index.php'>Log In</a></h2>";
}
include('includes/footer.php');
?>


