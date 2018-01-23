<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title>青岛润航科技有限公司首页</title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
			<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
	<?php $portal_index_lastnews="2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="ThinkCMF">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/themes/simplebootx/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/themes/simplebootx/Public/images/favicon.ico" type="image/x-icon">
   <!--  <link href="/themes/simplebootx/Public/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet"> -->
    <link href="/themes/simplebootx/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/themes/simplebootx/Public/css/amazeui.min.css" rel="stylesheet">
	<link href="/themes/simplebootx/Public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/themes/simplebootx/Public/css/style.css" rel="stylesheet">
	<!--[if lt IE 9]>
    <link href="/themes/simplebootx/Public/css/ie.css" rel="stylesheet">
	<![endif]-->
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		/*#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}*/
	</style>
	<style type="text/css">
	.common-banner-icon, .common-title-icon{
  		behavior: url(/themes/simplebootx/Public/iecss3/ie-css3.htc);
	}
	</style>
	
		<!-- <link href="/themes/simplebootx/Public/css/slippry/slippry.css" rel="stylesheet"> -->
	</head>
<body class="body-white">
<?php echo hook('body_start');?>
<header class="am-topbar">
	<div class="am-topbar-1">
		<h1 class="am-topbar-brand">
			<a href="/">青岛润航科技有限公司</a>
		</h1>

		<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}">
			<span class="am-sr-only">导航切换</span>
			<span
      class="am-icon-bars"></span>
		</button>
		<div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
			<ul id="nav" class="am-nav am-nav-pills am-topbar-nav am-topbar-right" style="height:60px;margin-top: 0;">

				<li>
					<a href="/">首页</a>
				</li>
				<!-- <li class="nav-dropdown">
				 	<a href="<?php echo U('page/index',array('id'=>'2', 'state'=>'about_us'));?>" data-state="about_us">
				 		关于我们
				 		<span class="am-icon-caret-down"></span>
				 	</a>
				 	<div class="am-dropdown-wrapper">
				 		<span>
				 			<a href="<?php echo U('page/index#yb',array('state'=>'about_us','id'=>'2'));?>" data-state="about_us">优贝空间</a>
				 		</span>
				 		<span>
				 			<a href="<?php echo U('page/index#jd',array('state'=>'about_us','id'=>'2'));?>" data-state="about_us">奇点基金</a>
				 		</span>
				 		<span>
				 			<a href="<?php echo U('page/index#ck',array('state'=>'about_us','id'=>'2'));?>" data-state="about_us">创客基金</a>
				 		</span>
				 	</div>
				</li> -->
				<li>
					<a href="<?php echo U('page/index',array('id'=>'1', 'state'=>'case'));?>" data-state="case">产品展示</a>
				</li>
				<li>
					<a href="<?php echo U('list/index',array('id'=>'2', 'state'=>'news'));?>" data-state="news">新闻资讯</a>
				</li>
				<li>
					<a href="<?php echo U('contact/index',array('id'=>'2','state'=>'contact_us'));?>" data-state="contact_us">联系我们</a>
				</li>
			<!-- 	<li class="nav-dropdown">
				 	<a href="<?php echo U('partner/index',array('state'=>'partner', 'char'=>'p'));?>" data-state="partner">
				 		合作伙伴
				 		<span class="am-icon-caret-down"></span>
				 	</a>
				 	<div class="am-dropdown-wrapper">
				 		<span>
				 			<a href="<?php echo U('partner/index#jcc',array('state'=>'partner', 'char'=>'p'));?>" data-state="partner">北京金长川</a>
				 		</span>
				 		<span>
				 			<a href="<?php echo U('partner/index#lgdc',array('state'=>'partner', 'char'=>'p'));?>" data-state="partner">蓝光地产</a>
				 		</span>
				 		<span>
				 			<a href="<?php echo U('partner/index#sldc',array('state'=>'partner', 'char'=>'p'));?>" data-state="partner">三利地产</a>
				 		</span>
				 	</div>
				</li>
				<li>
					<a href="<?php echo U('contact/index',array('id'=>'2','state'=>'contact_us'));?>" data-state="contact_us">联系我们</a>
				</li> -->
			</ul>

		</div>
	</div>
	<div id="nav-common-wrapper"></div>
</header>

