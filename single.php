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
           <div class="single_enter" >

           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>    

      <div class="entrt">
        <h1><?php the_title(); ?></h1>
         <div class="infoofwenzhang"><?php the_time('y-m-d') ?> / <?php the_author(); ?> / <?php if(function_exists('the_views')) {the_views();} ?></div>
          <?php the_content(); ?>            

            <?php endwhile; ?>     
	        <?php else : ?>
            <?php  endif; ?>  
<div id="wumiiDisplayDiv"></div> 
                
     <div class="liuyan">
     
<?php comments_template(); ?>
     </div>       
      
   </div>
   </div>
   <div class="rightmain">
    <?php include_once("sidebar.php"); ?>

     <div title="下一页" class="sideba_next widget ">
     <?php next_posts_link(__('LOAD MORE')); ?>
     </div>
      <div class="sigokg hh1"><p>点击关闭</p></div>
    </div>
   <div class="sigokg hh2"> <p>点击打开小工具</p></div>
</div>


</div>	
      
    </div>

<?php get_footer(); ?>