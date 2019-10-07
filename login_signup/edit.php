<?php

session_start();
        include('../includes/functions.php');
  if( isset($_POST['own_submit']))
        {
            $formUser = $formPass = "";
            $formUser = validateFormData($_POST['own_name']);
            $formPass = validateFormData($_POST['own_pass']);
            include('../includes/connections.php');
            $query = "SELECT restraunt_name,email, password FROM add_a_restraunt WHERE email = '$formUser'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows( $result ) > 0)
    {
       while($row = mysqli_fetch_assoc($result) ) {
           $name       = $row['email'];
           $hashedPass = $row['password'];
           $restraunt = $row['restraunt_name'];
       }
        
        if(password_verify($formPass,$hashedPass))
        {
            
            $_SESSION['loggedInRest'] = $restraunt;
            
            header("Location: ../add_cuisine.php");
     
        }
            else{
                 header("Location: ../index.php");
        $loginError = "<div class='alert alert-danger'>Sorry! no such user/password combination.</div>";
    }
    

    }
         else{
              header("Location: ../index.php");
        $loginError = "<div class='alert alert-danger'>Sorry! no such user. Try again.<a class='close' data-dismiss='alert'>&times;</a></div>";
    }   
            
        }

mysqli_close($conn);

    

?>