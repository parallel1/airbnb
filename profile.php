<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <?php include('head.php'); ?>
</head>        
    
<body>
    <?php include('header.php'); ?>

    <div  id = "content_top" class="container">
    <h1>User profile</h1>
    
    <ul class="list-group">
  <li class="list-group-item">First Name: <?php echo $_SESSION['firstname']; ?></li>
  <li class="list-group-item">Family Name: <?php echo $_SESSION['lastname']; ?></li>
  <li class="list-group-item">Email: <?php echo $_SESSION['email']; ?></li>
 
  </ul>
  <h2>Your Listing</h2>
  <?php
  include_once 'db_connect.php';
  $email=$_SESSION['email'];
  $sql= "SELECT * FROM house WHERE host_email = '$email'";
  $result = mysqli_query($connection,$sql);
  if(mysqli_num_rows($result) == 0){ ?>
      <p> you have no house listed.</p>
 <?php } else{
       ?>
      
<?php     while ($row = mysqli_fetch_assoc($result)) {
          $apptime= strtotime($row['date']);
        ?>
            
            <ul class="list-group">
          <li class="list-group-item">City: <?php echo $row['city']; ?></li>
         <li class="list-group-item">Address: <?php echo $row['address']; ?></li>
          <li class="list-group-item">Available Date: <?php echo date('m/d/Y', $apptime); ?></li>
          <li class="list-group-item">Number of Bedroom: <?php echo $row['bedroom']; ?></li>
          <li class="list-group-item">Number of Bathroom: <?php echo $row['bathroom']; ?></li>
          <li class="list-group-item">Number of Parking Spaces: <?php echo $row['parking']; ?></li>
          <li class="list-group-item">Availability: 
          <?php if ($row['availability'] == 1){
              echo "Yes";
              }else{
              echo "No";
              }
          ?>
          
          
          </li>
 
          </ul>
    <?php      
          //display upcoming appointments 
         
      }   
     
 
 }
  ?>
   
    </div>
</body>
</html>