<?php

session_start();
        include('../includes/functions.php');
  if( isset($_POST['login']))
        {
            $formUser = $formPassword = "";
            $formUser = validateFormData($_POST['log_name']);
            $formPass = validateFormData($_POST['log_pass']);
            include('../includes/connections.php');
            $query = "SELECT Username, pass FROM user1 WHERE Username = '$formUser'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows( $result ) > 0)
    {
       while($row = mysqli_fetch_assoc($result) ) {
           $name       = $row['Username'];
           $hashedPass = $row['pass'];
       }
        
        if(password_verify($formPass,$hashedPass))
        {
            
            $_SESSION['loggedInUser'] = $name;
            
            header("Location: ../index.php");
     
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