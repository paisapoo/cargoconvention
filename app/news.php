<?php 
if ($_GET['page']==''){$_GET['page']=1;}
	$page = ($_GET['page']-1)*8;
	$newslist = $database->select("news","*",["ORDER"=>["date_time"=>"DESC"],"status"=>"y","LIMIT"=>[$page,8]]);
	$allnews = $database->count("news","*",["status"=>"y"]);
?>
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
				  <img src="<?=$news['image']?>" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="news-date"><?=$formattime?></p>
				    <p class="news-title"><?=$news['title']?>
</p>
				    <p class="news-conent"><?php echo substr(preg_replace("/<(.*?)>/", "", $news['content']),0,200)."...";?></p></p>
				    <p class="read-m">read more  <img src="images/icon/home-icons/blue-arrow.svg" class="expl-arrow"/></p>
				  </div>
				</div>
				</a>
		 	</div>
		 <?php } ?>
		<?=$r."879" ?>
		 </div>
		 <!-- row -->
		<div class="pagination-bottom">
             
                     <?php 
$totalpage = ceil($allnews / 5);?>
<?php echo paginate(5,$_GET['page'],$allnews,$totalpage,"/news");?>
                
         </div>
	</div>
</section>