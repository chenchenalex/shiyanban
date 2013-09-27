<?php get_header(); ?>
<div class="pages">
    <div class="shadow2"> </div>
   
      
     <div class="page_fl"><h1>标签分类</h1>
      <div class="tagit"> <?php wp_tag_cloud('unit=px&smallest=12&largest=12&number=10&order=ASC&format=flat'); ?></div>
     <div class="page_fenge"></div>  
     </div>

<!-- 分类图标、标题及描述 -->

<div class="page_title" >
<div class="subtitle">
<?php if(is_category(array('概况','实验班项目'))) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/overview.png" class="tubiao"/><?php } ?>

<?php if(is_category(array('课程','作业'))) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/homework.png" class="tubiao"/><?php } ?>

<?php if(is_category(array('新闻','实验班新闻','校园新闻'))) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/news.png" class="tubiao"/><?php } ?>

<?php if(is_category(array('相册','活动'))) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/photos.png" class="tubiao"/><?php } ?>

<?php if(is_category('名师')) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/teachers.png" class="tubiao"/><?php } ?>

<?php if(is_category('才子')) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/boys.png" class="tubiao"/><?php } ?>

<?php if(is_category('佳人')) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/girls.png" class="tubiao"/><?php } ?>

<?php if(is_category('更多')) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/more.png" class="tubiao"/><?php } ?>

<?php if(is_category('通知')) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/notify.png" class="tubiao"/><?php } ?>

<?php if(is_category('网盘')) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/wangpan.png" class="tubiao"/><?php } ?>

<?php if(is_category('商界')) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/business.png" class="tubiao"/><?php } ?>

<?php if(is_category('图书馆')) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/library.png" class="tubiao"/><?php } ?>

<?php if(is_category('关于本站')) { ?><img class="fenlei_tupian" src="http://shiyanban.us/wp-content/pictures/icon/about.png" class="tubiao"/><?php } ?>



<div class="fenleifenlei"><?php echo single_cat_title(); ?></a><span class="fenleimiaoshu"><?php echo category_description($cat); ?></span></div>
</div>
</div>

 <div class="page-b">

<!-- 分类内容 -->

<?php if(is_category(array('名师','才子','佳人','活动','相册','课程','网盘'))) : ?>

<div class="recommend2" id="recommend3">

	<ul class="recom-list2" id="content">

		<?php if( $posts ) : ?>     

		<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>       

			 <li class="post">

<!--
			<div id="post_hover">
				<h1><a  href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<div class="post_wen">
					<p> <?php the_time('y-m-d') ?></p>
					<p><?php echo mb_strimwidth(strip_tags($post->post_content), 0,220,"..."); ?></p>
				</div>
             			<a  class="post_buttn"href="<?php the_permalink() ?>" ><img src="<?php bloginfo('template_url'); ?>/images/buttn_03.jpg" /></a>
			</div>
-->

			<a class="tu_post" href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>             
			<h1><a class="jj" href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 25,"...") ?></a></h1>
             		</li>

		<?php endforeach; ?>

		<?php else : ?>

		<?php endif; ?>       

	</ul>

 	<div id="pager"><?php par_pagenavi(); ?></div>

</div>

<?php elseif(is_category('商界')) : ?>

<div class="recommend2" id="recommend5">

	<ul class="recom-list2" id="contentshangjie">

		<?php if( $posts ) : ?>     

		<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

			<div class="shangjiemeige">

				<a href="<?php the_permalink() ?>">

				<div class="shangjietupian"><?php the_post_thumbnail(); ?></div>

				<div class="shouye3biaoti"><?php the_title(); ?><span class="shouye3riqi"><?php the_time('m/d') ?></span></div>

				</a>

			</div>

		<?php endforeach; ?>

		<?php else : ?>

		<?php endif; ?>       

	</ul>

 	<div id="pagershangjie">
		<?php 
			$haiyouma=get_category($cat)->count;
			if(  $haiyouma <= 12 ) { 
		?>
			<div class="nomorewenzhang">没有更多结果了</div>
		<?php } ?>
	<?php par_pagenavi(); ?></div>

</div>

<!--               更多              -->
<?php elseif(is_category('更多')) : ?>
<div class="recommend2"  id="recommend4">
	<div class="gengduo" style="cursor:pointer;" onclick="location.href='http://shiyanban.us/?cat=45';">
		<img class="gengduotupian" src="http://shiyanban.us/wp-content/pictures/icon/notify.png" class="tubiao"/>
		<p class="gengduowenzi">通知</p>
	</div>
	<div class="gengduo" style="cursor:pointer;" onclick="location.href='http://shiyanban.us/?cat=50';">
		<img class="gengduotupian" src="http://shiyanban.us/wp-content/pictures/icon/homework.png" class="tubiao"/>
		<p class="gengduowenzi">作业</p>
	</div>
	<div class="gengduo" style="cursor:pointer;" onclick="location.href='http://shiyanban.us/?cat=51';">
		<img class="gengduotupian" src="http://shiyanban.us/wp-content/pictures/icon/wangpan.png" class="tubiao"/>
		<p class="gengduowenzi">网盘</p>
	</div>
	<div class="gengduo" style="cursor:pointer;" onclick="location.href='http://shiyanban.us/?cat=70';">
		<img class="gengduotupian" src="http://shiyanban.us/wp-content/pictures/icon/business.png" class="tubiao"/>
		<p class="gengduowenzi">商界</p>
	</div>
	<div class="gengduo" style="cursor:pointer;" onclick="location.href='http://shiyanban.us/?cat=66';">
		<img class="gengduotupian" src="http://shiyanban.us/wp-content/pictures/icon/library.png" class="tubiao"/>
		<p class="gengduowenzi">图书馆</p>
	</div>
	<div class="gengduo" style="cursor:pointer;" onclick="location.href='http://shiyanban.us/?cat=73';">
		<img class="gengduotupian" src="http://shiyanban.us/wp-content/pictures/icon/about.png" class="tubiao"/>
		<p class="gengduowenzi">关于本站</p>
	</div>

</div>
<div id="gengduofengexian"></div>
<?php else : ?>

<div class="fenlei_enter" >

	<!-- a href="http://shiyanban.us/category/fuwu/shangjie/" -->

	<ul class="recom-list2" id="content">

		<?php if( $posts ) : ?>     

		<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>



			<div class="fenleipost" style="cursor:pointer;" onclick="location.href='<?php the_permalink() ?>';">

				<div class="shouye2tupian"><?php the_post_thumbnail(); ?></div>

				<div class="shouye2riqi"><?php the_time('m月d日') ?></div>

				<div class="shouye2biaoti"><a class="jj" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></div>

				<div class="shouye2zhaiyao"><a class="jj" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php echo mb_strimwidth(strip_tags($post->post_content), 0,130,"..."); ?></a></div>

			</div>



		<?php endforeach; ?>

		<?php else : ?>

		<?php endif; ?>       

	</ul>

 	<div id="pager">
		
		<?php 
			$haiyouma=get_category($cat)->count;
			if(  $haiyouma <= 12 ) { 
		?>
			<div class="nomorewenzhang">没有更多结果了</div>
		<?php } ?>
		<?php par_pagenavi(); ?>

	</div>

</div>


<?php endif; ?>    

      

    </div>

</div>

</div></div>



<?php get_footer(); ?>