<script type="text/javascript" src="js/universal/jquery.js"></script> 
<script src="js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/mainmenu/customeUI.js"></script> 
<script src="js/mainmenu/jquery.sticky.js"></script> 
<script src="js/masterslider/masterslider.min.js"></script> 

<script type="text/javascript" src="js/ytplayer/jquery.mb.YTPlayer.js"></script> 
<script type="text/javascript" src="js/ytplayer/elementvideo-custom.js"></script> 
<script type="text/javascript" src="js/ytplayer/play-pause-btn.js"></script>
<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="js/cubeportfolio/main.js"></script> 
<script src="js/animations/js/animations.min.js" type="text/javascript"></script> 
<script src="js/animations/js/appear.min.js" type="text/javascript"></script> 
<script src="js/scrolltotop/totop.js"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script> 
<script src="js/owl-carousel/custom.js"></script> 
<script src="js/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> 
<script type="text/javascript" src="js/simplelightbox/simple-lightbox.js"></script>

<script src="js/style-swicher/style-swicher.js"></script> 
<script src="js/style-swicher/custom.js"></script> 
<script src="js/scripts/functions.js" type="text/javascript"></script>


<script type="text/javascript" src="js/smart-forms/jquery.form.min.js"></script> 
<script type="text/javascript" src="js/smart-forms/jquery.validate.min.js"></script> 
<script type="text/javascript" src="js/smart-forms/additional-methods.min.js"></script> 
<script type="text/javascript" src="js/smart-forms/smart-form.js"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="js/gmaps/jquery.gmap.js"></script> 
<script type="text/javascript" src="js/gmaps/examples.js"></script>


<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="js/addons/datatables.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>



<script>


/*var header = document.getElementById("nav_menu");
var btns = header.getElementsByClassName("dropdown");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}*/


	/*$(document).ready(function(){


		$('#nav_menu .dropdown').on('click', function() {
			$('#nav_menu .dropdown').removeClass('active');
			  $(this).addClass('active');
			});

			function loadXMLDoc(x){

			}

	});*/


  $(function(){
    $('#nav_menu a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
    $('#nav_menu a').click(function(){
      $(this).parent().addClass('active').siblings().removeClass('active')  
    })
  })



</script>