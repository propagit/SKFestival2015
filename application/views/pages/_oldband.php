<style type="text/css">
#music-container {
    margin-top: 0;
}
.music-player {
    background: url("/2013/images/track-music-bg.png") no-repeat scroll 0 0 transparent;
    height: 26px;
    text-align: left;
	width:294px;
	float:left;
}
.music-name {
    color: #fff;
    float: left;
    font-size: 14px;
    padding-left: 5px;
	width:289px;
	line-height:24px;
}

</style>
   <div id="page_content_outside">
    <div id="page_content">
     <div id="left_content">    
     
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
       <div style="clear:both"></div>
      <div id="content_wrapper" style="min-height:700px">
	    <?php
		  if(isset($band))
		  {
			  $dir = md5("band".$band['id']);
			  ?>
			 <div id="band_large_image"><img width="724px" height="351px" src="<?php echo base_url()?>uploads/bands/<?php echo $dir?>/<?= $band['photo']?>" alt="" /></div>
             <div id="band_container">
               <div id="left_band_container">
                 <p class="heading_content_page"><?php echo $band['band_name']?></p>
                 <p class="subheading_content_page" style="margin-top:10px"><?php echo date('l d Y',strtotime($band['event_date']));?></p>
                 <p class="subheading2_content_page" style="margin-top:10px"><?php echo $band['start_time']; if($band['end_time'] != '') { echo ' - '.$band['end_time'] ; } ?></p>
                 <?php if($band['venue'] != '' && $band['venue'] != 'not specified') { ?><p class="subheading2_content_page"><?php echo $band['venue'] ; ?></p><?php } ?>
                 <?php if($band['extra_details'] != '') { ?><div class="extra_details"><?php echo $band['extra_details'] ; ?></div><?php } ?>
                 <?php if($band['website'] != '') { ?><div class="extra_details"><a target="_blank" " href="http://<?php echo $band['website'] ; ?>"><?php echo $band['website'] ; ?></a></div><?php } ?>
                 <div id="band_social">
                   <?php if($band['facebook'] != '') { ?><div id="facebook_icon"><a href="http://<?php echo $band['facebook'] ; ?>" target="_blank"><img src="<?=base_url()?>images/facebook.png" alt="" /></a></div><?php } ?>
                   <?php if($band['twitter'] != '') { ?><div id="twitter_icon"><a href="https://<?php echo $band['twitter'] ; ?>" target="_blank"><img src="<?=base_url()?>images/twitter.png" alt="" /></a></div><?php } ?>
                    <?php if($band['youtube_channel'] != '') { ?><div id="youtube_icon"><a href="http://<?php echo $band['youtube_channel'] ; ?>" target="_blank"><img src="<?=base_url()?>images/youtube.png" alt="" /></a></div><?php } ?>
                    <?php if($band['myspace'] != '') { ?><div id="myspace_icon"><a href="http://<?php echo $band['myspace'] ; ?>" target="_blank"><img src="<?=base_url()?>images/myspace.png" alt="myspace" /></a></div><?php } ?>
                    <?php if($band['reverbnation'] != '') { ?><div id="soundcloud_icon"><a href="http://<?php echo $band['reverbnation'] ; ?>" target="_blank"><img src="<?=base_url()?>images/soundCloud.png" alt="" /></a></div><?php } ?>
                    <?php if($band['bandcamp'] != '') { ?><div id="other_icon"><a href="http://<?php echo $band['bandcamp'] ; ?>" target="_blank"><img src="<?=base_url()?>images/other.png" alt="" /></a></div><?php } ?>
                 </div>
                 <div style="clear:both"></div>
                  <?php  if($band['youtube'] != '')
				  {
                    if($band['description'] != '') { ?><div style="margin-top:10px" class="text_content_page"><?php echo $band['description'] ; ?></div>
					<?php } 
				  }?>
               </div>
                <div id="right_band_container">
                	<?
                        if($band['music_link1'] != null)
					   {
					    $song_name1 = str_replace('.mp3',' ',$band['music_link1']);
					    echo '<div style="clear:both">
						        <div class="music-player">
								  <div class="music-name">'.$song_name1.'</div>
								</div>
								  <div style="float:left;width:60px;height:26px;margin-left:1px"><iframe src="/2013/uploads/bands/mp3.php?id='.$dir.'/music" width="60" height="26" frameborder="0" scrolling="no"><p>Your browser does not support iframes.</p></iframe>     </div>
							    
							  </div>';
					   }
	                ?>
                    <?
                        if($band['music_link2'] != null)
					   {
					    $song_name2 = str_replace('.mp3',' ',$band['music_link2']);
					    echo '<div style="clear:both"></div><div style="clear:both;margin-top:5px">
						        <div class="music-player">
								  <div class="music-name">'.$song_name2.'</div>
								</div>
								  <div style="float:left;width:60px;height:26px;margin-left:1px"><iframe src="/2013/uploads/bands/mp3-2.php?id='.$dir.'/music" width="60" height="26" frameborder="0" scrolling="no"><p>Your browser does not support iframes.</p></iframe>     </div>
							    
							  </div>';
					   }
	                ?>
                	<? if($band['youtube'] != '')
						{
							echo '<div style="clear:both;"></div>
							<div style="margin-top:15px">'.html_entity_decode($band['youtube']).'
							<div class="subheading_content_page" style="margin-top:15px">'.$band['youtube_title'].'</div>
        					<div class="subheading2_content_page" style="margin-top:4px">'.$band['youtube_subtitle'].'</div>
							</div><br/>';
						}
						else
						{
							if($band['description'] != '') { ?>
                            <div style="clear:both;"></div><div style="margin-top:15px" class="text_content_page"><?php echo $band['description'] ; ?></div>
                            
                            <?php
							}
						}
					?>
					
               </div>
             </div>
          <?php
		  }
		  else
		  {
			  echo 'Page not found';
		  }
		?>
      </div> <!-- #content_wrapper -->
     </div> <!-- #left_content -->