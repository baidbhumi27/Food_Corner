<?php

session_start();
include('../includes/connections.php');
include('../includes/functions.php');


if(isset($_POST['submit'])){
    
    
    $rest_name      = validateFormData($_POST['rest_name']);
    $rest_add       = validateFormData($_POST['rest_add']);
    $owner_first    = validateFormData($_POST['owner_first']);
    
    $phone          = validateFormData($_POST['phone']);
    $email          = validateFormData($_POST['email']);
    $owner_pass     = validateFormData($_POST['owner_pass']);
    $owner_pass = password_hash($owner_pass,PASSWORD_DEFAULT);
    $loc            = validateFormData($_POST['loc']);
    $cui            = validateFormData($_POST['cui']);
    $staff_del      = validateFormData($_POST['staff_del']);
    


        $query = "INSERT INTO add_a_restraunt(restraunt_id,restraunt_name,restraunt_address,first_name,phone,email,password,no_of_locations,type_of_cuisine,rest_staff_del) VALUES(NULL,'$rest_name','$rest_add','$owner_first','$phone','$email','$owner_pass','$loc','$cui','$staff_del')"; 
    
    $result = mysqli_query($conn,$query);
    
    

    
    $restname = str_replace(' ','',$rest_name);
    $addRest="CREATE table $restname(
				dish_id int(100) Auto_increment primary key,
				cuisine varchar(50),
				type varchar(50),
				cost int(100)
			)";
			
			if(!mysqli_query($conn,$addRest))
            {
                echo mysqli_error($conn);
            }
    
    
    if($result)
    {
        $_SESSION['loggedInRest'] = $rest_name;
       
        header('Location: ../add_cuisine.php');
     
       
    }
        else
        {
            echo "error:".$query."<br>".mysqli_error($conn);
        }
    
    
    
    }




mysqli_close($conn);

?>
