<?php

session_start();
        include('../includes/functions.php');
if(isset($_POST['submit_sign'])){
    $user = $pass = "";
    $user = validateFormData($_POST['sign_name']);
    $pwd = validateFormData($_POST['sign_pass']);
   
    $hashpwd = password_hash($pwd,PASSWORD_DEFAULT);
    include('../includes/connections.php');
    
   $query = "INSERT INTO user1(id,Username,pass) VALUES (NULL,'$user','$hashpwd')";
    
     $result = mysqli_query($conn,$query);
        if($result){
            
            header("Location:../index.php");
        }else
        {
            echo "error:".$query."<br>".mysqli_error($conn);
        }
    
}



mysqli_close($conn);



?>