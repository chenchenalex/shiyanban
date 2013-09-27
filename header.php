<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">


<meta name="viewport" content="width=device-width, initial-scale=1" />	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="keywords" content="
    <?php
    // 如果是首页和文章列表页面
	if(is_front_page() || is_home()) { 
	echo get_option('mytheme_keywords');
 
	// 如果是文章详细页面和独立页面
		} else if( is_page()) {

		echo   get_option('mytheme_keywords');
	
 
	} else if(is_single()) {
	
	$tags = wp_get_post_tags($post->ID);
if($post->post_excerpt) {
		echo  $post->post_excerpt;
	
foreach ($tags as $tag ) {

echo $keywords . $tag->name . ",";
}}


	
	// 如果是类目页面, 显示类目表述
	} else if(is_category()) {

	echo get_option('mytheme_keywords');
	
 
	// 如果是搜索页面, 显示搜索表述
	} else if(is_search()) {
		echo get_option('mytheme_keywords');
 
	// 如果是标签页面, 显示标签表述
	} else if(is_tag()) {
		echo get_option('mytheme_keywords');
 
	// 如果是日期页面, 显示日期范围描述
	} else if(is_date()) {
	echo get_option('mytheme_keywords');
 
	// 其他页面显示博客标题
	} else {
		echo get_option('mytheme_keywords');
	}
?>
    
    
    
    
    
    " />
 
<meta name="description" content="

<?php
	

		
 // 如果是首页和文章列表页面
	if(is_front_page() || is_home()) { 
	echo get_option('mytheme_description');
 
	// 如果是文章详细页面和独立页面
	} else if(is_single() ) {
		
	
		echo  substr(strip_tags($post->post_content), 0, 420);
	
	
	
	// 如果是类目页面, 显示类目表述
	} else if(is_category()) {

		echo   get_option('mytheme_description');
	
 
	// 如果是搜索页面, 显示搜索表述
	} else if(is_search()) {
		echo   get_option('mytheme_description');
 
	// 如果是标签页面, 显示标签表述
	} else if(is_tag()) {
		echo   get_option('mytheme_description');
 
	// 如果是日期页面, 显示日期范围描述
	} else if(is_date()) {
	echo   get_option('mytheme_description');
 
	// 其他页面显示博客标题
	} else {
		echo   get_option('mytheme_description');
	}
?>




" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("找到标签  &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo '  - '; }
		      elseif (is_search()) {
		         echo '找到信息 &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo '没有找到您的信息 - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged;echo ' - '; bloginfo('description'); }
		   ?>
          
	</title>
	
		<link rel="shortcut icon" href="http://shiyanban.us/favicon.ico" />
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
      
       <?php
if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 8.0")){
echo '<link rel="stylesheet" href="';echo bloginfo('template_url'); echo'/css/ie.css" type="text/css" /> ';

}// 这里可以写其他的执行命令
else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 7.0")){
echo '<link rel="stylesheet"  href="';echo bloginfo('template_url'); echo'/css/ie.css" type="text/css" /> ';

}

else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 6.0")){
echo '<link rel="stylesheet"  href="';echo bloginfo('template_url'); echo'/css/ie.css" type="text/css" /> ';

}


else {

echo '<link rel="stylesheet" media="screen and (min-width:100px) and (max-device-width:1920px)" href="';echo bloginfo('template_url'); echo'/css/ie_midea.css" type="text/css" /> ';



}
?>
      
      
      
	  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.lazyload.js"></script>
     <script src="<?php bloginfo('template_url'); ?>/png/pngtm.js" type="text/javascript"></script>
   
    <script type="text/javascript">
 DD_belatedPNG.fix('div, ul, img, li, input , a, h3');

$(function() {
$("img.wp-post-image").lazyload({
	placeholder : "<? bloginfo('template_url'); ?>/images/grey.gif", 
effect : "fadeIn"
}); 
});

</script>


	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="header">

        <div class="header_in">
			<h1 class="logo" title="<?php bloginfo('name'); ?>"><a href="<?php echo get_option('home'); ?>/">
            <?php if (get_option('mytheme_logo')!=""): ?>

 <img src="<?php echo get_option('mytheme_logo'); ?>"alt="<?php bloginfo('name'); ?>" /> 
      
       <?php else : ?>
       
 <img src="http://shiyanban.us/wp-content/pictures/icon/logo_alex.png"alt="<?php bloginfo('name'); ?> "/>
       
         <?php endif; ?>  
         
            </a></h1>
	<div id="tianqiheader"><script type="text/javascript" src="http://ext.weather.com.cn/42729.js"></script></div>			
            <div id="navigation">
             <?php wp_nav_menu(array( 'theme_location' => 'header-menu' ) ); ?>
            <div class="navkg2">收起导航；︿ </div>
            </div>
       <div class="navkg"> 打开导航﹀</div>
            
            
            
          
          <div class="shadow"></div> 

        </div>
       
		</div>

</div>