<?php 
session_start();
if($_SESSION['loggedInUser']){
    $name = $_SESSION['loggedInUser'];
 include('includes/connections.php');

if(!$_GET['cost']){
    
    $_SESSION['restt_name']=  $_GET['restraunt_name'];
    $clientID = $_SESSION['restt_name'];
    $_SESSION['items']="";
    $_SESSION['total'] = 0;
    $_SESSION['cost_item'] = 0;
    $_SESSION['ide']="";
        
        
        
 $query3 = "INSERT INTO order_place(order_id,user_name,order_items,rest_name,total,place_order) VALUES(NULL,'$name',NULL,'$clientID',NULL,NULL)";
//$result3 = mysqli_query($conn,$query3);
        
          if(mysqli_query($conn,$query3))
    {
        $_SESSION['last_row'] = mysqli_insert_id($conn);
        $alert = "<div class='alert alert-warning'>new order being placed</div>";
     
       
    }
        else
        {
            $alert = "error:".$query3."<br>".mysqli_error($conn);
        }
  


 
    
    
}

  
    
$clientID = $_SESSION['restt_name'];
$restname = str_replace(' ','',$clientID);
$restname = strtolower($restname);
    
    
$query1 = "SELECT * from $restname";
$result1 = mysqli_query($conn,$query1);
    

       
    
    
    
    
    
     
include('includes/header.php');
?>


 <div class="container">
    
     <h1 class="page-header center-align"><?php echo $clientID; ?></h1>
     

           <p class="lead">Lets see what we got for you !</p>
     
     <?php
    echo $alert;
    ?>
            <div class="col-sm-9">
                 <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th>Cuisine</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                         
    if(mysqli_num_rows($result1)>0){
        
        while($row1 = mysqli_fetch_assoc($result1) ) {
            echo "<tr>";
            
            echo "<td>".$row1['cuisine']."</td><td>".$row1['type']."</td><td>".$row1['cost']."</td>";
         
            echo '<td><a href="order.php?cost='.$row1['dish_id'].'" type="submit" class="btn btn-success btn-sm" name="addtocart">Add to Cart
            </a>
            <span class="glyphicon glyphicon-shopping-cart"></span></td>';
            
            echo "</tr>";
        }
//        '.$row1['cuisine'].': Rs. 
    }else{
        
        echo "<div class='alert alert-warning'>You have no food items </div>";
    }
//    mysqli_close($conn);
    
    
    ?>
                     
                     
                     </tbody>
                
                
                </table>   
           
           </div>
     
     
                 <div class="col-sm-3">
                     
                     <p class=" lead page-header center-align">My Cart</p>
                     <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
                         <th>My Order</th>
                         
                         
                         <?php
    
   
    
                           
    if($_GET['cost']){
        $id = $_GET['cost'];
         
        $query2 = "SELECT cuisine, cost FROM $restname WHERE dish_id = '$id' ";
$result2 = mysqli_query($conn,$query2);
        
        if(mysqli_num_rows($result2)>0){
        
        while($row2 = mysqli_fetch_assoc($result2) ) {
            
            $_SESSION['items']= " ".$_SESSION['items']."<tr><td>".$row2['cuisine']." : Rs.".$row2['cost']."</td></tr>";
     $_SESSION['total']+=$row2['cost'];
            
            $total_var =  $_SESSION['total'];
            $last_id = $_SESSION['last_row'];
            $_SESSION['ide'] ="".$_SESSION['ide'].",".$id."";
            $ide = $_SESSION['ide'];
            $n = 1;
            $query4 = "UPDATE order_place
             SET user_name='$name',
             order_items='$ide',
             total='$total_var',
             rest_name='$clientID',
             place_order='$n' WHERE order_id = '$last_id'";
            
             $result4 = mysqli_query($conn,$query4);
            
            
            if($result4){
            
            $alertt = "new order being placed";
        }else
        {
            $alertt ="error updating record:".mysqli_error($conn);
        }

            
            
           
        }

    }
        
    echo $_SESSION['items'];
    
  
    
  
    }
         echo "<tr><td><strong>TOTAL : </strong>".$_SESSION['total']."</td></tr>";
    
                         ?>
                         <tr><td><a href="index.php" type="button" class="btn btn-primary">Place Order</a></td></tr>
                         <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
                        
                         <tr><td><input value="Cancel Order" type="submit" class="btn btn-danger" name="cancel"></td></tr>
                         </form>
                     </table>
                     
                     
     </div>
      
      
      </div>



<?php
    
 if(isset($_POST['cancel'])){
        $last_id = $_SESSION['last_row'];
     $last_id-=1;
        $query6 =  "DELETE FROM order_place WHERE order_id='$last_id'";
        $result6=   mysqli_query($conn,$query6);
        if($result6){ header("Location:http://localhost/index.php");
        }
        else{
            echo "error deleting record:".mysqli_error($conn);
        }
        
    }
    
    
echo $alertt;    
    
    
}


else{
    echo "log in ";
}

 mysqli_close($conn);
include('includes/footer.php');

?>