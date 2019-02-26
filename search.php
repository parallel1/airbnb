<?php 

session_start();
$errors = array();

if (isset($_POST['search'])){
    include_once 'db_connect.php';
    $temp_location= mysqli_real_escape_string($connection,$_POST['location']);
    $checkin= mysqli_real_escape_string($connection,$_POST['checkin']);
    $checkout= mysqli_real_escape_string($connection,$_POST['checkout']);
    $adult= mysqli_real_escape_string($connection,$_POST['adult']);
    $child= mysqli_real_escape_string($connection,$_POST['children']);
    $infant= mysqli_real_escape_string($connection,$_POST['infant']);
    $form_date= date('Y-m-d H:i:s', strtotime($checkin));
    
    $location=strtolower($temp_location);
    
    $min_bedroom= $adult + $child;
    $sql_checkin= date('Y-m-d H:i:s', strtotime($checkin));
    
    if($checkin > $checkout){
         array_push($errors, "invalid check-out date");
    }
    if (count($errors) == 0) {
    $sql= "SELECT * FROM house WHERE city = '$location' ";
    $result = mysqli_query($connection,$sql) or die($connection->error);
   
    
     
        if(mysqli_num_rows($result) >= 1) {
        while ($row = mysqli_fetch_assoc($result)) {
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
    }
    
}
?>