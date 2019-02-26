<?php include('login_host_processing.php'); ?>
      
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php'); ?>
</head>        
    
<body>
  
    <?php include('header.php'); ?>
 
    

        <div class="container" id="content_top">
          <h2>Login</h2>    
    <form method= "post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php include('errors.php'); ?>
      
    
        
         <div class = "form-group">
            <label>Email </label>
            <input type="email" name="email" required >
        </div>
        
         <div class = "form-group">
            <label>password </label>
            <input type="password" name="password_first"  required >
        </div>
        
         
         <div class = "form-group">
            <button name="login" type="submit" class="btn">Submit</button>
        </div>
        <p>
            want to rent a house ? <a href="login.php">login as a tenant</a>
        </p>    
    </form>    

</div>
</body>
</html>