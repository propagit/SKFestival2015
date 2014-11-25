<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
  <script type="text/javascript" src="<?=base_url()?>js/jquery.ui.core.js"></script>
  <script type="text/javascript" src="<?=base_url()?>js/jquery.widget.js"></script>
  <script type="text/javascript" src="<?=base_url()?>js/jquery.mouse.js"></script>
  <script type="text/javascript" src="<?=base_url()?>js/sortable.js"></script>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/popup.css"> 
<script type="text/javascript" src="<?=base_url()?>js/popup.js"></script> 
<script>
var $j = jQuery.noConflict();  
$j(function() {
    
	updatepos();
    previewnav();
    
		//CLOSING POPUP    
		//Click out event!
		$j("#background-popup").click(function(){
			disablePopup();
		});
    //Press Escape event!
		$j(document).keypress(function(e){
			if(e.keyCode==27 && popupStatus==1){
				disablePopup();
			}
			});
    	
	
	// Drag and drop
	$j("#list ul").sortable({ 
		opacity: 0.8, 
		cursor: 'move', 
		update: function() {			
			var order = $j(this).sortable("serialize") + '&update=update'; 
			$j.post("<?=base_url()?>admin/cms/reorderlink", order, function(html){	
				previewnav();
			});
		}
	});
});

function updatepos() {
    <? if($this->session->flashdata('link')){?>
	//alert('test');
	var parentid = <?=$this->session->flashdata('link')?>;  
	<? } else{?>var parentid = $j('#parentid').val();  <? }?>
	
    $j.ajax({
        url: '<?=base_url()?>admin/cms/getposlist2',
        type: 'POST',
        data: ({menuid:'<?=$menu['id']?>',parentid:parentid}),
        dataType: "html",
        success: function(html) {
            $j('#sortable').html('');
			$j('#sortable').html(html);
        }
		
    })
}
function addlink() {
    if ($j('#name').val() == "") {
        alert('Please enter a title for the link');
    } else {
        document.addForm.submit();
    }
}
function updatelink() {
   
        document.updateForm.submit();
    
}
function editlink(id) {
    $j.ajax({
        url: '<?=base_url()?>admin/cms/getlink',
        type: 'POST',
        data: ({id:id}),
        dataType: "html",
        success: function(html) {
            $j('#popup-content').html(html);
            centerPopup();
            loadPopup();
        }
    })    
}
function deletelink(id) {
    if (confirm('Are you sure to delete this link?')) {
        window.location = '<?=base_url()?>admin/cms/deletelink/' + id;
    }
}
function updateurl() {
    var path = $j('#page-title').val();
    $j('#url').val(path);
}
function updateurl2() {
    var path = $j('#page-title2').val();
    $j('#url2').val(path);
}
function previewnav() {
	$j.ajax({
		url: '<?=base_url()?>admin/cms/previewnav',
		type: 'POST',
		data: ({menu_id:'<?=$menu['id']?>'}),
		dataType: "html",
		success: function(html) {
			$j('#menu-preview').html(html);
		}
	})	
}
</script>
<style>

