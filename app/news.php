
<section class="banner">
	<div class="container">
		<p class="t-banner text-center wow fadeInUp">
			News
		</p>
		<hr class="or-line-140">
	</div>
</section>
<!-- banner heade -->
<section class="homenews">
	<div class="container">
		 <div class="row">
		 	<?php foreach($newslist as $news){ ?>
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
		<div class="pagination-bottom">
             
                     <?php 
$totalpage = ceil($allnews / 5);?>
<?php echo paginate(5,$_GET['page'],$allnews,$totalpage,"/news");?>
                
         </div>
	</div>
</section>