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

<div id="left-content">
	<div class="content-title">
    	<img src="<?=base_url()?>images/admin/title-site-control.png" />        	
    </div>
    <div class="bar-title"><div>Add Music Band</div></div>
    <div class="content-area">
    	
        <form name="addBand" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/cms/adding_band">
    	
        <table border="0" cellspacing="0" cellpadding="0" height="600">
                    <tr>
                      <td width="100px">Event Type</td>
                      <td>
                        <select name="event_type">
                          <option value="yalukit">Yalukit Willam Ngargee</option>
                          <option value="livenlocal">Live N Local</option>
                         <option value="stkilda-laughs">St Kilda Laughs</option>
                          <option value="freelivemusic">Free Live Music</option>
                          <option value="thingstosee">Things to see and do</option>
                          <option value="familyfun">Family Fun</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td width="100px">Band Name</td>
                      <td><input class="textfield" size="32" type="text" name="name" /></td>
                    </tr>
                     <tr>
                      <td width="100px">Band Headline</td>
                      <td><input class="textfield" size="32" type="text" name="headline" /></td>
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
			$cute->EditorWysiwygModeCss = base_url()."css/template.css";	
			//$cute->EditorBodyStyle="font:normal 12px arial;";
			$cute->UseHTMLEntities = true;
			
			$cute->Draw();
			$cute = null;
		?></td>
                    </tr>
                     <tr>

                      <td width="100px">Date</td>

                      <td><input class="textfield" size="32" type="text" name="date" id="date"  /></td
                    ></tr>
                     <tr>

                      <td width="100px">Start Time</td>

                      <td><input id="start_time" class="textfield" size="32" type="text" name="start_time" /></td>
                    </tr>
                    <tr>
                        <td width="100px">&nbsp;</td>
                      <td>(Please specify the time format like provided eg 8:30PM)</td>
                    </tr>
                     <tr>

                      <td width="100px">End Time</td>
                     

                      <td><input id="end_time" class="textfield" size="32" type="text" name="end_time" /></td>
                    </tr>
                    <tr>
                        <td width="100px">&nbsp;</td>
                      <td>(Please specify the time format like provided eg 8:30PM)</td>
                    </tr>
    	
    	<tr>
               <td width="100px">Venue</td>
               <td>
                      <div style="width:350px;float:left;margin-top:3px;margin-bottom:5px">
                       <div style="float:left;width:30px;"><input checked="true" type="radio" name="venue_choice" value="dropdown" /></div>
                       <div  style="float:left;">
                        <select name="venue">
                          <option value="not specified">None</option>
                          <option value="Nova New Music Stage">Nova New Music Stage</option>
                         <option value="Alfred Square Stage">Alfred Square Stage</option>
                          <option value="Main Stage">Main Stage</option>
                         <option value="ODonnell Gardens Stage">ODonnell Gardens Stage</option>
                         <option value="The Push Stage">The Push Stage</option>
						 <option value="Live N Local Stage">Live N Local Stage</option>
						<option value="THINGS TO SEE AND DO">Things To See & Do</option>
						  <option value="KIDZONE">KIDZONE</option>
						  <option value="DANCE ZONE">Dance zone</option>
                        </select>
                      </div>
                     
                      </div>
                </td>
       </tr>
       <tr>  
               
               <td width="100px">&nbsp;</td>
               <td>
                      
                      <div style="width:350px;float:left;margin-bottom:5px">
                       <div style="float:left;width:30px"><input type="radio" name="venue_choice" value="typein" /></div>
                       <div  style="float:left;">
                       <input id="venue_specify" class="textfield" size="32" type="text" name="venue_specify" />
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
		//$cute->setConfigure("Simple");
		$cute->setWidth("500px");
		$cute->setHeight("300px");
			$cute->ID="extra_details";
			$cute->EditorWysiwygModeCss = base_url()."css/template.css";	
			//$cute->EditorBodyStyle="font:normal 12px arial;";
			$cute->UseHTMLEntities = true;
			
			$cute->Draw();
			$cute = null;
			
		?></td>
                    </tr>
					<tr>
						<td width="100px">Website</td>
						<td><input id="website" class="textfield" size="52" type="text" name="website" placeholder="https://www.google.com.au/"/></td>
					</tr>
					<tr>
						<td  width="100px">Myspace</td>
						<td><input id="myspace" class="textfield" size="52" type="text" name="myspace" placeholder="https://myspace.com/"/></td>
					</tr>
					<tr>
						<td  width="100px">Facebook</td>
						<td><input id="facebook" class="textfield" size="52" type="text" name="facebook" placeholder="https://www.facebook.com/"/></td>
					</tr>
					<tr>
						<td  width="100px">Twitter</td>
						<td><input id="twitter" class="textfield" size="52" type="text" name="twitter" placeholder="https://twitter.com/"/></td>
					</tr>
                    <tr>
						<td>Other</td>
						<td><input id="bandcamp" class="textfield" size="72" type="text" name="bandcamp" placeholder="https://other.com/"/></td>
					</tr>
                     <tr>
						<td>Soundcloud</td>
						<td><input id="reverbnation" class="textfield" size="72" type="text" name="reverbnation" placeholder="https://soundcloud.com/"/></td>
					</tr>
                     <tr>
						<td>Youtube channel</td>
						<td><input id="youtube_channel" class="textfield" size="72" type="text" name="youtube_channel" placeholder="https://youtube.com/"/></td>
					</tr>
                    <tr>
						<td valign="top">Youtube Embed</td>
						<td><textarea name="youtube" cols="50" rows="6" /></textarea><p></p></td>
					</tr>
                    <tr>
						<td width="100px">Music A-Z</td>
						<td><input id="music_atoz" class="textfield" type="checkbox" name="music_atoz"/></td>
					</tr>
                    <tr>
						<td width="100px">Featuring</td>
						<td><input id="featuring" class="textfield" type="checkbox" name="featuring"/></td>
					</tr>
                     <tr>   
                        <td width="100px">&nbsp;</td>           
                       <td><p><input type="button" class="button rounded" value="Add Band" onClick="document.addBand.submit()" /></p></td>
                     </tr>
                 </table>
              </form>
               
    	
    </div>
</div>