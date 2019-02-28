        <?php
session_start();
$errors = array();


if(!isset($_SESSION['firstname'])){
    header('location: login.php');
}
?>
      
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php'); ?>
</head>        
    
<body>
  
    <?php include('header.php'); ?>
 
    

        <div class="container" id="content_top">
        <h1>Your request has been sent to the host.</h1>  
<?php 
if(isset($_GET['house_id'])){
     include_once 'db_connect.php';
    $house_id= $_GET['house_id'];
  
    $sql= "SELECT * FROM house WHERE id = '$house_id'";
    $result = mysqli_query($connection,$sql) or die($connection->error);
   
    if(mysqli_num_rows($result) >= 1) {
        while ($row = mysqli_fetch_assoc($result)) {
          $apptime= strtotime($row['date']);
          $host_email=$row['host_email'];
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
          //insert the request to the table
        }
      }
      $status="Pending";
      $renter_email= $_SESSION['email'];
      $sql = "INSERT INTO request (renter_email,host_email, house_id, status) 
  			  VALUES('$renter_email', '$host_email', '$house_id', '$status')";
  	$result_123=mysqli_query($connection, $sql) or die($connection->error);
    
}

?>
     

</div>
</body>
</html>

