
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include('head.php'); ?>
 </head>
 <body>
     <?php include('header.php'); ?>
    <div class="container" id="content_top">
          <h2>Search for a house</h2>    
          
     <form method= "post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   
      
       
        
        <div class = "form-group">
            <label>House Location (city name) </label>
            <input type="location" name="location" required >
        </div>
        
         <div class = "form-group">
            <label>check-in date</label>
            <input type="date" name="checkin"  required >
        </div>
         <div class = "form-group">
            <label>check-out date</label>
            <input type="date" name="checkout"  required >
        </div>
        <div class = "form-group">
            <label>Adults</label>
            <input type="number" name="adult"  required >
        </div>
        <div class = "form-group">
            <label>Children</label>
            <input type="number" name="children"  required >
        </div>
         <div class = "form-group">
            <label>Infant</label>
            <input type="number" name="infant"  required >
        </div>
         <div class = "form-group">
            <button name="search" type="submit" class="btn">Submit</button>
        </div>
           
    </form>    

<?php include('search.php'); ?>
<?php include('errors.php'); ?>
</div>
</body>
</html>
     
     