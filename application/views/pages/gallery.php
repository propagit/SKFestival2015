<script src="<?=base_url()?>js/jquery.lightbox-0.5.js" type="text/javascript" /></script>

<link href="<?=base_url()?>css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready(function(){
$("#gallery a").lightBox();
});
</script>
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
       		<div id="search_button" onclick="$('#search_band_form').submit()">Enter</div>
       		<div id="search_label" style="width: 354px; margin-right: 0">
       			<a href="<?=base_url()?>page/pages/119" style="color:#96BEFF">
       				Vote for your favourite <span style="font-weight: 400">New Music Stage Band</span>
       			</a>
       		</div>
       </div>
       <div style="clear:both"></div>
      <div id="content_wrapper">
        <div style="font-size:20px;font-weight:bold;color:#74009b">Photo Gallery</div><br/>
        <div style="font-size:14px;font-weight:lighter;color:#ff6e32">Click image to enlarge</div><br/>
        
          <div id="gallery"> <!-- #gallery -->
         <?php $dir = md5("cdkgallery".$gallery['id']);
		 $i = 1;
		 $end_right = '';
		    foreach($photos as $photo)
					{
						if($i%6 == 0)
						{
							$end_right = 'style="margin-right:0"';
						}
						else
						{
							$end_right = '';
						}
						echo '<div class="gallery-thumb" '.$end_right.'><a title="'.$photo['caption'].'" href="http://www.stkildafestival.com.au/2013/uploads/galleries/'.$dir .'/'.$photo['name'].'"><img src="http://www.stkildafestival.com.au/2013/uploads/galleries/'.$dir.'/thumbnails/'.$photo['name'].'" alt="" title="'.$photo['title'].'" alt="" /></a></div>';
						$i++;
					}
		?>
         </div>
         <div style="clear:both"></div>
      </div> <!-- #content_wrapper -->
     </div> <!-- #left_content -->