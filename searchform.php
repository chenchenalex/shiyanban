<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
   
    <img title="搜索你想要的！" src="<?php bloginfo('template_url'); ?>/images/search_07.gif" />
    
       
        <input type="text" id="s" name="s" value="" />
        
        <input title="开始搜索！" type="submit" value="Search" id="searchsubmit" />
        <div class="hot-tagit">
        <h1>热门关键词：</h1>
       
          <?php wp_tag_cloud('unit=px&smallest=12&largest=12&number=8&order=ASC&format=flat'); ?>
         
        </div>
    
</form>