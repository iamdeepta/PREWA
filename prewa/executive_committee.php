<?php include 'connection.php'; ?>
<!doctype html>
<html style="scroll-behavior: smooth;">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PWD Retired Engineers Welfare Association</title>

<!-- Meta -->
<meta name="keywords" content="" />
<meta name="author" content="">
<meta name="robots" content="" />
<meta name="description" content="" />

<?php include 'css_master.php';?>

<style type="text/css">
	.white_bg{

		background-color: white;
	}
</style>

</head>

<body>
<div class="wrapper-boxed">
<div class="site_wrapper">

<?php include 'navbar.php';?>
 
 <div class="clearfix"></div>


<section class="section_category39" style="background: #f0f0f0 !important">
<div class="container">
<div class="row" data-anim-type="zoom-in" data-anim-delay="100">
 <div  class="sec_title" style="margin-top: -40px"><h1>Executive Committee</h1></div>
 <!-- <p class="font-weight-3 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit blandit dui, at iaculis augue aliquet eget.<br>
Ut imperdiet a tortor id posuere. Curabitur laoreet arcu orci, in mollis nisl volutpat ac.</p> -->
 <div class="clearfix"></div>
 </div>
<div class="margin-top2"></div>
<div class="row">

<div class="col-md-12 ">
<div class="white_bg" >
<div class="row" style="margin-left: -30px">

	

	<style type="text/css">
		#members_id{

			background-color: #77bd73 !important;
			height: 220px;
			width: 50px;
			margin-left: 40px;
			margin-top: 29px;
			/*writing-mode: vertical-rl;*/
			
		}

	
	</style>

<?php
$query="select * from tbl_executive order by id ASC";
$result=mysqli_query($connect,$query) or die(mysql_error());
while ($row=mysqli_fetch_array($result)) {
?>
	<div class="col-md-2 col-sm-2" style="margin-top: 29px; margin-left: 30px"><a target="_blank" href="images/committee/<?php echo $row['image'];?>">
    <img src="images/committee/<?php echo $row['image'];?>" class="img-responsive" alt=" " style="width: 200px;height: 210px;">
    </a>
		<div style="margin-left: 25px"><p style="text-align: center;font-weight: bold; font-size: 12px;line-height: normal;"><?php echo $row['name'];?></p><p style="font-size: 12px;text-align: center;margin-top: -15px"><?php echo $row['designation'];?></p></div></div>
        <?php } ?>
        
        
        
        
	


</div>
</div>
</div>





<div class="clearfix"></div>




</div>


<style type="text/css">
	.blog-post:hover{

		background-color: white !important;
	}

	.blog-post{

		background: white !important;
	}

	.img-responsive{

		border: 2px solid gray;
	}
</style>
</div>
</section>


<div class="clearfix"></div>

<?php include 'footer.php';?>

<a href="#" class="scrollup orange2"><i class="fa fa-angle-up"></i></a>

</div></div>



<!-- ========== Js Files ========== --> 
<?php include 'js_master.php';?>

</body>

<!-- Mirrored from codelayers.net/leohunt/corporate/boxed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 11:59:59 GMT -->
</html>