<?php $home_slides=sp_getslide("index_slide"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>
<div class="ds-part">
	<div data-am-flexslider="{playAfterPaused: 3000, animation: 'fade'}" class="am-slider am-slider-default">
		<ul class="am-slides">
			<?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li>
					<a href="<?php echo ($vo["slide_url"]); ?>" target="_blank">
					<img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>"></a></li><?php endforeach; endif; ?>
		</ul>
	</div>
</div>
<!-- <div class="container">
	<div class="row">
		<div style="background-image: url(/themes/simplebootx/Public/images/home/bg-where-you-want.png);background-position: bottom center;background-repeat: no-repeat;background-attachment: scroll;">
		    <div class="container" style="padding-left: 104.5px; padding-right: 104.5px;">
		        <div style="padding-top: 0px;padding-left: 0px;padding-bottom: 209px;padding-right: 0px;">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="box box-no-advanced box-with-products no-clear-after">
		                        <div class="box-heading" style="font-size: 25px">热销产品</div>
		                        <div class="clear"></div>
		                    </div>
		                    <div class="holidays-countries row">
		                        <div class="col-sm-4">
		                            <div class="heading">
		                                <a href="index.php?route=product/category&amp;path=20">PH Meter</a></div>
		                            <div class="row">
		                                <div class="col-xs-5">
		                                    <ul>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=20&amp;product_id=42">YMK-P-1M</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=20&amp;product_id=30">YMK-P-2M</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=20&amp;product_id=40">YMK-P-3M</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=20&amp;product_id=30">YMK-P-4M</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=20&amp;product_id=28">YMK-P-7B</a></li>
		                                    </ul>
		                                </div>
		                                <div class="col-xs-7">
		                                    <ul>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=20&amp;product_id=47">YMK-P-1A</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=20&amp;product_id=33">YMK-P-2A</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=20&amp;product_id=40">YMK-P-5A</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=20&amp;product_id=41">YMK-P-6A</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=20&amp;product_id=40">YMK-P-8A</a></li>
		                                        <li></li>
		                                    </ul>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="col-sm-4">
		                            <div class="heading">
		                                <a href="index.php?route=product/category&amp;path=20" style="color: #019ad5;border-color: #019ad5">TDS Meter</a></div>
		                            <div class="row">
		                                <div class="col-xs-5">
		                                    <ul>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=18&amp;product_id=45">YMK-T-1S</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=18&amp;product_id=34">YMK-T-LK</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=18&amp;product_id=36">YMK-T-TW</a></li>
		                                    </ul>
		                                </div>
		                                <div class="col-xs-7">
		                                    <ul>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=18&amp;product_id=48">YMK-T-LH</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=18&amp;product_id=44">YMK-T-PVC</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=18&amp;product_id=32">YMK-T-XM</a></li>
		                                    </ul>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="col-sm-4">
		                            <div class="heading">
		                                <a href="index.php?route=product/category&amp;path=20" style="color: #0162a1;border-color: #0162a1">TDS&amp;EC Meter</a></div>
		                            <div class="row">
		                                <div class="col-xs-5">
		                                    <ul>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=57&amp;product_id=35">YMK-EZ-Ⅰ</a></li>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=57&amp;product_id=43">YMK-EZ-Ⅱ</a></li>
		                                        <li></li>
		                                    </ul>
		                                </div>
		                                <div class="col-xs-7">
		                                    <ul>
		                                        <li>
		                                            <a href="index.php?route=product/product&amp;path=57&amp;product_id=46">YMK-EZ-Ⅲ</a></li>
		                                    </ul>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="text-center">
		                        <a href="index.php?route=product/category&amp;path=20" class="button" style="margin-top: 40px">Show all offers</a></div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div> -->
<div class="row" style="margin: 0;">
    <div style="background-image: url(/themes/simplebootx/Public/images/home/bg-where-you-want.png);background-position: bottom center;background-repeat: no-repeat;background-attachment: scroll;">
        <div class="container" style="padding-left: 104.5px; padding-right: 104.5px;">
            <div style="padding-top: 0px;padding-left: 0px;padding-bottom: 80px;padding-right: 0px;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box box-no-advanced box-with-products no-clear-after" style="margin-bottom: 10px">
                            <div class="box-heading" style="font-size: 25px">商品推荐</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box clearfix box-with-products without-heading">
                            <div class="clear"></div>
                            <div class="box-content products">
                                <div class="box-product">
                                    <div id="myCarousel29678124">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item">
                                                <div class="product-grid">
                                                    <div class="row">
														<?php if(is_array($tui)): foreach($tui as $k=>$vo): ?><div class="col-sm-4 col-xs-6  ">
                                                            <!-- Product -->
                                                            <div class="product clearfix product-hover">
                                                                <div class="left">
                                                                    <div class="image ">
                                                                        <a href="#">
                                                                            <img src="/data/upload/<?php echo ($vo["p_img"]); ?>" alt="YMK-P-1M" class="zoom-image-effect"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="name">
                                                                        <a href="#"></a></div>
                                                                    <div class="price">￥<?php echo ($vo["p_price"]); ?></div>

                                                                </div>
                                                            </div>
                                                        </div><?php endforeach; endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
	<div class="row banners">
     	<div class="col-sm-12"><a href="#"><img src="/themes/simplebootx/Public/images/home/banner-03.png" alt="Banner"></a></div>
	</div>
</div>
<div id="ds-part1" class="ds-part">
	<div class="am-content-1">
		<div class="am-content-header-logo"></div>
		<div class="am-content-header-t">公司简介</div>
		<div class="am-content-desc"> 
			<em >青岛润航科技有限公司</em>
			<span>
				青岛润航科技有限公司坐落于著名海滨城市-青岛。是一家以家用健康检测产品为主导、TDS测试笔,pH测试笔，盐度计，水质电脑显示盒，甲醛测试仪等系列为配套，集设计、开发、生产、销售于一体的电子科技有限公司，并拥有多项新颖时尚的产品外观专利，经过多年潜心经营，被誉为“健康使者”。产品覆盖了国内近三十个省市、自治区，设立了数百家代理机构；产品远销欧美、中东、港澳台等国家和地区。
				公司现有员工200多人，具有世界先进工艺的生产流水线10条，年生产能力4000万件（支）；同时公司为国内外几大著名品牌设计、开发、OEM。公司本着“诚实做人，踏实经营，把健康带给您”的企业经营宗旨，坚持“以人为本，顾客满意”的企业经营理念，提倡“专注健康,用心服务”的企业文化，努力不懈地为广大客户提供优质健康的产品。我们以专业的队伍、严谨的管理、超卓的设备，真诚敬业的服务着力打造品牌及其时尚健康产品。作为健康检测专家，尽显健康魅力，激情奔放、彰显非凡、锐意革新、进取不息的精神，形成了润航科技信息幻变灵动的设计语言。兼容并蓄、博采众长的虚怀纳百川之风范,形成了润航科技超凡脱俗的个性与风格。

			</span>
		</div>
	</div>
</div>

<!-- <br>
<br>
<br> -->
<!-- Footer ==================================================
<hr> -->
<?php echo hook('footer');?>
<footer class="ds-footer">
	<div class="am-for-content">
		<div class="am-for-l">
			<p class="am-for-logo">青岛润航科技有限公司</p>
			<small ><!-- CopyRight © 2016 xxxx Rights Reserved 蜀ICP备13021 --></small>
		</div>
		<div class="am-for-r">
			<p><i></i>媒体合作发送至：99343998@qq.com</p>
			<small >商业规划书发送至：99343998@qq.com</small>
		</div>
	</div>
</footer>
<!-- <div id="footer">
	<div class="links">
		<?php $links=sp_getlinks(); ?>
		<?php if(is_array($links)): foreach($links as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
	</div>
	<p>
		Made by <a href="http://www.thinkcmf.com" target="_blank">ThinkCMF</a>
		Code licensed under the 
		<a href="http://www.apache.org/licenses/LICENSE-2.0" rel="nofollow" target="_blank">Apache License v2.0</a>.
		<br />
		Based on 
		<a href="http://getbootstrap.com/2.3.2/" target="_blank">Bootstrap</a>.
		Icons from 
		<a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">Font Awesome</a>
	</p>
</div>
<div id="backtotop">
	<i class="fa fa-arrow-circle-up"></i>
</div> -->
<!-- <?php echo ($site_tongji); ?> -->



<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--[if lt IE 9]>
    	<script src="/themes/simplebootx/Public/js/jquery.min.1.js"></script>
		<script src="/themes/simplebootx/Public/js/modernizr.js"></script>
		<script src="/themes/simplebootx/Public/js/amazeui.ie8polyfill.min.js"></script>
	<![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!-->
		<script src="/themes/simplebootx/Public/js/jquery.min.js"></script>
	<!--<![endif]-->
    <script src="/themes/simplebootx/Public/js/amazeui.min.js"></script>
    <script src="/public/js/wind.js"></script>
    <script src="/themes/simplebootx/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/public/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		// $("#main-menu li.dropdown").hover(function(){
		// 	$(this).addClass("open");
		// },function(){
		// 	$(this).removeClass("open");
		// });
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>
	<script type="text/javascript">
		$("#nav li").hover(
			function(){
				clearTimeout(setTimeout("0")-1);
				$(".am-dropdown-wrapper").hide(); 
				if($(this).attr('class') == 'nav-dropdown' || $(this).attr('class') == 'nav-dropdown am-active') {
					$('#nav-common-wrapper').show();
					$(this).find('.am-dropdown-wrapper').show();
					$(this).find('a>span').removeClass('am-icon-caret-down').addClass('am-icon-caret-up');
				}
			},
			function(){
				$('#nav-common-wrapper').hide();
				$(this).find('.am-dropdown-wrapper').hide(); 
				$(this).find('a>span').removeClass('am-icon-caret-up').addClass('am-icon-caret-down');
			}
		);
		$(function(){
			var regState = new RegExp("state=([^&]*)(&|$)"),
				url = window.location.href,
				str = url.match(regState),
				state;
			if (str) {
				state = str[1];
			}
			if(state == undefined) {
				$('#nav li').eq(0).addClass('am-active');
			}else{
				$('#nav li').find('a[data-state="' + state + '"]').parent('li').addClass('am-active');
			}	
		});
	</script>


<script src="/themes/simplebootx/Public/js/slippry.min.js"></script>
<?php echo hook('footer_end');?>
</body>
</html>