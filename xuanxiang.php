<?php
/*添加主题选项*/
add_action('admin_menu', 'mytheme_page');
 
function mytheme_page (){
 
	if ( count($_POST) > 0 && isset($_POST['mytheme_settings']) ){
 
		$options = array (
		'keywords',
		'description',
		'analytics',
		
		'about_title',
		'about_cititle',
		
		'about_title1',
		'about_cititle1',
		
		'about_title2',
		'about_cititle2',
		
		'news_title',
		'news_cititle',
		
		'case_title',
		'case_cititle',
		
		'lx_title',
		'lx_cititle',
		
		'xianshi',

		'xiangce_bimg',
		'xiangce_img',
		'xiangce_url',
		'xiangce_tit',
		'xiangce_text',
		
		'about_img1',
		'about_url1',
		'about_tit1',
		'about_text1',
		
		'about_img2',
		'about_url2',
		'about_tit2',
		'about_text2',
		
		'about_img3',
		'about_url3',
		'about_tit3',
		'about_text3',
		
		'about_img4',
		'about_url4',
		'about_tit4',
		'about_text4',
		
		'about_img5',
		'about_url5',
		'about_tit5',
		'about_text5',
		
		'about_img6',
		'about_url6',
		'about_tit6',
		'about_entit6',
		'about_text6',
		
		'about_img7',
		'about_url7',
		'about_tit7',
	    'about_entit7',
		'about_text7',
		
		'about_img8',
		'about_url8',
		'about_tit8',
		 'about_entit8',
		'about_text8',
		
		'about_img9',
		'about_url9',
		'about_tit9',
		 'about_entit9',
		'about_text9',
		
		'about_img0',
		'about_url0',
		'about_tit0',
		 'about_entit0',
		'about_text0',
		
		'beian',
		'dizhi',
		'tell',
		'fax',
		'mail',
		'qq',
		
	
	   	
	     'ditu_tit',
		'ditu_cont',
		'ditu_zuob',
	
		'ditu_zuob3',
		
		'logo',
	
		'ad_img',
		'ad_title',
		'ad_text',
		
		);
 
		foreach ( $options as $opt ){
 
			delete_option ( 'mytheme_'.$opt, $_POST[$opt] );
 
			add_option ( 'mytheme_'.$opt, $_POST[$opt] );	
 
		}
 
	}
 
	add_theme_page(__('主题选项'), __('主题选项'), 'edit_themes', basename(__FILE__), 'mytheme_settings');
 
}
 //加载upload.js文件   
            
            //加载上传图片的js(wp自带)   
            wp_enqueue_script('thickbox');   
            //加载css(wp自带)   
            wp_enqueue_style('thickbox');  
 
