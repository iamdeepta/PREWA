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


</head>

<body>
<div class="wrapper-boxed">
<div class="site_wrapper">

<?php include 'navbar.php';?>
 
 <div class="clearfix"></div>


<section class="section_category39" style="background: #f0f0f0 !important">
<div class="container">
<div class="row" data-anim-type="zoom-in" data-anim-delay="100">
 <div  class="sec_title" style="margin-top: -40px"><h1>Life Members</h1></div>
 <!-- <p class="font-weight-3 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit blandit dui, at iaculis augue aliquet eget.<br>
Ut imperdiet a tortor id posuere. Curabitur laoreet arcu orci, in mollis nisl volutpat ac.</p> -->
 <div class="clearfix"></div>
 </div>
<div class="margin-top2"></div>
<div class="row">

<?php
$query="select * from tbl_member where membership_type=2 order by membership_no ASC";
$result=mysqli_query($connect,$query) or die(mysql_error());
while ($row=mysqli_fetch_array($result)) {
?>
<div class="col-md-12 ">
<div class="blog-post" >
<div class="row">

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


	<div  class="col-md-1">

		<div class="container" id="members_id"><p style="color: black;font-weight: bold;font-size: 25px;margin-top: 120px;-webkit-transform: rotate(270deg);white-space:nowrap;display: block;bottom:0;"><?php echo $row['membership_id'];?></p></div>
		
	</div>

	
	<div class="col-md-3 col-sm-3" style="margin-top: 29px; margin-left: 30px"><a target="_blank" href="images/members/<?php echo $row['image'];?>"><img src="images/members/<?php echo $row['image'];?>" class="img-responsive" alt=" " style="width: 220px;height: 220px;"></a></div>
<div class="col-md-7" style="margin-top: 30px">

	<table>
		
			<tr>
				<td style="width:30%;">Full Name</td>
				<td>&nbsp;:&nbsp;</td>
				<td>&nbsp;<?php echo $row['name'];?></td>	
			</tr>

			<tr>
				<td>Name of Spouse</td>
				<td>&nbsp;:</td>
				<td>&nbsp;<?php echo $row['spouse_name'];?></td>	
			</tr>

			<tr>
				<td>Name of Offspring(s)</td>
				<td>&nbsp;:</td>
				<td>&nbsp;<?php echo $row['offspring_name'];?></td>	
			</tr>

			<tr>
				<td>Date of Birth</td>
				<td>&nbsp;:</td>
				<td>&nbsp;<?php if($row['DOB']=='0000-00-00') echo ''; else echo date('d-m-Y',strtotime($row['DOB']));?></td>	
			</tr>

			<tr>
				<td>Home District</td>
				<td>&nbsp;:</td>
				<td>&nbsp;<?php echo $row['home_district'];?></td>	
			</tr>

			<tr>
				<td>Present Address</td>
				<td>&nbsp;:</td>
				<td>&nbsp;<?php echo $row['present_address'];?></td>	
			</tr>

			<tr>
				<td>Date of Retirement</td>
				<td>&nbsp;:</td>
				<td>&nbsp;<?php if($row['DOR']=='0000-00-00') echo ''; else echo date('d-m-Y',strtotime($row['DOR']));?></td>	
			</tr>

			<tr>
				<td>Position on Retd. Day</td>
				<td>&nbsp;:</td>
				<td>&nbsp;<?php echo $row['position_RD'];?></td>	
			</tr>

			<tr>
				<td>Phone No.</td>
				<td>&nbsp;:</td>
				<td>&nbsp;<?php echo $row['mobile'];?></td>	
			</tr>

			<tr>
				<td>Email</td>
				<td>&nbsp;:</td>
				<td>&nbsp;<?php echo $row['email'];?></td>	
			</tr>

			<tr>
				<td>&nbsp;</td>
			</tr>

			<tr>
				<td><button class="btn btn-primary" id="btn_details">Details</button></td>
				
			</tr>

			<tr>
				<td>&nbsp;</td>
			</tr>
		
	</table>



	<style type="text/css">
		#btn_details{

			background-color: transparent;
			border-color: #e94e4c;
			color: black;
			border: 2px solid #e94e4c;
		}


		#btn_details:hover{

			background-color: #e94e4c;
			border-color: #e94e4c;
			color: white;
			border: 2px solid #e94e4c;
		}

		td{
			color: black;
			font-size: 14px;
		}
	</style>

</div>



</div>
</div>
</div>

<?php } ?>



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

</html>