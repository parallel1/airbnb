
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include('head.php'); ?>
 </head>
 <body>
     <?php include('header.php'); ?>
    <div class="container" id="content_top">
        <!--code inside next div taken from https://bootsnipp.com/snippets/7nmOW -->
        <div class="container contact-form">
            <div class="contact-image">
                <img src="../img/airbnb.jpg" alt="airbnb_symbol"/>
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" onclick="message()" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>  

</div>
<script>
function message() {
  alert("Message saved");
}
</script>
</body>
</html>