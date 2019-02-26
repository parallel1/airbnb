
<?php include('list_process.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include('head.php'); ?>
 </head>
 <body>
     <?php include('header.php'); ?>
    <div class="container" id="content_top">
          <h2>List a house</h2>   
          <?php include('errors.php'); ?>
     <form method= "post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   
      
    
        
        <div class = "form-group">
            <label>House Location (city) </label>
            <input type="location" name="location" required >
        </div>
        
         <div class = "form-group">
            <label>house address</label>
            <input type="address" name="address"  required >
        </div>
         <div class = "form-group">
            <label>Available date</label>
            <input type="date" name="a_date"  required >
        </div>
        <div class = "form-group">
            <label>Number of bedrooms</label>
            <input type="number" name="bedroom"  required >
        </div>
        <div class = "form-group">
            <label>Number of bathroom</label>
            <input type="number" name="bathroom"  required >
        </div>
         <div class = "form-group">
            <label>Number of parking spaces</label>
            <input type="number" name="parking"  required >
        </div>
         <div class = "form-group">
            <label>rental price (per week)</label>
            <input type="number" name="price"  required >
        </div>
          <div class = "form-group">
            <button name="list" type="submit" class="btn">Submit</button>
        </div>
           
    </form>    

</div>
</body>
</html>
     