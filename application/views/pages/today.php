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
      <div id="content_wrapper">
	    <?php //if(isset($page['content']))  
		 //{
			 //echo $page['content'];
			 if(isset($bands))
			 {
				 $counter =1;
				 ?>
                 <div style="margin-top:15px">
                 <?php
	             foreach($bands as $band) 
	             { 
			 ?>
                   <div class="page_band" <?php if($counter%3==0) { echo 'style="margin-right:0px"';}?>>
                      <div>
			<?php
				$dir = md5("band".$band['id']);
			?>
               <a href="<?=base_url()?>band/<?=$band['id']?>"><img src="<?=base_url()?>uploads/bands/<?=$dir?>/<?=$band['photo']?>" alt="" width="231px" height="112px"/></a>
        </div>
         		 <p class="heading_content_page" style="margin-top:15px;"><?php echo $band['band_name']?></p>
                 <p class="subheading_content_page" style="margin-top:10px"><?php echo date('l d Y',strtotime($band['event_date']));?></p>
                 <p class="subheading2_content_page" style="margin-top:10px"><?php echo $band['start_time']; if($band['end_time'] != '') { echo ' - '.$band['end_time'] ; } ?></p>
                 <?php if($band['venue'] != '' && $band['venue'] != 'not specified') { ?><p class="subheading2_content_page"><?php echo $band['venue'] ; ?></p><?php } ?>
             
                  <?php if($band['description'] != '') { ?><p style="margin-top:10px;width:231px" class="text_content_page"><?php echo substr($band['description'],0,strrpos(substr($band['description'],0,200),' ')) ; ?>...</p><?php } ?>
                  <p style="margin-top:10px"><a class="text_content_page" href="<?=base_url()?>band/<?php echo $band['id'];?>">Read more</a></p>
                   </div>
                   <?php if($counter%3==0) { echo '<div style="clear:both;height:30px"></div>';}?>
         <?php
		  $counter++; 
				 }
				 ?> </div>
                 <?php
				 echo '<div style="clear:both;"></div>';
			 }
			 else {echo 'No Band Will Perform at This Date';}
			 
		 //} 
		 //else { echo 'Page Not Found';}?>
      </div> <!-- #content_wrapper -->
     </div> <!-- #left_content -->