<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.cycle.js"></script>
 <script src="<?=base_url()?>js/jquery.tools.min.js" type="text/javascript"></script>
         <script src="<?=base_url()?>js/script.js" type="text/javascript"></script>
        <script src="<?=base_url()?>js/jquery.quicksand.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
    $('#adspace').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		timeout: 5000
	});
});
</script>
<style type="text/css">
.twtr-timeline
{
	width:232px!important;
}
.twtr-hd
{
	display:none!important;
}
.twtr-user
{
	font-weight:bold!important;
}
.twtr-tweet {
border-bottom: 1px solid #ff6e91!important;
width:232px!important;
}
.twtr-widget p
{
	line-height:16px!important;
}
.twtr-tweet-wrap
 {
	 padding-left:10px!important;
 }
.twtr-ft div {
	 display:none!important;
 }
 .twtr-widget
 {
	 font-size:11px!important;
	 color: #ff6e91;
 }
 .acc_item:hover
 {
 	cursor: pointer;
 }
</style>
<!--<script type="text/javascript" src="<?=base_url()?>js/jquery-1.6.2.js"></script>-->
<div id="page_content_outside">
   <div id="page_content">
     <div id="announcement">
       <!-- <div id="under_construction"><strong>This site is currently under construction.</strong> Check back in January for the full line-up and program.
       </div>  -->
      <div id="under_construction2">
       		<div id="search_label">Search Artist</div>
       		<form id="search_band_form" method="post" action="<?=base_url()?>page/search_bands_key">
       		<input id="input_search" value="" name="key"/>
       		</form>
       		<div id="search_button" style="cursor:pointer;" onclick="$('#search_band_form').submit()">Enter</div>
       		<div id="search_label" style="width: 354px; margin-right: 0">
       			<a href="<?=base_url()?>page/pages/119" style="color:#96BEFF">
       				Vote for your favourite <span style="font-weight: 400">New Music Stage Band</span>
       			</a>
       		</div>
       </div>
       <div id="social_icons"><img src="<?=base_url()?>images/social-icons.png" alt="" usemap="#Map" />
         <map name="Map" id="Map">
           <area shape="rect" coords="0,0,15,24" href="https://www.facebook.com/StKildaFestival" target="_blank" />
           <area shape="rect" coords="33,0,58,22" href="http://twitter.com/stkildafestival" target="_blank" />
           <area shape="rect" coords="78,2,104,23" href="http://www.stkildafestival.com.au/2013-s2/page/pages/75" />
           <area shape="rect" coords="121,1,144,24" href="http://www.stkildafestival.com.au/2013-s2/page/pages/75" />
           <area shape="rect" coords="163,6,188,22" href="mailto:stkildafestival@portphillip.vic.gov.au" />
           <area shape="rect" coords="207,-3,235,22" href="http://www.youtube.com/thestkildafestival" target="_blank" />
         </map>
       
       </div>
     </div> <!-- end of announcement-->
     <div class="clearboth"></div>
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
                        <div class="content" style="bottom:0; left:0px; width:724px; height:105px;">
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
  <div style="float:left;width:724px">
    <div id="home_content">
      <div id="featuring">
       <!--<img src="<?=base_url()?>images/featuring_placeholder.jpg" alt="" />-->
        <div id="home_band_image">
			<?php
				$dir = md5("band".$featuring['id']);
			?>
               <a href="<?=base_url()?>band/<?=$featuring['id']?>"><img src="<?=base_url()?>uploads/bands/<?=$dir?>/<?=$featuring['photo']?>" alt="" width="355px" height="227px"/></a>
        </div>
         <p class="heading_content_page" style="margin-top:15px;"><?php echo $featuring['band_name']?></p>
                 <p class="subheading_content_page" style="margin-top:10px"><?php echo date('l d Y',strtotime($featuring['event_date']));?></p>
                 <p class="subheading2_content_page" style="margin-top:10px"><?php echo $featuring['start_time']; if($featuring['end_time'] != '') { echo ' - '.$featuring['end_time'] ; } ?></p>
                 <?php if($featuring['venue'] != '' && $featuring['venue'] != 'not specified') { ?><p class="subheading2_content_page"><?php echo $featuring['venue'] ; ?></p><?php } ?>
                   <!--<?php if($featuring['extra_details'] != '') { ?><div class="extra_details"><?php echo $featuring['extra_details'] ; ?></div><?php } ?>-->
                  <?php if($featuring['description'] != '') { ?><div style="margin-top:10px" class="text_content_page"><?php echo substr($featuring['description'],0,strrpos(substr($featuring['description'],0,300),' ')) ; ?>...</div><?php } ?>
                  <p style="margin-top:10px"><a class="text_content_page" href="<?=base_url()?>band/<?php echo $featuring['id'];?>">Read more</a></p>
      </div>
     </div>
      <div id="youtube">
	    <div style="height:227px"><?php if($youtube) { echo html_entity_decode($youtube['url']);}?></div>
        <div class="subheading_content_page" style="margin-top:15px"><?=$youtube['title']?></div>
        <div class="subheading2_content_page" style="margin-top:4px"><?=$youtube['subtitle']?></div>
        <div id="adspace">
			<?php 
				if($adspace) 
				{ 
					foreach($adspace as $ads)
					{
						echo '<a target="_blank" href="'.base_url().'page/banner/'.$ads['id'].'"><img src="'.base_url().'photos/banners/'.$ads['name'].'" alt="" /></a>';
					}
				}
			?>
        </div>
      </div>
    <div style="clear:both"></div>
     <div id="band-container"> 
       <div class="heading_content_page">Music</div>
         <div class="subheading_content_page" style="margin-top:10px; margin-bottom: 15px; float: left; margin-right: 15px;">Select a festival day to see who is playing.</div>
         <div id="filterAll" style="margin-top:10px; margin-bottom: 15px; float: left" class="subheading2_content_page"></div>
         <div style="clear: both"></div>
         <div>
           <div id="filter" style="margin-bottom:10px"></div>
           <div id="filter2" style="display:none"></div>
         </div>
      <div id="band-wrapper">
        	<ul id="stage">
             <? foreach($music_bands as $a)
			 {
				 $originalDate =$a['event_date'];
				 $newFormat = date("D d M",strtotime($originalDate));
				 $folder = md5("band".$a['id']);
				 ?> 
                 <li data-tags="<?php echo $newFormat; if($a['event_date'] == '2012-02-12') { echo ','.$a['venue']; }?>">
                 	<a href="<?=base_url()?>band/<?=$a['id']?>">
                 		<img style="border-radius: 8px" width="84" height="55" alt="" src="<?=base_url()?>uploads/bands/<?=$folder?>/thumbnails/<?=$a['photo']?>" />
                 		<div title="<?=$a['band_name']?>"  class="org_hover" style="border-radius: 8px"></div>
                 	</a>
                 </li>
             <?
			 }
			 ?>
            </ul>
        </div>
     </div>
  </div>
  <div id="home_right">
  <div id="countdown">
   <div id="timer_st">
       00D 00H 00M 00S
    </div>
    <div id="countdown_text" style="font-size: 13px">UNTIL ST KILDA FESTIVAL BEGINS</div>
 </div>
 <div id="subscribe">
   <div id="subscribe_header">Subscribe</div>
   <div id="subscribe_text">Join our email list for all the latest news</div>
   <div id="enter_email">
     <div id="email_input"><input class="auto-hint" title="Enter your email here" type="text" name="email_subscribe" id="email_subscribe"  />
     </div>
     <div id="email_submit"><img onclick="validateEmail()" src="<?=base_url()?>images/email-enter.png" alt="" />
     </div>
   </div>
   <div style="clear:both"></div>
 </div> <!-- #subscribe -->
 <div id="traders_apply">
 	<a target="_blank" href="<?=base_url()?>Program/index.html">
 		<!-- <img src="<?=base_url()?>images/trader-apply.png" alt="" /> -->
 		<div style="width: 231px; height: 52px; background: #ff4631; color: #fff; font-size: 14.5px; font-family: Helvetica; text-align: center">
 			<div style="font-weight: 300; padding-top: 12px;">VIEW / DOWNLOAD</div>
 			<div style="font-weight: 700;">THE PROGRAM</div>
 		</div>
 	</a>
 </div> <!-- #traders_apply -->
 <div style="height: 15px;">&nbsp;</div>
 <div id="today_acc">
 	What's on today?
 </div>
 <div style="height: 1.5px;">&nbsp;</div>
 <div id="today_acc_item">
 	<div class="acc_item" style="cursor:pointer;" onclick="window.location = '<?=base_url()?>page/what_today/2013-02-02'">
 		<div style="font-weight: 700; padding-top: 11px;">Sat</div>
 		<div style="font-weight: 400">2 Feb</div>
 	</div>
 	<div style="float: left; width: 1.5px">&nbsp;</div>
 	<div class="acc_item" style="cursor:pointer;" onclick="window.location = '<?=base_url()?>page/what_today/2013-02-03'">
 		<div style="font-weight: 700; padding-top: 11px;">Sun</div>
 		<div style="font-weight: 400">3 Feb</div>
 	</div>
 	<div style="float: left; width: 1.5px">&nbsp;</div>
 	<div class="acc_item" style="cursor:pointer;" onclick="window.location = '<?=base_url()?>page/what_today/2013-02-04'">
 		<div style="font-weight: 700; padding-top: 11px;">Mon</div>
 		<div style="font-weight: 400">4 Feb</div>
 	</div>
 </div>
 
 <div style="height: 1.5px; clear: both">&nbsp;</div>
 
 <div id="today_acc_item">
 	<div class="acc_item" style="cursor:pointer;" onclick="window.location = '<?=base_url()?>page/what_today/2013-02-05'">
 		<div style="font-weight: 700; padding-top: 11px;">Tues</div>
 		<div style="font-weight: 400">5 Feb</div>
 	</div>
 	<div style="float: left; width: 1.5px">&nbsp;</div>
 	<div class="acc_item" style="cursor:pointer;" onclick="window.location = '<?=base_url()?>page/what_today/2013-02-06'">
 		<div style="font-weight: 700; padding-top: 11px;">Wed</div>
 		<div style="font-weight: 400">6 Feb</div>
 	</div>
 	<div style="float: left; width: 1.5px">&nbsp;</div>
 	<div class="acc_item" style="cursor:pointer;" onclick="window.location = '<?=base_url()?>page/what_today/2013-02-07'">
 		<div style="font-weight: 700; padding-top: 11px;">Thur</div>
 		<div style="font-weight: 400">7 Feb</div>
 	</div>
 </div>
 
 <div style="height: 1.5px; clear: both">&nbsp;</div>
 
 <div id="today_acc_item">
 	<div class="acc_item" style="cursor:pointer;" onclick="window.location = '<?=base_url()?>page/what_today/2013-02-08'">
 		<div style="font-weight: 700; padding-top: 11px;">Fri</div>
 		<div style="font-weight: 400">8 Feb</div>
 	</div>
 	<div style="float: left; width: 1.5px">&nbsp;</div>
 	<div class="acc_item" style="cursor:pointer;" onclick="window.location = '<?=base_url()?>page/what_today/2013-02-09'">
 		<div style="font-weight: 700; padding-top: 11px;">Sat</div>
 		<div style="font-weight: 400">9 Feb</div>
 	</div>
 	<div style="float: left; width: 1.5px">&nbsp;</div>
 	<div class="acc_item" style="cursor:pointer;" onclick="window.location = '<?=base_url()?>page/what_today/2013-02-10'">
 		<div style="font-weight: 700; padding-top: 11px;">Sun</div>
 		<div style="font-weight: 400">10 Feb</div>
 	</div>
 </div>


