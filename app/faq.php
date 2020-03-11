
<section class="banner">
	<div class="container">
		<p class="t-banner text-center wow fadeInUp">
			FAQ
		</p>
		<hr class="or-line">
	</div>
</section>
<!-- banner heade -->
<section class="faq">
	<div class="container">
		<p class="t-40 c-blue t-title text-center">Frequently Asked Questions</p>
		<hr class="or-line">
		<div class="w-80">
		<div class="accordion" id="accordionExample">
<?php 
$i = 1;

foreach(json_decode($faqs['detail']) as $key => $faq ){?>
		  <div class="card">
		    <div class="card-header" data-toggle="collapse" data-target="#collapse<?=$i?>" aria-expanded="<?=$i==1?'true':'false'?>" aria-controls="collapse<?=$i?>">
		          <img src="images/icon/faq-icons/blue-arrow.svg" class="faq-arrow-up"> <?=$key?>
		    </div>
		    <div id="collapse<?=$i?>" class="collapse <?=$i==1?'show':''?>" data-parent="#accordionExample">
		      <div class="card-body">
		       <?=$faq?>
		      </div>
		    </div>
		  </div>
		 
<?php $i++; }?>

		</div>	
		</div>
	</div>
</section>
<script>
	$("#accordionExample .card .card-header").click(function (){
			$('#accordionExample .card .card-header').find(".faq-arrow-up").css({
				'transform':'none'
			});
	});
	$("#accordionExample .card .card-header").each(function (){
		
		var $this = $(this);
		var first = $this.attr("aria-expanded");
		if(first == 'true'){
			$this.find(".faq-arrow-up").css({
				'transform':'rotate(-180deg)'
			})  
		}
		$this.click(function (){
			var status = $this.attr("aria-expanded");
		
			if(status =='true'){
			$this.find(".faq-arrow-up").css({
				'transform':'none'
			})
		}
			else{
			$this.find(".faq-arrow-up").css({
				'transform':'rotate(-180deg)'
			})  
		}
		})

	})
</script>