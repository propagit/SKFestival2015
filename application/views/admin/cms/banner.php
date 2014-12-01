<script>
function deletebanner(id) {
	if(confirm('Are you sure you want to delete this banner')) {
		$j.ajax({
			url: '<?=base_url()?>admin/cms/deletebanner',
			type: 'POST',
			data: ({id:id}),
			dataType: "html",
			success: function(html) {
				$j('#banner-' + id).fadeOut();
			}
		})		
	}
}
</script>
<div id="left-content">
<div class="content-title">
    	<img src="<?=base_url()?>images/admin/title-site-control.png" />        	
    </div>
<div class="bar-title">

    <div class="text">Ad Space Manager</div>
    <div class="cr"></div>
</div>

<div class="box">
	<h3>Add New Ad</h3>
    <p>Add new banner by browsing your computer and uploading them. Please upload an image with size of <b>1180 pixel width</b> and <b>85 pixel height</b> for the best view.</p><br />
    <form method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/cms/addbanner">
    <input type="file" name="banner" />
    <p><br /><input type="submit" class="button rounded" value="Upload" /></p>
    </form>
</div>
<hr />
<div class="box bgw">
	<?php foreach($banners as $banner) { ?>
    <div class="banner" id="banner-<?=$banner['id']?>">
    	<div class="thumb">
        <?php if (strstr($banner['name'],'.swf')) { ?>
        	<object xcodebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" height="110" width="260" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" >
            <param name="Movie" value="<?=base_url()?>photos/banners/<?=$banner['name']?>" />
            <param name="allowFullScreen" value="true"/>
            <embed src="<?=base_url()?>photos/banners/<?=$banner['name']?>" width="355" height="172" allowfullscreen="true"  type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" ></embed> 
            </object>
        <?php } else { ?>
        	<img src="<?=base_url()?>photos/banners/<?=$banner['name']?>" />
       	<?php } ?>
        </div>
        <div class="url">
            <form method="post" action="<?=base_url()?>admin/cms/updatebanner">
            <input type="hidden" name="id" value="<?=$banner['id']?>" />
        	<p>Url (Clicked: <?=$banner['clicked']?>)</p>
            <p><input type="text" name="url" class="textfield rounded" value="<?=$banner['url']?>" size="40" /></p>
            <p>
            	<input type="submit" class="button rounded" value="Update" />
                <input type="button" class="button rounded" value="Delete" onclick="deletebanner(<?=$banner['id']?>)" />
            </p>
        	</form>
        </div><br />
    </div>
    <?php } ?>
</div>
</div>

