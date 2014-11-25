<div id="left-content">
	<div class="content-title">
    	<img src="<?=base_url()?>images/admin/title-site-control.png" />        	
    </div>
    <div class="bar-title"><div>Manage Home page youtube</div></div>
    <div class="content-area">
    	<form name="updateForm" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/cms/update_youtube">
    	<input type="hidden" name="id" value="<?=$youtube['id']?>" />
    	<div>Youtube URL</div>
    	<div style="clear:both; height: 10px"></div>
    	<div>
    		<textarea rows="6" cols="60" name="url" style="width: 350px"><?=$youtube['url']?></textarea><br/>(Width:355px x Height:227px)
    	</div>
    	
        <div style="clear:both; height: 20px"></div>
        <br/>
        <? if($youtube['url'] != '')
		{
			echo '<div>'.html_entity_decode($youtube['url']).'</div><br/>';
		}
		?>
		
		<div style="clear:both; height: 20px"></div>
		
		<div style="float: left; width: 50px">Title</div>
		<div><input name="title" type="text" style="width: 305px; color: #FF6E91;" value="<?=$youtube['title']?>"/></div>
		<div style="clear:both; height: 10px"></div>
		<div style="float: left; width: 50px">SubTitle</div>
		<div><input name="subtitle" type="text" style="width: 305px; color: #FF6E32;" value="<?=$youtube['subtitle']?>"/></div>
		<div style="clear:both; height: 20px"></div>
        <p>
    	<input type="button" class="button rounded" value="Save" onClick="document.updateForm.submit()" /></p>
        
		</form>
    	
    </div>
</div>