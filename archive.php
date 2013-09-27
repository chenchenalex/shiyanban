<?php get_header(); ?>


<div class="pages">
    <div class="shadow2"> </div>
    <div class="page-a">
        
      <div class="page_chao"></div>   
     <div class="page_fl"><h1>标签分类</h1>
      <div class="tagit"> <?php wp_tag_cloud('unit=px&smallest=12&largest=12&number=10&order=ASC&format=flat'); ?></div>
     <div class="page_fenge"></div>
       <p class="seasd">
       
                 <?php if (have_posts()) : ?>
      
 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				分类浏览:<?php single_cat_title(); ?>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				分类浏览：<?php single_tag_title(); ?>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

			<?php } ?>

			
           <?php endif; ?>
       
       </p>
     </div>



<div class="recommend2">
           <ul class="recom-list2" id="content">
      <?php if( $posts ) : ?>     
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>       

             <li class="post">
             <div id="post_hover">
             <h1><a  href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            <div class="post_wen">
            <p> <?php the_time('y-m-d') ?></p>
            <p><?php echo mb_strimwidth(strip_tags($post->post_content), 0,220,"..."); ?></p>
            </div>
             <a  class="post_buttn"href="<?php the_permalink() ?>" ><img src="<?php bloginfo('template_url'); ?>/images/buttn_03.jpg" /></a>
             </div>
              <a class="tu_post" href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?</a> 

               <h1><a class="jj" href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 25,"...") ?></a></h1>
                <p> <?php the_time('y-m-d') ?></p>

             </li>

       <?php endforeach; ?>
    
    <?php else : ?>
               
      <?php endif; ?>       
   </ul>
   
   <div class="rightmain">
    <?php include_once("sidebar.php"); ?>
     <div title="下一页" class="sideba_next widget ">
     <?php next_posts_link(__('LOAD MORE')); ?>
     </div>
      <div class="sigokg hh1"><p>点击关闭</p></div>
    </div>
   <div class="sigokg hh2"> <p>点击打开小工具</p></div>
</div>

 

 <div id="pager">   <?php par_pagenavi(); ?>  </div>

</div>	
      
    </div>

<?php get_footer(); ?>