.box { padding:15px 25px; clear:both; color:#575757; }
.box-add { float:left; width:300px; }
.box-add dl { padding:4px 0; }
.box-add dl dt input.textfield { width:292px; }
.box-add dl dd input.textfield { width:190px; }
.box-add dl dd select { width:188px; }
.box-edit { float:right; padding:10px; width:240px; background:#fff; border:1px solid #ccc; margin-bottom:20px; }

ul.me { list-style:none; }
ul.me li { padding:2px 0; }
ul.me li a { color:#666; text-decoration:none; }
ul.me li a img { }
ul.me li a:hover { color:#789424; }
ul.me ul { list-style:none; }
ul.me li.par ul {margin:0 0 0 3px; }
ul.me li.par ul li span { color: #789424; letter-spacing: -1px; }

ul.em { list-style:none; padding:0;}
ul.em li { display:block; padding:3px 10px; background:#e5e5e5; border:1px solid #999; margin:2px 0; }
ul.em ul { list-style:none; margin:3px 0 0 0; padding:0}
ul.em ul li { background:#f5f5f5; }
ul.em li.nochild div, ul.em ul li div { float:right; margin-right:-6px; opacity:0; position:relative; }
ul.em li.nochild:hover div, ul.em ul li:hover div { opacity:1; }

.box-edit2 { width:300px; margin:30px 0 10px 0; }  
</style>
<div id="left-content">
    <div class="content-title"><img src="<?=base_url()?>images/admin/title-site-control.png" />        
    </div>
    <div class="bar-title"><div>Manage Navigation</div></div>    
    
    <div class="box">
     
    <div class="box-add">
          <h3>Update link for the <span style="text-transform:uppercase"><?php echo $menu['name'];?></span> menu</h3>
          <form name="updateForm" method="post" action="<?=base_url()?>admin/cms/updatetoplevellink">
          <input type="hidden" name="menu_id2" value="<?=$menu['id']?>" />
          <table cellpadding="0" cellspacing="0" border="0" width="300" height="80">
              <tr><td width="60">Link to</td><td> 
                
                <select id="page-title2" onchange="updateurl2()" style="width:200px; height:25px; padding:4px;">
                <option>Please select a page</option>
                <?
				
                if ($pages) { 
				    $selected = '';
                    foreach($pages as $page) { 
					if($menu['url'] == $page['id'])
					{
						$selected = 'selected="selected"';
					}
					else
					{
						$selected = '';
					}
					?>
                    <option <?=$selected?> value="<?=$page['id']?>">|-- <?=$page['title']?></option>
                <?php }
                    } 
                  
                ?>
                
            </select></td></tr>
            <tr>
          <td>&nbsp;</td>
          <td><input type="text" class="textfield rounded" name="url2" value="<?php echo $menu['url']?>" id="url2"  />
          </td>
            </tr>
            <tr>
             <td>&nbsp;</td>
        	<td><input type="button" class="button rounded" value="Update" onclick="updatelink()" /></td>
        </tr>
          </table>
          </form>
          <hr/><br/>
        <h3 style="margin-top:0">Add new link to the <span style="text-transform:uppercase"><?php echo $menu['name'];?></span> menu</h3>
        <form name="addForm" method="post" action="<?=base_url()?>admin/cms/addlink">
        <input type="hidden" name="menu_id" value="<?=$menu['id']?>" />
        <table cellpadding="0" cellspacing="0" border="0" width="300" height="150">
        <tr><td width="60">Name</td><td><input type="text"  style="width:200px; height:25px; padding-left:5px;margin-bottom: 5px;" name="name" id="name" /></td></tr>
		<tr><td>Parent</td>
        	<td><select name="parent_id" id="parentid" style="width:200px; height:25px; padding:4px;">
                <option value="0">No parent</option>
                <?php foreach($links as $link) { ?>
                <option value="<?=$link['id']?>" <? if($this->session->flashdata('link')==$link['id']){echo "Selected=selected";}?>><?=$link['name']?></option>
                <?php } ?>
            </select>
            </td>
        </tr>
        <tr><td>Link to</td><td> 
                
                <select id="page-title" onchange="updateurl()" style="width:200px; height:25px; padding:4px;">
                <option>Please select a page</option>
                <?
				
                if ($pages) { 
                    foreach($pages as $page) { ?>
                    <option value="<?=$page['id']?>">|-- <?=$page['title']?></option>
                <?php }
                    } 
                  
                ?>
                
            </select></td></tr>
            <!--
        <tr>
        	<div id="divurl">
            <td>
            
        <div id="tagurl">Url</div></td>
        	<td><input type="text" style="width:200px; height:25px;padding-left:5px;" name="url" id="url" value="http://" /></div></td>
        </tr>    
        -->
        <tr>
          <td>&nbsp;</td>
          <td><input type="text" class="textfield rounded" name="url" id="url" value="http://" />
          </td>
        </tr>
        <tr>
             <td>&nbsp;</td>
        	<td><input type="button" class="button rounded" value="Add" onclick="addlink()" /></td>
        </tr>
   		</table>
        </form>
    </div>
    
    <div class="box-edit" id="menu-preview">
        
    </div>
    <div style="clear:both"></div>
    <div class="box-edit2" id="list">    	
     <p>Drag & drop the bar to re-order the navigation</p>
    	<ul class="em">
    	<?php foreach($links as $link) {
		$children2 = $this->Menu_model->get_links($menu['id'],$link['id']);
		if(!$children2) { ?>
        	<li id="link_<?=$link['id']?>" class="nochild"><a href="javascript:editlink(<?=$link['id']?>)"><?=$link['name']?></a> <div><a href="javascript:deletelink(<?=$link['id']?>)"><img src="<?=base_url()?>images/admin/delete-small.png" /></a></div></li>
        <?php } else { ?>
        	<li id="link_<?=$link['id']?>" class="haschild"><a href="javascript:editlink(<?=$link['id']?>)"><?=$link['name']?></a>
                <ul>
                    <?php foreach($children2 as $child) { ?>
                    <li id="link_<?=$child['id']?>"><a class="child_link" href="#" onclick="editlink(<?=$child['id']?>)"><?=$child['name']?></a> <div><a href="javascript:deletelink(<?=$child['id']?>)"><img src="<?=base_url()?>images/admin/delete-small.png" /></a></div></li>
                    <?php } ?>
                </ul>
          	</li>
		<?php } 
		} ?>        
        </ul>
    </div>
    <!--
    <form name="posform" id="posform" method="post" action="<?=base_url()?>admin/cms/listposorder">
	<input type="hidden" name="pos" id="pos" />
    <input type="hidden" name="parentpos" id="parentpos" />
    <input type="hidden" name="parentidpos" id="parentidpos" />
    </form>
   -->
     <div style="clear:both"></div>
   
</div>
</div>
<div id="popup-box">
    <div id="popup-content" style="background-color:#fff!important; width:330px!important; height:190px!important;" >
        
    </div>
</div>
<div id="background-popup"></div>