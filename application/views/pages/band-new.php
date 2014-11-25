<script>
//alert('ss');
jQuery('#menu-for-phone').addClass('hidemenu');
jQuery('#menugap').addClass('hidemenu');

</script>
<?php
	if(isset($band))
	{
  		$dir = md5("band".$band['id']);
	
?>
<style>
#youtube-wrapper iframe
{
	width:100%;
}

.social-a:hover
{
	text-decoration: none;
}
</style>
<div class="navbar navbar-inverse navbar-fixed-top">
<img class="visible-phone" src="<?php echo base_url()?>uploads/bands/<?php echo $dir?>/<?= $band['photo']?>" alt="" />
</div>
<div class="container white-container">
		<div class="row-fluid">
			<div class="span8">
				
			 	<div id="band_large_image ">
             		<img class="hidden-phone" src="<?php echo base_url()?>uploads/bands/<?php echo $dir?>/<?= $band['photo']?>" alt="" style="width:100%"/>
             	</div>
             	<div style="clear:both; height:30px;"></div>
             	<div class="row-fluid">            
               		<div class="span6">
                    	<p class="heading_content_page"><?php echo $band['band_name']?></p>
                 		<p class="subheading_content_page" style="margin-top:10px"><?php echo date('l d Y',strtotime($band['event_date']));?></p>
                 		<p class="subheading2_content_page" style="margin-top:10px"><?php echo $band['start_time']; if($band['end_time'] != '') { echo ' - '.$band['end_time'] ; } ?>
                        	<br>
                            <?php echo $band['venue'];?>
                            <br><br>
                            <?php echo $band['extra_details'];?>
                            <br><br>
                            
                            <a  href="http://<?php echo $band['website'];?>" target="_blank"><?php echo $band['website'];?></a>
                            <br><br>
                        </p>
                        <div id="band_social">
					   		<?php if($band['facebook'] != '') { ?><div id="facebook_icon" style="float:left;"><a class="social-a" href="http://<?php echo $band['facebook'] ; ?>" target="_blank"><i style="color:#64d7c3" class="icon-facebook social-logo" ></i></a></div><?php } ?>
                       		<?php if($band['twitter'] != '') { ?><div id="twitter_icon" style="margin-left:30px;float:left;"><a class="social-a" href="https://<?php echo $band['twitter'] ; ?>" target="_blank"><i style="color:#64d7c3" class="icon-twitter social-logo"></i></a></div><?php } ?>
                        	<?php if($band['youtube_channel'] != '') { ?><div id="youtube_icon" style="margin-left:30px;float:left;"><a class="social-a" href="http://<?php echo $band['youtube_channel'] ; ?>" target="_blank"><i style="color:#64d7c3" class="icon-youtube social-logo"></i></a></div><?php } ?>
                        	<?php if($band['myspace'] != '') { ?><div id="myspace_icon" style="margin-left:30px;float:left;"><a class="social-a" href="http://<?php echo $band['myspace'] ; ?>" target="_blank"><img src="<?=base_url()?>images/myspace.png" alt="myspace" /></a></div><?php } ?>
                        	<?php if($band['reverbnation'] != '') { ?><div id="soundcloud_icon" style="margin-left:30px;float:left;"><a class="social-a" href="http://<?php echo $band['reverbnation'] ; ?>" target="_blank"><img src="<?=base_url()?>images/soundCloud.png" alt="" /></a></div><?php } ?>
                        	<?php if($band['bandcamp'] != '') { ?><div id="other_icon" style="margin-left:30px;float:left;"><a class="social-a" href="http://<?php echo $band['bandcamp'] ; ?>" target="_blank"><img src="<?=base_url()?>images/other.png" alt="" /></a></div><?php } ?>
                     	</div>
                        <div style="clear:both; height:15px;"></div>
                        
                        <?
                        if($band['music_link1'] != null)
					   {
					   	//<iframe src="/2014/uploads/bands/mp3.php?id='.$dir.'/music" width="60" height="26" frameborder="0" scrolling="no"><p>Your browser does not support iframes.</p></iframe>
					    $song_name1 = str_replace('.mp3',' ',$band['music_link1']);
						$song_name1 = str_replace('.MP3',' ',$band['music_link1']);
					    echo '<div style="clear:both">
						        <div class="music-player">
								  <div class="music-name">'.$song_name1.'</div>
								</div>
								  <div style="width:100%;">
								       <audio src="/2014/uploads/bands/'. $dir.'/music/'.$band['music_link1'].'" controls="controls" style="width:100%; background:#7800FF">
										  Fallback content goes here
										</audio>
								  </div>
							    
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
								  <div style="float:left;width:60px;height:26px;margin-left:1px"><iframe src="/2014/uploads/bands/mp3-2.php?id='.$dir.'/music" width="60" height="26" frameborder="0" scrolling="no"><p>Your browser does not support iframes.</p></iframe>     </div>
							    
							  </div>';
					   }
	                ?>
                	<? if($band['youtube'] != '')
					   {
							echo '<div style="clear:both;"></div>
							<div style="margin-top:15px" id="youtube-wrapper">'.html_entity_decode($band['youtube']).'
							<div class="subheading_content_page" style="margin-top:15px">'.$band['youtube_title'].'</div>
        					<div class="subheading2_content_page" style="margin-top:4px">'.$band['youtube_subtitle'].'</div>
							</div><br/>';
					   } ?>
                    </div>
                    <div class="span6">
                    	<? if($band['description'] != '') { ?><div class="text_content_page"><?php echo $band['description'] ; ?></div> <? }?>
                    </div>
				</div>
                <? } ?>
                
                <!-- <div id="search-phone-wrapper">
					<div id="search-phone-label">
						<i class="icon-search"></i>&nbsp;&nbsp;&nbsp;SEARCH
					</div>
					<div id="search-phone-input">
						<input id="search-phone" type="text" style="margin: 0px">&nbsp;&nbsp;&nbsp;
						<i class="icon-ok"></i>
					</div>
					<div style="clear: both"></div>
				</div> -->
            </div>
            <div class="span4">
            	<div class="visible-phone" style="height:30px;"></div>
				<?=$this->load->view('common/right-page');?>
            </div>
		</div>		
</div>