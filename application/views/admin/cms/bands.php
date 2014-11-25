<script>
$j(function() {
	$j('.menu-row *').tooltip({
		showURL: false
	});
	
});
function delete_band(id)
{
	if (confirm('Are you sure you want to delete this band?')) {		
		xmlhttp = GetXmlHttpObject();
		if (xmlhttp == null)
		{
			alert ("Your browser does not support AJAX!");
			return;
		}
		
		var url = "<?=base_url()?>admin/cms/delete_band/";
		url = url + id;
		xmlhttp.open("GET",url,true);
		xmlhttp.send(null);
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4)
			{
				if (xmlhttp.status == 200) {
					var result = xmlhttp.responseText;
					if (result.match("Ok")) {
						$j("#menu-" + id).fadeOut("normal");
					}
					else {
						alert("There was an error when deleting this band");
					}				
				}
			}
		};
	} else {
		return false;
	}
}

</script>
<div id="left-content">
	<div class="content-title"><img src="<?=base_url()?>images/admin/title-site-control.png"  alt="cms site control" /></div>
    <div class="bar-title"><div>Manage Music Bands</div></div>
    <div class="content-area">
       <div style="width:380px">
                
                	<div><a href="<?=base_url()?>admin/cms/add_band/"><input type="button" class="button rounded" value="Add New Band" /></a></div>
                 
            <hr/>
        </div>
        <div class="menu-area">
                	<div class="input"><input type="button" class="button rounded" value="Current Music Bands" /></div>
                <br/>     
        	<?php foreach($bands as $b): ?>
        	<div class="menu-row" id="menu-<?=$b['id']?>">
            	<div class="title"><a href="<?=base_url()?>admin/cms/get_band/<?=$b['id']?>" title="Go to this band"><?=$b['band_name']?></a></div>
                
                <div class="action">
                	<a href="<?=base_url()?>admin/cms/get_band/<?=$b['id']?>" title="Go to this menu" >Edit</a>
                	<a href="#" onclick="return delete_band(<?=$b['id']?>)">Delete</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>