<?php include 'connection.php'; ?>

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





<section class="section_category39" style="background: #f0f0f0 !important">

<div class="container">

<div class="row" data-anim-type="zoom-in" data-anim-delay="100">

 <div  class="sec_title" style="margin-top: -40px"><h1>Expired Members</h1></div>


 <div class="clearfix"></div>

 </div>



 



<div class="margin-top2"></div>



<div class="row" style="background-color: white;padding: 25px;border-radius: 6px">



<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
    <tr>
      <th class="th-sm" style="width: 10%">SL.
      </th>
      <th class="th-sm" style="width: 28%">Name
      </th>
      <th class="th-sm" style="width: 30%">Designation
      </th>
      <th class="th-sm" style="width: 20%">Date of Expired
      </th>
    </tr>
  </thead>


  <tbody>



    <?php 

    $sl=0;

$query="select * from tbl_expired order by order_id ASC";
$result=mysqli_query($connect,$query) or die(mysql_error());
while ($row=mysqli_fetch_array($result)) {
      $sl++;
      ?>

    <tr>

      <td><?=$sl?></td>

      <td>Late <?php echo $row['name'];?></td>

      <td><?php echo $row['designation'];?></td>

      <td><?php echo $row['expired_date'];?></td>

    </tr>
<?php } ?>


    



  <?php //}?>

  </tbody>



            </table>



        </div>







 <!--<script type="text/javascript">



  $(document).ready(function () {



  $('#dtBasicExample').DataTable();



  $('.dataTables_length').addClass('bs-select');



});







</script> -->







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