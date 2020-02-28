


<!-- main.js -->
<script src="js/jquery.min.js" type="text/javascript"></script>

<!-- bootstrap js -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
 <!-- add js -->
<script src="js/wow.min.js" type="text/javascript"></script>
<script>
new WOW().init();


     $(window).bind('scroll', function() {
     var navHeight = 0;
       if ($(window).scrollTop() > navHeight) {
         $('.header').addClass('fixed-head fadeInDown animated');
         
       }
       else {
         $('.header').removeClass('fixed-head fadeInDown animated')
    
       }
    });




</script>

<?php

if ($countpage == 0) {
	include 'error_SCR.php';
}




if (file_exists(stream_resolve_include_path($alias . "_SCR.php"))) {include $alias . "_SCR.php";}
?>