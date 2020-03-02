<section class="banner">
	<div class="container">
		<p class="t-banner text-center wow fadeInUp">
			Online Registration
		</p>
		<hr class="or-line-140">
	</div>
</section>
<!-- banner heade -->
<div class="form-steps">
	<div class="container">
		<div class="w-80">
			<form id="msform">
  <!-- progressbar -->
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-circle btn-active-form">1</a>
        <p>select plan</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle disabled" >2</a>
        <p>sponsorship</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle disabled" >3</a>
        <p>personal info</p>
      </div>
         <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle disabled">4</a>
        <p>company info</p>
      </div>
         <div class="stepwizard-step">
        <a href="#step-5" type="button" class="btn btn-default btn-circle disabled" >5</a>
        <p>submit</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="post">
  	<?php include "book_step1.php" ;?>
    <?php include "book_step2.php" ;?>
    <?php include "book_step3.php" ;?>
    <?php include "book_step4.php" ;?>
    <?php include "book_step5.php" ;?>
  </form>
			
		</div>
	</div>	
</div>