<div style="height: 15px; clear: both">&nbsp;</div>

<div style="height: 15px; border-top: 1px solid #74009b">&nbsp;</div>
<div id="quick_search">
	<div style="font-size: 18px; margin-bottom: 5px;">Quick Search</div>
	<div style="font-size: 14px; line-height: 18px; text-align: justify;">
		<a style="font-size: 15px; font-weight: 700;" class="quick_search_a" href="<?=base_url()?>page/pages/100">Win Stuff</a> <span style="font-weight: 900">&#183;</span>
		<!--<a class="quick_search_a" href="#">Festival Dates</a>  /  -->
		<a class="quick_search_a" href="<?=base_url()?>page/pages/101"> Festival Sunday Line Up</a> <span style="font-weight: 900">&#183;</span>
		<a class="quick_search_a" href="<?=base_url()?>page/pages/75"> Festival App</a> <span style="font-weight: 900">&#183;</span>
		<a style="font-size: 15px; font-weight: 700;" class="quick_search_a" href="<?=base_url()?>page/pages/93"> Festival Sunday Map</a> <span style="font-weight: 900">&#183;</span> 
		<a class="quick_search_a" href="<?=base_url()?>page/pages/99"> Road Closures</a> <span style="font-weight: 900">&#183;</span>
		<a class="quick_search_a" href="<?=base_url()?>page/pages/98"> Public Transport</a> <span style="font-weight: 900">&#183;</span>
		<a style="font-size: 15px; font-weight: 700;" class="quick_search_a" href="<?=base_url()?>page/pages/82"> Kids</a> <span style="font-weight: 900">&#183;</span>
		<a class="quick_search_a" href="<?=base_url()?>page/pages/102"> Charity Partners</a> <span style="font-weight: 900">&#183;</span>
		<a class="quick_search_a" href="<?=base_url()?>page/pages/73"> Live N Local</a> <span style="font-weight: 900">&#183;</span>
		<a class="quick_search_a" href="<?=base_url()?>page/pages/83"> Yalukit Line Up</a> <span style="font-weight: 900">&#183;</span>
		<a class="quick_search_a" href="<?=base_url()?>page/pages/77"> Forums</a> <span style="font-weight: 900">&#183;</span>
		<a style="font-size: 15px; font-weight: 700;" class="quick_search_a" href="<?=base_url()?>page/pages/103"> Visual  Art Theatre</a> 
	</div>