function mytheme_settings(){?>
 
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/xuanxiang.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/upload.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.3.1.js"></script> 
     <script type="text/javascript">
// 收缩展开效果
$(document).ready(function(){

	$(".box h1").click(function(){
		$(this).next(".text").slideToggle("slow");
	})

	
});

$(document).ready(function(){

	$(".jiao_div h2").click(function(){
		$(this).nextAll("li").slideToggle("slow");
	})

	
});
</script>	
<div class="wrap">
 
<h2>主题选项</h2>
 <p>主题名称:响应式格子主题<br/>
主题版本：1.01<br/>
本主题由web主题公园倾力打造，感谢您使用web主题公园的主题，更多主题请访问：<a href="http://www.themepark.com.cn">http://www.themepark.com.cn</a><br/>
BUG提交，请进入web主题公园网站，在相关主题下留言即可，我们收到留言即将对bug进行评估并更新，感谢您的支持!<br />
希望你能喜欢。
</p>
 
 <ul>
 <form method="post" action="">
 <li class="box"> <h1>首选项</h1>
 <div class="text" style="display:none">

 
	<fieldset>
 
	<legend><strong>LOGO的图片地址</strong></legend>
 
              
         
				<div class="up">
           <input type="text" size="80"  name="logo" id="logo" value="<?php echo get_option('mytheme_logo'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>        

 
				<em>请上传logo图片，图片格式为PNG（216像素 X45像素） logo主题为浅色最佳</em>
 

 
	<legend><strong>公司联系方式（显示在首页和联系我们页面）</strong></legend>
 
              
        
       <legend><strong>电话</strong></legend>
				<textarea name="tell" id="tell" rows="1" cols="70"><?php echo get_option('mytheme_tell'); ?></textarea><br />
 
				<em>示例：中华人民共和国北京市朝阳区星峰大厦</em>
                
                      
		
		       <legend><strong>电子邮件</strong></legend>
				<textarea name="mail" id="mail" rows="1" cols="70"><?php echo get_option('mytheme_mail'); ?></textarea><br />
 
				<em>示例：中华人民共和国北京市朝阳区星峰大厦</em>
                
				




     	

    
  	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>
 
	</fieldset>

 


</div>

</li>
 
  
 
 
 
 <li class="box"> <h1>SEO以及统计选项</h1>
 <div class="text" style="display:none">

 
	<fieldset>
 
	<legend><strong>SEO 代码添加</strong></legend>
 

 
				<textarea name="keywords" id="keywords" rows="1" cols="134"><?php echo get_option('mytheme_keywords'); ?></textarea><br />
 
				<em>网站关键词（Meta Keywords），中间用半角逗号隔开,如：主题公园，网站模板，wordpress主题</em>
 
		
				<textarea name="description" id="description" rows="3" cols="134"><?php echo get_option('mytheme_description'); ?></textarea>
 
				<em>网站描述（Meta Description），针对搜索引擎设置的网页描述，如：主题公园是专注于高端网站主题，高端网站模板的设计和制作...</em>
 
	
 
	</fieldset>
 
 
 
	<fieldset>
 
	<legend><strong>统计代码添加</strong></legend>
 
		
 
				<textarea name="analytics" id="analytics" rows="5" cols="134"><?php echo stripslashes(get_option('mytheme_analytics')); ?></textarea>
 

      	</fieldset>  
    
 


 
	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>

</div>
</li>


<li class="box"> <h1>网站顶部图片以及广告语</h1>
 <div class="text" style="display:none">

 
	<fieldset>
 
	<legend><strong>广告图片</strong></legend>
 

 
 
 
 <div class="up">
           <input type="text" size="80"  name="ad_img" id="ad_img" value="<?php echo get_option('mytheme_ad_img'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div> 
 <em>由于图片是全屏的效果，图片请上传1920宽度的图片，高度228px，需要自己裁剪图片。</em>
				
 
					<legend><strong>广告标题</strong></legend>
 
		
					<textarea name="ad_title" id="ad_title" rows="1" cols="70"><?php echo get_option('mytheme_ad_title'); ?></textarea><br />
 
 
				<legend><strong>广告文字</strong></legend>
 
		<textarea name="ad_text" id="ad_text" rows="1" cols="70"><?php echo get_option('mytheme_ad_text'); ?></textarea><br />
 
 
	</fieldset>

 
	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>

</div>
</li>



<li class="box"> <h1>默认小工具</h1>
 <div class="text" style="display:none">

	<fieldset>

				
				

 <div style="margin-top:20px;">
 
 
 <div style="100%">
 <strong></strong>
    
	
<p> 
	
				
   
              </div>
<ul class="jiao_div">

  <li>
 
		<a>酷狗音乐</a>	
          <div class="up">
          	<textarea name="analytics" id="analytics" rows="5" cols="134"><?php echo stripslashes(get_option('mytheme_about_tit1')); ?></textarea>
            
           
                </div>      
        <a  href="http://www.themepark.com.cn" style=" color:#999">更改音乐请到web主题公园查看教程</a>	
 </li>
 
  <li>
   <p>预览：</p>
   
		<a>二维码</a>	
        <div class="up">
           <input type="text" size="80"  name="about_text1" id="about_text1" value="<?php echo get_option('mytheme_about_text1'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div> 
            <a style=" color:#999">百度一下二维码生成器，生成图片上传即可，图片尺寸为：211*227[像素]</a>	
 </li>
 
 
 </ul>
 


  </div>
	</fieldset>
 
 
  	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>
 

    
 


 


</div>
</li>













</form>
</div>
</li>
 </ul>

</div>

 
<?php }
echo $after_widget;
/*添加主题选项over*/
?>