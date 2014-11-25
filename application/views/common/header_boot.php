<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="" />
<meta name="google-site-verification" content="yVJdVcuk3lQ2SICu2kbtPOxynkk-zLfybxZlYkT0y3k" />
<title>	St Kilda Festival 2014</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?=base_url()?>css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/font-awesome.css">
<style>
#top-navigation{color: #6e6e6e;	margin-top:10px;float:right;margin-bottom:10px;}
#top-navigation li{	margin-left:10px;line-height:30px; font-size:20px; padding:0 10px 0 0;}
#search-input{background:#6e6e6e;border-radius: 0px;border:none;color:#fff;margin:0px; width:226px; height:16px;}
#search-icon{font-size:20px;}
#button-search{margin:0px;border:none;background: #000;color:#6e6e6e;}
#topest-gap{height:60px;}
#filter{text-align:center;color:#fff;background: #000;}
#filter a, #filter a:focus, #filter a:hover{color:#fff;text-decoration: none;cursor:pointer;display: block;width:11.11111111111111%;float:left;}
#stage a, #stage a:focus, #stage a:hover{color:#fff;text-decoration: none;cursor:pointer;display: block;text-transform: uppercase;}
#stage{	list-style: none outside none;margin:0px;width:100% !important;}

/* constants */
.nav_offset_padding{ margin-top:51px;}

/* constants ends */
.home_icon{ float:left; width:auto; font-size:20px; color:#6d6d6d; padding:14px 0 0 10px;}
.home_icon a{ text-decoration:none;}
.logo_wrap{ height:270px; background-color:#d0d0d0; text-align:center; position:relative;}
.logo_wrap img{ position:absolute; left:0; right:0; top:0; bottom:0; margin:auto;}

@media (min-width: 1200px){
	.photo-band	{float:left;width: 292.5px;/*width:25%;width:16.66666666666667%; width:33.33333333333333%;*/height: 192px;	}
	.name-on-top{color: #FFFFFF;font-size: 18px;font-weight: 700;margin-top: 76px; position: absolute;text-align: center;width: inherit;}
	.sliding-image-gallery {height: 353px !important;overflow: hidden;position: relative;width: 100% !important;}
	.screen {height: 351px !important;left: 0 !important;overflow: hidden;position: relative; width: 100% !important;}
}
@media (max-width: 1200px)
{
	.photo-band{float:left;/*width:25%;width:16.66666666666667%;width:33.33333333333333%;*/width:313.34px; height: 205px;}
	.name-on-top{color: #FFFFFF;font-size: 18px;font-weight: 700;margin-top: 86px;position: absolute;text-align: center;/*width: inherit;*/width: inherit;}
}
@media (max-width: 980px)
{
	.photo-band	{float:left;/*width:25%; width:16.66666666666667%;width:33.33333333333333%; */width:50%;height: 237px;}
	.name-on-top{color: #FFFFFF;font-size: 18px;font-weight: 700;margin-top: 96px;position: absolute;text-align: center;/*width: 38.5%;*/width: 42%;}
}
@media (max-width: 767px)
{
	.photo-band	{float:left;/*width:25%;width:16.66666666666667%; width:33.33333333333333%; */width:100%;height: auto;}
	.name-on-top{color: #FFFFFF;font-size: 18px;font-weight: 700;margin-top: 28%; position: absolute;text-align: center;width: 94%;}
}
</style>
<script src="<?=base_url()?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
	<script src="<?=base_url()?>js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>js/AC_RunActiveContent.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.cycle.js"></script>
	<script src="<?=base_url()?>js/jquery.tools.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/script.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/jquery.quicksand.js" type="text/javascript"></script>
	<script>
	//$j = $.noConflict();
	</script>
</head>



<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
            	<div class="home_icon"><i class="icon-home"></i></div>
				<div class="nav-collapse collapse">
					<ul class="nav" id="top-navigation">
						<li><i class="icon-facebook"></i></li>
						<li><i class="icon-twitter"></i></li>
						<li>apps</li>
						<li><i class="icon-android"></i></li>
						<li><i class="icon-envelope"></i></li>
						<li><i class="icon-youtube"></i></li>
						<li>
							<input type="text" id="search-input" placeholder="Search Artist or Event"/>
							<button id="button-search"> 
								<i class="icon-search" id="search-icon"></i>
							</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container nav_offset_padding">
    	<div class="logo_wrap"><img src="<?=base_url();?>img/stkildafestival_logo.jpg" alt="logo" title="Stkilda festival logo" /></div>
    </div>
	<div class="container">
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/2014/flashcomponent_jquery/index.php');?>
	     <div id="banner_container" class="banner">
			<div class="screen" style="height:351px;">
			    <noscript>
			        <!--Placeholder Image When Javascript is Off-->
			        <img src="<?=base_url()?>photos/news_sticker/<?= $all[0]['image']?>" alt=""/>
			    </noscript>
			</div>
			<div class="items" >
			    <ul>
			    <?php foreach($all as $alls)
			    {
			        ?>
			        <li>
			          <div class="button">
			                <p>
			                	<span><?= $alls['heading']?></span>
			                    <br />                                
								<span class="button_subheading"><?= $alls['subheading']?></span>
			                </p>
			            </div>
			
			            <a href="<?=base_url()?>photos/news_sticker/<?= $alls['image']?>"></a>
			                                    <a href="<?= $alls['url']?>"></a>
			            <div class="content" style="bottom:0; left:0px;  height:105px;">
			                <div class="div1" style="text-transform:none!important;"><?= $alls['heading']?> - <?= $alls['subheading']?></div>
			                <div class="div2" style="text-transform:none!important;"><?= $alls['description']?></div>
			               <!-- <div style="margin-top:10px;text-transform:none!important;" class="DidactGothic"><?= $alls['description']?></div>-->
			            </div>                   
			           
			        </li>
			     <?
			     }
			     ?>
			    </ul>
			 </div><!-- end of items-->
     </div> <!-- end of banner_container-->
	</div>
	<div class="container">
		<div class="row-fluid">
			<div class="span12 heading_content_page">
				Music
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12 heading_content_page">
				Select a festival day to see who is playing.
				<div id="filterAll" style="" class="subheading2_content_page"></div>
			</div>
		</div>
		<div class="row-fluid" id="filter">
			
		</div>
		
	</div>
	
	<div id="band-wrapper" class="container">
		<ul id="stage">
			 <? foreach($music_bands as $a)
			 {
				 $originalDate =$a['event_date'];
				 $newFormat = date("D d M",strtotime($originalDate));
				 $folder = md5("band".$a['id']);
			 ?> 
			<li class="photo-band" data-tags="<?php echo $newFormat; if($a['event_date'] == '2012-02-12') { echo ','.$a['venue']; }?>">
				<a href="<?=base_url()?>band/<?=$a['id']?>">
					<div class="name-on-top"><a href="<?=base_url()?>band/<?=$a['id']?>"><?=$a['band_name']?></a></div>
					<img style="width:100%" alt="" src="<?=base_url()?>uploads/bands/<?=$folder?>/thumbnails/<?=$a['photo']?>" />
					
					
				</a>
				
			</li>
			 <?
			 }
			 ?>
		</ul>
	</div>
	
	
	
	
</body>
</html>