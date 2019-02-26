<?php 

session_start();
$errors = array();

if (isset($_POST['list'])){
    include_once 'db_connect.php';
    
   
   
   
    //get data from the form
    $temp_location= mysqli_real_escape_string($connection,$_POST['location']);
    $location=strtolower($temp_location);
    $address= mysqli_real_escape_string($connection,$_POST['address']);
    $input_date= mysqli_real_escape_string($connection,$_POST['a_date']);
    $bedroom= mysqli_real_escape_string($connection,$_POST['bedroom']);
    $bathroom= mysqli_real_escape_string($connection,$_POST['bathroom']);
    $parking= mysqli_real_escape_string($connection,$_POST['parking']);
    $price= mysqli_real_escape_string($connection,$_POST['price']);
    $form_date= date('Y-m-d H:i:s', strtotime($input_date));
    $host_email= $_SESSION['email'];
    $renter_email="NA";
    
    if(!preg_match("/^[a-zA-Z]*$/", $location)){
        array_push($errors, "invalid location");
        
        
    }
    if( !is_int($bedroom) && $bedroom < 0){
        array_push($errors, "invalid number of bedroom");
        
    }
    
    if( !is_int($bathroom) && $bathroom < 0){
        array_push($errors, "invalid number of bathroom");
        
    }
     if( !is_int($parking) && $parking < 0){
        array_push($errors, "invalid number of parking spaces");
        
    }
    if( !is_numeric($price) && $price < 0){
        array_push($errors, "invalid number of price");
        
    }
    

    //insert user to database if there is no error
    if (count($errors) == 0) {
  

  	$sql = "INSERT INTO house (city,address, date, bedroom, bathroom, parking, price, host_email, renter_email, availability) 
  			  VALUES('$location', '$address', '$form_date', '$bedroom', '$bathroom', '$parking', '$price', '$host_email', '$renter_email', TRUE)";
  	mysqli_query($connection, $sql) or die($connection->error);
  
  
  	header('location: index.php');
  }
  
} 
?>  