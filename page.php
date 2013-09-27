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
           
           <div class="single_tit">
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>    
         
		 <div class="single_img">
        
		 <?php the_post_thumbnail('medium'); ?>
         </div>
         
         <div class="single_title">
         <h1><?php the_title(); ?></h1>
         <p>发表时间：<?php the_time('m-d-y') ?></p>
         <p>作者：<?php the_author(); ?></p>
         <p>摘要：<?php echo mb_strimwidth(strip_tags($post->post_content), 0,220,"..."); ?></p>
         </div>
        
     
        
          
           </div>
      <div class="entrt">
        
          <?php the_content(); ?>
            <br />
                 <br />
                 <p>本文链接地址：<a href="<?php the_permalink() ?>"><?php the_permalink() ?></a> 转载请保留此地址</p>
                 <br />
            
        <!-- JiaThis Button BEGIN -->
<div id="ckepop">
	<span class="jiathis_txt">分享到：</span>
	<a class="jiathis_button_tools_1"></a>
	<a class="jiathis_button_tools_2"></a>
	<a class="jiathis_button_tools_3"></a>
	<a class="jiathis_button_tools_4"></a>
	<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
	<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1344266415981850" charset="utf-8"></script>
<!-- JiaThis Button END -->
        </div>
      
         <div class="praenav">    
<div class="alignleft"><p><?php if (get_next_post()) { next_post_link('上一篇: %link','%title',true);} else { echo "没有了，已经是最新文章";} ?></p>  </div>
<div class="alignright"><p><?php if (get_previous_post()) { previous_post_link('下一篇: %link','%title',true);} else { echo "没有了，已经是最后文章";} ?> </p>  </div>
</div>    
            <?php endwhile; ?>     
	        <?php else : ?>
            <?php  endif; ?>  
            
     <div class="liuyan">
     
<?php comments_template(); ?>
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

 

 <div id="pager">   <?php par_pagenavi(); ?>  </div>

</div>	
      
    </div>

<?php get_footer(); ?>
