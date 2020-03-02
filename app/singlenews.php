<section class="banner">
	<div class="container">
		<p class="t-banner text-center wow fadeInUp">
			News
		</p>
		<hr class="or-line-140">
	</div>
</section>
<!-- banner heade -->
<section class="sec-content news">
	<div class="container">
		<div class="w-80">
			<img src="<?=$news['image']?>" class="news-img">
			<div class="row">
				<div class="col-md-6">
			
		 		<?php $date = new DateTime($news['date_time']);
				echo $date->format('dS F Y');?>
				</div>
				<div class="col-md-6">
					<ul class="list-inline share-social">
						<li class="list-inline-item">share</li>
						  <li class="list-inline-item"><img src="images/icon/social-icons/soc_f.svg"></li>
						  <li class="list-inline-item"><img src="images/icon/social-icons/soc_in.svg"></li>
						  <li class="list-inline-item"><img src="images/icon/social-icons/soc_t.svg"></li>
						</ul>
				</div>
			</div>
			<p class="t-title t-28 c-org"><?=$news['title']?></p>
			<div class="news-content">
				<?=$news['content']?>
			</div>
		</div>
	</div>
</section>

<section class="homenews">
	<div class="container">
		 <div class="row">
		 	<?php foreach($right_news as $news){ ?>
		 		<?php $date = new DateTime($news['date_time']);
				$formattime= $date->format('dS F Y');?>
		 	<div class="col-md-3">
		 		<a href="singlenews?id=<?=$news['id']?>" class="link-news">
		 		<div class="card">
		 		<div class="news-flame">
				  <img src="<?=$news['image']?>" class="card-img-top" alt="...">
				  </div>
				  <div class="card-body">
				    <p class="news-date"><?=$formattime?></p>
				    <p class="news-title"><?=$news['title']?>
</p>
				    <div class="news-conent"><?php echo preg_replace("/<(.*?)>/", "", $news['content']);?></div>
				    <p class="read-m">read more  <img src="images/icon/home-icons/blue-arrow.svg" class="expl-arrow"/></p>
				  </div>
				</div>
				</a>
		 	</div>
		 <?php } ?>
		
		 </div>
		 <!-- row -->
		
	</div>
 
</section>