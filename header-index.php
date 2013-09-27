<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
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
		      elseif (!(is_404()) && (is_single())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo '没有找到您的信息 - '; }
		      if (is_home()) {
		          echo ' - '; bloginfo('description'); }
		      else {
		          }
				  if (is_page()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
          
	</title>
	
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" />
	
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

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?11UdVSGGT3N2oc4LdLBhov6BE3RfUAjB';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
    
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="header">
        <div class="header_in">
			<h1 class="logo" title="<?php bloginfo('name'); ?>"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo.gif" alt="<?php bloginfo('name'); ?>" /></a></h1>
			<div class="seach" title="输入关键词按enter键搜索">
            
                   <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
                      
                           <input type="text" id="s" name="s"  onfocus="if (value =='Search...'){value =''}" onblur="if (value ==''){value='Search...'}" value="Search..."  />      
                       
                    </form>
                    
            </div>
           
        </div>
       
		</div>
        
  <div class="nav">
  
     <div class="nav_in">
          <ul class="nav_list">
              <li><a class="list-block" href="<?php echo get_option('home'); ?>" title="首页-随心看看"><img src="<?php bloginfo('template_url'); ?>/images/nav_12.gif" alt="首页-随心看看" /></a></li>
              <li><a class="list-block" href="<?php 
                      $name = 'about'; //page别名
                      global $wpdb;
                      $page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name'");
                      echo get_page_link( $page_id );?>" title="关于Fingerea"><img src="<?php bloginfo('template_url'); ?>/images/nav_13.gif" alt="关于Fingerea" /></a></li>
              <li><a class="list-block" href="  <?php
              $cat=get_category_by_slug('all'); //获取分类别名为 wordpress 的分类数据
			
          echo get_category_link( $cat );?> " title="分类查看-发现心动"><img src="<?php bloginfo('template_url'); ?>/images/nav_14.gif" alt="分类查看-发现心动" /></a></li>
              <li ><a id="list" class="list-block" href="#" title="点击提交心愿"><img src="<?php bloginfo('template_url'); ?>/images/nav_15.gif" alt="提交心愿" /></a>
                  <div class="list-up">
                   <div class="close"> <img src="<?php bloginfo('template_url'); ?>/images/close.gif" /></div>
                      <div class="list-text">
                         <img src="<?php bloginfo('template_url'); ?>/images/list-up_06.gif" />
                          <p>找不到想要的宝贝？在这里填写心愿单，
                             我们将在第一时间帮您找到您想要的宝贝
                             请填写您的姓名联系方式和您想要购买的商品名称以及简单描述。
                          </p>
                      </div>
                      <div class="list-form">
                        
                         <?php include_once("index-comments.php");?>
                      </div> 
                  </div>
                  
                  
              
              
              </li>
           <li ><a id="list" class="list-block" href="<?php 
                      $name = 'Recharge'; //page别名
                      global $wpdb;
                      $page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name'");
                      echo get_page_link( $page_id );?>" title="代理充值"><img src="<?php bloginfo('template_url'); ?>/images/nav_14.jpg" alt="代理充值" /></a> </li>
          </ul>
     <div class="contct">
           <div class="tel" title="联系电话"><a>1-519-933-0318（加拿大）</a></div>
           <div class="mail" title="发送邮件"><a href="Mailto:info@jipage.com">info@jipage.com</a></div>
           
           
     </div>
     
     </div>
    
  
  </div>