<?php get_header(); ?>


<div class="pages">
    <div class="shadow2"> </div>
    <div class="page-a">
        
      <div class="page_chao"></div>   
     <div class="page_fl"><h1>标签分类</h1>
      <div class="tagit"> <?php wp_tag_cloud('unit=px&smallest=12&largest=12&number=10&order=ASC&format=flat'); ?></div>
     <div class="page_fenge"></div>
     
     </div>



<div class="recommend2">
 <div class="notfond">
 <h3>抱歉，貌似没有找到您要找的信息哦~，请返回首页或者看看下面为您推荐的。</h3>
 <a href="<?php echo get_option('home'); ?>">返回首页>></a>
 </div>
   
           <ul class="recom-list2" id="content">
    
    

    

 <?php $posts = get_posts( "category=$cat->term_id&numberposts=12&orderby=rand" ); ?>
<?php if( $posts ) : ?>     
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
 

             <li class="post">
             <div id="post_hover">
             <h1><a  href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            <div class="post_wen">
            <p> <?php the_time('m-d-y') ?></p>
            <p><?php echo mb_strimwidth(strip_tags($post->post_content), 0,220,"..."); ?></p>
            </div>
             <a  class="post_buttn"href="<?php the_permalink() ?>" ><img src="<?php bloginfo('template_url'); ?>/images/buttn_03.jpg" /></a>
             </div>
              <a class="tu_post" href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a> 
               <h1><a class="jj" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                <p> <?php the_time('m-d-y') ?></p>
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
