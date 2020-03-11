<?php

 include "header.php";
 include "sidebar.php";
 ?>
 <div class="content-inner-all">
 	<?php
 include "navbar.php";


	
	$countpage = 0;
if (file_exists(stream_resolve_include_path($alias . ".php"))) {$countpage .= +1;include $alias . ".php";

    
}
   

if ($countpage == 0 or empty($countpage) ) {
	?>
	<h1>Error1</h1>
	
   <?php }
?>
		</div>
		<!-- content-inner-all -->
			<?php

 include "footer.php";
 ?>
			
    
      