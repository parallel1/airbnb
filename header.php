
 	<nav class="navbar navbar-default navbar-fixed-top" role ="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
		
      </button>
      
	  <img class="navbar-brand" src="" alt="" width="250px;" height="60px;">
	  <a id ="logo" class="navbar-brand" href="index.php">AIRBNB</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
         <?php session_start();
        if(isset($_SESSION['firstname']) && isset($_SESSION['user_type'])){ 
        if($_SESSION['user_type'] == "renter")  {  ?>
        <li><a href="profile.php">welcome, <?php echo $_SESSION['firstname']; ?></a></li>
         <li><a href="logout.php">Logout</a></li>
        
 <?php  }
        if($_SESSION['user_type'] == "host") {  ?>
         <li><a href="profile.php">welcome, <?php echo $_SESSION['firstname']; ?></a></li>
         <li><a href="list.php">List House</a></li>
         <li><a href="logout.php">Logout</a></li>
<?php        }
 
        } else{
     ?>
        <li><a href="register.php">register</a></li>
		<li><a href="login.php">login</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      <?php } ?>
      </ul>
    </div>
  </div>
</nav>
