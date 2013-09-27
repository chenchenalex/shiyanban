<?php get_header(); ?>
<div id="huandengpian">
	<?php do_action('slideshow_deploy', '68'); ?>
</div>    

<div class="pages">
    <div class="shadow2"> </div>



<!-- 通知，作业，资料 -->	

	<?php  
       		$loop_cate_id=array(45,50,51); //指定要输出的分类id 
        	$num=4;//指定每次循环输出的文章篇数     
	?>
<div id="shouyewaimian">
        <?php foreach($loop_cate_id as $key=>$value){ ?> 
	<div class="shouye1">
        <div class="shouye1wenzhang" id="box-<?php echo $key; ?>"> 
        	<?php $posts = query_posts($query_string . "&cat={$value}&orderby=date&showposts={$num}" ); ?> 
		<a href="<?php echo get_category_link($value); ?>">
		<?php if($value==45){ ?><img src="http://shiyanban.us/wp-content/pictures/icon/notify.png" class="tubiao"><?php } ?>
		<?php if($value==50){ ?><img src="http://shiyanban.us/wp-content/pictures/icon/homework.png" class="tubiao"><?php } ?>
		<?php if($value==51){ ?><img src="http://shiyanban.us/wp-content/pictures/icon/wangpan.png" class="tubiao"><?php } ?>
		<div class="shouye1fenlei"><?php single_cat_title(); ?></a></div>
		<div class="shouye1suoyou">
		<?php while(have_posts()) : the_post(); ?>
			<div class="shouye1post"><span class="shouye1riqi"><?php the_time('m月d日') ?></span><span class="shouye1biaoti"><a class="jj" href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank"><?php echo mb_strimwidth(get_the_title(), 0, 25,"...") ?></a></span></div> 
<span class="em">
<?php 
$t1=$post->post_date; 
$t2=date("Y-m-d H:i:s"); 
$diff=(strtotime($t2)-strtotime($t1))/3600; 
if($diff<24){echo "New";} 
?>
</span>
		<?php endwhile; ?>
		</div>
		<?php if($value==45){ ?>
			<button type="button" class="button white" onclick=window.open("http://shiyanban.us/?cat=45")>查看全部</button>
		<?php } ?>
		<?php if($value==50){ ?>
			<button type="button" class="button white" onclick=window.open("http://shiyanban.us/zuo-ye-qing-dan/")>查看全部</button>
		<?php } ?>
		<?php if($value==51){ ?>
			<button type="button" class="button white" onclick=window.open("http://shiyanban.us/?cat=51")>查看全部</button>
		<?php } ?>
	</div>
	</div>
	<?php }?> 



<!-- 新闻 -->

	<?php  
  	     	$loop_cate_id=array(57); //指定要输出的分类id 
		$num=4;//指定每次循环输出的文章篇数     
	?>
        <?php foreach($loop_cate_id as $key=>$value){ ?> 
	<div class="shouye2">
        <div class="shouye2wenzhang"> 
        	<?php $posts = query_posts($query_string . "&cat={$value}&orderby=date&showposts={$num}" ); ?> 
		<a href="<?php echo get_category_link($value); ?>">
		<?php if($value==57){ ?><img src="http://shiyanban.us/wp-content/pictures/icon/news.png" class="tubiao"><?php } ?>
		<div class="shouye1fenlei"><?php single_cat_title(); ?></a></div>
		<div class="shouye2suoyou">
		<?php while(have_posts()) : the_post(); ?>

			<div class="shouye2post" style="cursor:pointer;"  onclick="location.href='<?php the_permalink() ?>';">
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><div class="shouye2tupian"><?php the_post_thumbnail(); ?></div></a>
				<div class="shouye2riqi"><?php the_time('m月d日') ?></div>
				<div class="shouye2biaoti"><a class="jj" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></div>
				<div class="shouye2zhaiyao"><a class="jj" href="<?php the_permalink() ?>"><?php echo mb_strimwidth(strip_tags($post->post_content), 0,125,"..."); ?></a></div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
	<?php }?> 



<!-- 商界 -->

	<div class="shouye3">
	<a href="http://shiyanban.us/?cat=70">
	<img src="http://shiyanban.us/wp-content/pictures/icon/business.png" class="tubiao"/>
	<div class="shouye1fenlei">商界</a></div>
	<?php  
  	     	$loop_cate_id=array(70); //指定要输出的分类id 
		$num=3;//指定每次循环输出的文章篇数     
	?>
        <?php foreach($loop_cate_id as $key=>$value){ ?> 
        	<div class="shouye3wenzhang"> 
        		<?php $posts = query_posts($query_string . "&cat={$value}&orderby=date&showposts={$num}" ); ?> 
			<div class="shouye3suoyou">
				<?php while(have_posts()) : the_post(); ?>
					<div class="shouye3meige">
						<a href="<?php the_permalink() ?>" target="_blank">
						<div class="shouye3tupian"><?php the_post_thumbnail(); ?></div>
						<div class="shouye3biaoti"><?php the_title(); ?><span class="shouye3riqi"><?php the_time('m/d') ?></span></div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php }?>
	</div>



<!-- 名师，才子，佳人 -->

	<div class="shouye4">
	<a href="http://shiyanban.us/category/xiangce/">
	<img src="http://shiyanban.us/wp-content/pictures/icon/photos.png" class="tubiao"/>
	<div class="shouye1fenlei">相册</a><button type="button" class="button2 white" onclick=window.open("http://shiyanban.us/?cat=54")>佳人</button>  <button type="button" class="button2 white" onclick=window.open("http://shiyanban.us/?cat=55")>才子</button> <button type="button" class="button2 white" onclick=window.open("http://shiyanban.us/?cat=53")>名师</button><button type="button" class="button2 white" onclick=window.open("http://shiyanban.us/?cat=72")>班会 / 活动</button></div>
	<?php  
  	     	$loop_cate_id=array(53,55,54); //指定要输出的分类id 
		$num=12;//指定每次循环输出的文章篇数     
	?>
        <?php foreach($loop_cate_id as $key=>$value){ ?> 
        	<div class="shouye4wenzhang" id="box-<?php echo $key; ?>"> 
        		<?php $posts = query_posts($query_string . "&cat={$value}&orderby=date&showposts={$num}" ); ?> 
			<div class="shouye4suoyou">
			<?php while(have_posts()) : the_post(); ?>
				<div class="shouye4post">
					<div class="shouye4tupian"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank"><?php the_post_thumbnail(); ?></a></div>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
	<?php }?>
	</div>

</div>


</div>
</div></div>
<?php get_footer(); ?>