<link href="<?=base_url()?>css/jquery.clockpick.1.2.7.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url()?>js/jquery.clockpick.1.2.7.js" type="text/javascript" /></script>
<script src="<?=base_url()?>js/datepicker/ui.core.js" type="text/javascript" /></script>

<script src="<?=base_url()?>js/datepicker/ui.datepicker.js" type="text/javascript" /></script>

<link href="<?=base_url()?>js/datepicker/ui_themes/ui.all.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
  $j(document).ready(function(){
    $j("#date").datepicker({
	  dateFormat : 'yy-mm-dd'
	  });
	 $j('#start_time').clockpick({
	 starthour:6,
	 endhour:23
	 });
	  $j('#end_time').clockpick(
	  {
	   starthour:6,
	 endhour:23
	  });

            
  });
  
  </script>
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
}

</style>
<div id="left-content">
	<div class="content-title">
    	<img src="<?=base_url()?>images/admin/title-site-control.png" />        	
    </div>
    <div class="bar-title"><div>Update Music Band</div></div>
    <div class="content-area">
    	<form name="updatePhoto" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/cms/update_band_photo">
        <?php echo $this->session->flashdata('update_band_photo');?>
    	<input type="hidden" name="band_id" value="<?=$band['id']?>" />
        <div style="float:left;width:100px">
        <? if($band['photo'] != '')
					   {
					     $dir = md5("band".$band['id']);
					   ?>
                       <a href="<?=base_url()?>uploads/bands/<?= $dir?>/<?= $band['photo']?>"><img title='Click to view this image' src="<?=base_url()?>uploads/bands/<?= $dir?>/thumbnails/<?= $band['photo']?>"  alt="band-image" /></a>
                       <?
					   }
					   else
					   {
					   ?>
                         <img src="<?=base_url()?>images/no-image.png" alt="no-image" />
                       <?
					   }
					   ?>
        </div>
        <div style="float:left;margin-left:10px">
         <input type="file" name="userfile" /> (dimension 723px width x 350px height)
        </div>
        <div style="clear:both"></div><br/>
        <p><input type="button" class="button rounded" value="Update Image" onClick="document.updatePhoto.submit()" /></p>
        </form>
        <br/>
        <form name="updateBand" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/cms/update_band">
    	<input type="hidden" name="band_id" value="<?=$band['id']?>" />
        <table border="0" cellspacing="0" cellpadding="0" height="640">
                    <tr>
                      <td width="100px">Event Type</td>
                      <td>
                        <select name="event_type">
                          <option value="yalukit" <? if($band['event_type']=='yalukit'){ echo ' selected="selected"'; }?> >Yalukit Willam Ngargee</option>
                          <option value="livenlocal" <? if($band['event_type']=='livenlocal'){ echo ' selected="selected"'; }?>>Live N Local</option>
                         <option value="stkilda-laughs" <? if($band['event_type']=='stkilda-laughs'){ echo ' selected="selected"'; }?>>St Kilda Laughs</option>
                          <option value="freelivemusic" <? if($band['event_type']=='freelivemusic'){ echo ' selected="selected"'; }?> >Free Live Music</option>
                          <option value="thingstosee" <? if($band['event_type']=='thingstosee'){ echo ' selected="selected"'; }?> >Things to see and do</option>
                          <option value="familyfun" <? if($band['event_type']=='familyfun'){ echo ' selected="selected"'; }?> >Family Fun</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td width="100px">Band Name</td>
                      <td><input class="textfield" size="32" type="text" name="name" value="<?= $band['band_name']?>" /></td>
                    </tr>
                     <tr>
                      <td width="100px">Band Headline</td>
                      <td><input class="textfield" size="32" type="text" name="headline" value="<?= $band['band_headline']?>" /></td>
                    </tr>
                    <tr>

                      <td width="100px">Description</td>

                      <td><?php	
					  $cute = new Cute_model();
		$cute->init();
		$cute->setConfigure("Default");
		$cute->setWidth("500px");
		$cute->setHeight("300px");
			$cute->ID="description";
			$desc_text = $band['description'];
			$desc_text = str_replace('&lt;', '<', $desc_text);
			$desc_text = str_replace('&gt;', '>', $desc_text);
			$cute->Text = $desc_text;
			//$cute->EditorBodyStyle="font:normal 12px arial;";
			$cute->EditorWysiwygModeCss = base_url()."css/template.css";	
			$cute->UseHTMLEntities = true;
			
			$cute->Draw();
			$cute = null;
		?></td>
                    </tr>
                     <tr>

                      <td width="100px">Date</td>

                      <td><input class="textfield" size="32" type="text" name="date" id="date" value="<? echo $band['event_date']?>"  /></td>
                    </tr>
                     <tr>

                      <td width="100px">Start Time</td>

                      <td><input id="start_time" class="textfield" size="32" type="text" name="start_time" value="<?= $band['start_time']?>" /></td>
                    </tr>
                    <tr>
                        <td width="100px">&nbsp;</td>
                      <td>(Please specify the time format like provided eg 8:30PM)</td>
                    </tr>
                     <tr>

                      <td width="100px">End Time</td>
                     

                      <td><input id="end_time" class="textfield" size="32" type="text" name="end_time" value="<?= $band['end_time']?>" /></td>
                    </tr>
                    <tr>
                        <td width="100px">&nbsp;</td>
                      <td>(Please specify the time format like provided eg 8:30PM)</td>
                    </tr>
    	
    	<tr>
               <td width="100px">Venue</td>
               <td>
                      <div style="width:350px;float:left;margin-top:3px;margin-bottom:5px">
                       <div style="float:left;width:30px;"><input <?php $other = false; if($band['venue'] != '') { if($band['venue'] =='not specified' ||  $band['venue'] =='New Music Stage' || $band['venue'] =='Alfred Square Stage' || $band['venue'] =='Main Stage' || $band['venue'] =='ODonnell Gardens Stage' || $band['venue'] =='The Push Stage' || $band['venue'] =='Live N Local Stage' || $band['venue'] =='THINGS TO SEE AND DO' || $band['venue'] =='KIDZONE' || $band['venue'] =='DANCE ZONE') { echo 'checked="true"';} else{$other = true;}  }?> type="radio" name="venue_choice" value="dropdown" /></div>
                       <div  style="float:left;">
                        <select name="venue">
                          <option value="not specified">None</option>
                          <option value="New Music Stage" <? if($band['venue']=='New Music Stage'){ echo ' selected="selected"'; }?> >New Music Stage</option>
                         <option value="Alfred Square Stage" <? if($band['venue']=='Alfred Square Stage'){ echo ' selected="selected"'; }?> >Alfred Square Stage</option>
                          <option value="Main Stage" <? if($band['venue']=='Main Stage'){ echo ' selected="selected"'; }?> >Main Stage</option>
                         <option value="ODonnell Gardens Stage" <? if($band['venue']=="ODonnell Gardens Stage"){ echo ' selected="selected"'; }?> >ODonnell Gardens Stage</option>
                         <option value="The Push Stage" <? if($band['venue']=='The Push Stage'){ echo ' selected="selected"'; }?> >The Push Stage</option>
						 <option value="Live N Local Stage" <? if($band['venue']=='Live N Local Stage'){ echo ' selected="selected"'; }?> >Live N Local Stage</option>
						<option value="THINGS TO SEE AND DO" <? if($band['venue']=='THINGS TO SEE AND DO'){ echo ' selected="selected"'; }?> >Things To See & Do</option>
						  <option value="KIDZONE" <? if($band['venue']=='KIDZONE'){ echo ' selected="selected"'; }?> >KIDZONE</option>
						  <option value="DANCE ZONE" <? if($band['venue']=='DANCE ZONE'){ echo ' selected="selected"'; }?> >Dance zone</option>
                        </select>
                      </div>
                     
                      </div>
                </td>
       </tr>
       <tr>  
               
               <td width="100px">&nbsp;</td>
               <td>
                      
                      <div style="width:350px;float:left;margin-bottom:5px">
                       <div style="float:left;width:30px"><input  <?php if($other) {   echo 'checked="true"';}?>type="radio" name="venue_choice" value="typein" /></div>
                       <div  style="float:left;">
                       <input id="venue_specify" class="textfield" size="32" type="text" name="venue_specify" value="<?=$band['venue']?>" />
                      </div>
                     
                      </div>
               </td>
        </tr>
       </table>
       
        <table class="musicband" border="0" cellspacing="1" cellpadding="2">
                     <tr>

                      <td width="100px">Extra details</td>

                      <td><?php	
					   $cute = new Cute_model();
		$cute->init();
		$cute->setConfigure("Simple");
		$cute->setWidth("500px");
		$cute->setHeight("300px");
			$cute->ID="extra_details";
			$desc_text = $band['extra_details'];
			$desc_text = str_replace('&lt;', '<', $desc_text);
			$desc_text = str_replace('&gt;', '>', $desc_text);
			$cute->Text = $desc_text;
			//$cute->EditorBodyStyle="font:normal 12px arial;";
			$cute->EditorWysiwygModeCss = base_url()."css/template.css";	
			$cute->UseHTMLEntities = true;
			
			$cute->Draw();
			$cute = null;
			
		?></td>
                    </tr>
					<tr>
						<td width="100px">Website</td>
						<td><input id="website" class="textfield" size="52" type="text" name="website" value="<?=$band['website']?>" placeholder="https://www.google.com.au/"/></td>
					</tr>
					<tr>
						<td  width="100px">Myspace</td>
						<td><input id="myspace" class="textfield" size="52" type="text" name="myspace" value="<?=$band['myspace']?>" placeholder="https://www.myspace.com/"/></td>
					</tr>
					<tr>
						<td  width="100px">Facebook</td>
						<td><input id="facebook" class="textfield" size="52" type="text" name="facebook" value="<?=$band['facebook']?>" placeholder="https://www.facebook.com/"/></td>
					</tr>
					<tr>
						<td  width="100px">Twitter</td>
						<td><input id="twitter" class="textfield" size="52" type="text" name="twitter" value="<?=$band['twitter']?>" placeholder="https://www.twitter.com/"/></td>
					</tr>
                    <tr>
						<td>Other</td>
						<td><input id="bandcamp" class="textfield" size="72" type="text" name="bandcamp" value="<?=$band['bandcamp']?>" placeholder="https://www.other.com.au/"/></td>
					</tr>
                     <tr>
						<td>Soundcloud</td>
						<td><input id="reverbnation" class="textfield" size="72" type="text" name="reverbnation" value="<?=$band['reverbnation']?>" placeholder="https://www.soundcloud.com/"/></td>
					</tr>
                     <tr>
						<td>Youtube channel</td>
						<td><input id="youtube_channel" class="textfield" size="72" type="text" name="youtube_channel" value="<?=$band['youtube_channel']?>" placeholder="https://www.youtube.com/"/></td>
					</tr>
                    <tr>
						<td valign="top">Youtube Embed</td>
						<td><textarea name="youtube" cols="50" rows="6" /><?=$band['youtube']?></textarea><p></p>
							<? if($band['youtube'] != '')
								{
									echo '<div>'.html_entity_decode($band['youtube']).'</div><br/>';
								}
							?>
						</td>
					</tr>
					<tr>
						<td>Youtube Title</td>
						<td><input id="youtube_title" class="textfield" size="72" type="text" name="youtube_title" value="<?=$band['youtube_title']?>" /></td>
					</tr>
					<tr>
						<td>Youtube Subtitle</td>
						<td><input id="youtube_subtitle" class="textfield" size="72" type="text" name="youtube_subtitle" value="<?=$band['youtube_subtitle']?>" /></td>
					</tr>
                    <tr>
						<td width="100px">Music A-Z</td>
						<td><input <? if($band['music_atoz'] == 'Yes') { echo 'checked = true';} ?> id="music_atoz" class="textfield" type="checkbox" name="music_atoz"/></td>
					</tr>
                    <tr>
						<td width="100px">Featuring</td>
						<td><input <? if($band['featuring'] == 'Yes') { echo 'checked = true';} ?> id="featuring" class="textfield" type="checkbox" name="featuring"/></td>
					</tr>
                     <tr>   
                        <td width="100px">&nbsp;</td>           
                       <td><p><input type="button" class="button rounded" value="Update Band" onClick="document.updateBand.submit()" /></p></td>
                     </tr>
                 </table>
              </form>
              <form name="updateBandForm" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/cms/update_band_music">
                <input type="hidden" name="band_id" value="<?= $band['id'] ?>"/>
                <?php echo $this->session->flashdata('update_band_music');?>
               <table class="musicband" border="0" cellspacing="0" cellpadding="0" width="600">
                    <tr>

                      <td width="100px">Music Link 1</td>

                      <td><input size="28" type="file" name="userfile" /> (mp3 file only)</td>
                    </tr>
                    <tr>
                      <td width="100px">&nbsp;</td>

                      <td><input class="button rounded" type="submit" value="Update Music Link 1" name="updateMusic1" /></td>
                    </tr>
                    <tr>
                     <td width="100px">&nbsp;</td>
                     <td>
                     <?
                        if($band['music_link1'] != null)
	   {
	    $song_name1 = str_replace('.mp3',' ',$band['music_link1']);
		//<iframe width="60" height="26" src="/2014/uploads/bands/mp3.php?id='.$dir.'/music" frameborder="0" scrolling="no"><p>Your browser does not support iframes.</p>
            	  //</iframe>
            	  
        /*
		 * <audio controls>
					  <source src="horse.ogg" type="audio/ogg">
					  <source src="/2014/uploads/bands/'. $dir.'/music/'.$song_name1.'" type="audio/mpeg">
					
					</audio>*/    	  
	    echo '<div style="margin-top: 14px;">
		        <div class="music-player"><div class="music-name">'.$song_name1.'</div></div>
				
				  <div style="float:left;width:60px;height:26px">
				  
					
					<audio src="/2014/uploads/bands/'. $dir.'/music/'.$band['music_link1'].'" controls="controls" style="width:150px;">
					  Fallback content goes here
					</audio>
            		</div>
				
			  </div>';
	   }
	                ?>
                     </td>
                    </tr>
                 </table>
               </form>
             <br/>
                <form name="updateBandForm" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/cms/update_band_music">
                <input type="hidden" name="band_id" value="<?= $band['id'] ?>"/>
                    <table class="musicband" border="0" cellspacing="0" cellpadding="0" width="600">
                     <tr>

                      <td width="100">Music Link 2</td>

                      <td><input size="28" type="file" name="userfile" /> (mp3 file only)</td>
                     </tr>
                     <tr>
                       <td width="100">&nbsp;</td>

                      <td><input class="button rounded" type="submit" value="Update Music Link 2" name="updateMusic2" /></td>
                    </tr>
                    <td width="100px">&nbsp;</td>
                     <td>
                      <?
             
	  
	   if($band['music_link2'] != null)
	   {
		    $song_name2 = str_replace('.mp3','',$band['music_link2']);
	   echo '<div style="margin-top: 14px;">
	          <div class="music-player"><div class="music-name">'.$song_name2.'</div>
			  </div>
	              <div style="float:left;width:60px;height:26px"><iframe width="60" height="26" src="/2013/uploads/bands/mp3-2.php?id='.$dir.'/music" frameborder="0" scrolling="no"><p>Your browser does not support iframes.</p>
            	</iframe></div>
			  
			 </div>';
	   }
	   
	   
	  
	   ?>
                     </td>
                    </tr>
                   </table>
                </form>       
    	
    </div>
</div>