</div>
<!-- <div style="height: 15px; border-bottom: 1px solid #74009b">&nbsp;</div> -->
<div id="traders_apply">
 	<a href="<?=base_url()?>page/pages/92">
 		<!-- <img src="<?=base_url()?>images/trader-apply.png" alt="" /> -->
 		<div style="width: 231px; height: 52px; background: #ff4631; color: #fff; font-size: 14.5px; font-family: Helvetica; text-align: center">
 			<div style="font-weight: 300; padding-top: 12px;">FESTIVAL</div>
 			<div style="font-weight: 700;">SPONSORS</div>
 		</div>
 	</a>
 </div>
<div style="height: 15px; border-bottom: 1px solid #74009b">&nbsp;</div>



        <div id="twitter_feed_container">
          <div id="twitter-header-replace"><img src="<?=base_url()?>images/twitter-header.png" alt="Festival tweets" />
          </div>
          <script src="http://widgets.twimg.com/j/2/widget.js" type="text/javascript"></script>
<script type="text/javascript">
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 3,
  interval: 6000,
  width: 232,
  height: 365,
  theme: {
    shell: {
      background: '#fff',
      color: '#ff6e91'
    },
    tweets: {
      background: '#fff',
      color: '#ff6e91',
      links: '#ff6e91'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('stkildafestival').start();

</script>
         <div id="twitter_footer_replace">
     	<a style="color:#ff6e91" href="http://twitter.com/#!/stkildafilmfest">@STKILDAFEST</a> -
        <a style="color:#ff6e91" href="#">#STKFEST</a>
          </div>
        </div> <!-- #twitter_feed -->
      </div> <!-- #home_right -->
    </div> <!-- #home_content -->
    <div class="clearboth"></div>