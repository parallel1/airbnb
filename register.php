<?php include('registration_processing.php'); ?>
      
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php'); ?>
</head>        
    
<body>
  
    <?php include('header.php'); ?>
 
    

        <div class="container" id="content_top">
          <h2>Registration</h2>    
    <form method= "post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php include('errors.php'); ?>
      
        <div class = "form-group">
            <label>First Name</label>
            <input type="text" name="firstname" required >
        </div>
        
        <div class = "form-group">
            <label>Last Name </label>
            <input type="text" name="lastname" required >
        </div>
        
         <div class = "form-group">
            <label>Email </label>
            <input type="email" name="email" required >
        </div>
        
         <div class = "form-group">
            <label>password </label>
            <input type="password" name="password_first"  required >
        </div>
        
         <div class = "form-group">
            <label>Confirm password </label>
            <input type="password" name="password_second" required >
        </div> 
        
         <div class = "form-group">
            <button name="register" type="submit" class="btn">Submit</button>
        </div>
        <p>
            want to rent out your house ?  <a href="register_host.php">register as a host</a>
        </p>    
    </form>    

</div>
</body>
</html>