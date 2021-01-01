<!doctype html>
<html style="scroll-behavior: smooth;">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PWD Retired Engineers Welfare Association</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<!-- Meta -->
<meta name="keywords" content="" />
<meta name="author" content="">
<meta name="robots" content="" />
<meta name="description" content="" />

<?php include 'css_master.php';?>




</head>

<body>
<div class="wrapper-boxed">
<div class="site_wrapper">

<?php include 'navbar.php';?>
 
 <div class="clearfix"></div>



<section class="sec-padding">
    <div class="container">
      <div class="row">

      	<div  class="sec_title" style="margin-top: -40px"><h1>Contact Us</h1></div>
         
      <div class="col-md-8">
        <div class="smart-forms bmargin">
           
            <?php if(isset($_GET['msg_success'])){?>

            <h4 class="sent-notification" id="sent-notification" style="background-color: #aae6ba;font-size: 14px;color: green;padding: 5px"><?=$_GET['msg_success']?></h4>

          <?php }elseif(isset($_GET['msg_error'])){?>

            <h4 class="sent-notification" id="sent-notification" style="background-color: pink;font-size: 14px;color: red;padding: 5px"><?=$_GET['msg_error']?></h4>

          <?php }?>


            <form id="" action="sendEmail.php" method="post">
            
              <div>
              <div class="row">
              <div class="col-md-6">
                <div class="section">
                  <label class="field prepend-icon">
                    <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name" required>
                    <span class="field-icon"><i class="fa fa-user"></i></span> </label>
                </div></div>
                <!-- end section -->
                
                
                <div class="col-md-6">
                <div class="section">
                  <label class="field prepend-icon">
                    <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address" required>
                    <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                </div></div>
                <!-- end section -->
                
                <div class="col-md-6">
                <div class="section colm colm6">
                  <label class="field prepend-icon">
                    <input type="tel" name="telephone" id="telephone" class="gui-input" placeholder="Telephone" required>
                    <span class="field-icon"><i class="fa fa-phone-square"></i></span> </label>
                </div></div>
                <!-- end section -->
                
                <div class="col-md-6">
                <div class="section">
                  <label class="field prepend-icon">
                    <input type="text" name="sendersubject" id="sendersubject" class="gui-input" placeholder="Enter subject" required>
                    <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span> </label>
                </div></div>
                <!-- end section -->
                <div class="col-md-12">
                <div class="section">
                  <label class="field prepend-icon">
                    <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message" required></textarea>
                    <span class="field-icon"><i class="fa fa-comments"></i></span> <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span> </label>
                </div></div>
                <!-- end section --> 
                
                
                
                <div class="result"></div>
                <!-- end .result  section --> 
                
              </div></div>
              <!-- end .form-body section -->
              <div class="form-footer">
                <button type="submit" data-btntext-sending="Sending..." id="submit" name="submit" class="btn btn-primary">Submit</button><span id="status"></span>
                <!-- <button type="reset" class="button"> Cancel </button> -->
              </div>
              <!-- end .form-footer section -->
            </form>
          </div>
          <!-- end .smart-forms section --> 
      </div>
      
      
      <div class="col-md-4">
      <div class="address_1">
      <h4>Address Info</h4>
       
       
     <div class="clearfix"></div>
		
      <div class="contact-address">
       Room No.128, Purta Bhaban, Segunbagicha, Dhaka-1000. <br /><br />
      <p><i class="fa fa-phone"></i> +88 01716-197957, +88 01712-567441<br />
            <i class="fa fa-envelope"></i> dmyamin@gmail.com<br />
             <i class="fa fa-envelope"></i> fbfarid923@yahoo.com<br />
            <i class="fa fa-globe"></i> www.prewa.org</p>
           
        

</div>
</div>
       
        </div>  
      </div>
    </div>
  </section>




<style type="text/css">
	#text_pub:hover{

		color: white !important;
	}

	#text_pub:hover a h4{

		color: white !important;
	}

	
</style>


<div class="clearfix"></div>

<?php include 'footer.php';?>

<a href="#" class="scrollup orange2"><i class="fa fa-angle-up"></i></a>

</div></div>



<!-- ========== Js Files ========== --> 
<?php include 'js_master.php';?>

</body>

<!-- Mirrored from codelayers.net/leohunt/corporate/boxed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 11:59:59 GMT -->
</html>