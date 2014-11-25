<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel='stylesheet' type='text/css' href='<?=base_url()?>css/admin/layout.css' />
<script type="text/javascript" src="<?=base_url()?>js/jquery.js"></script>
<script> var $j = jQuery.noConflict(); </script>
<script>
$j(function() { 
	searchbandkeyword();
});
function searchbandkeyword() {
	var keyword = $j('#keyword').val();
	//var type = $j('#type').val();
	$j.ajax({
		url: '<?=base_url()?>admin/cms/searchbandkeyword',
		type: 'POST',
		data: ({keyword:keyword}),
		dataType: "html",
		success: function(html) {
			getbands();
		}
	})	
}
function getbands() {
	$j.ajax({
		url: '<?=base_url()?>admin/cms/getbands',
		type: 'POST',
		data: ({page_id:'<?=$page['id']?>',row:'<?=$this->uri->segment(6)?>'}),
		dataType: "html",
		success: function(html) {
			$j('#bands-list').html(html);
		}
	})	
}
</script>
<title>Add band to page <?=$page['title']?></title>
<style>
body { background:#E8EDF2; margin:20px; }
p { padding:3px 0; }
dl { width:300px; }
dl dt { float:left; }
dl dd { float:right; }
.box-add { width:500px; }
.pages { float:left; }
.rowband { clear:both; border-bottom:1px solid #ccc; line-height:30px; }
.rowband .title { float:left; }
.rowband .button { float:right; height:20px;margin-top:5px }
.rowband .button a { color:#fff }
</style>
</head>

<body>
<div class="box-add">    
    <dl>
    	<dt>Search by keyword</dt>
    	<dd><input type="text" class="textfield rounded" id="keyword" onkeydown="searchbandkeyword()" value="<?=$this->session->userdata('s_keyword')?>" /></dd>
    </dl>
    <!--
    <dl>
    	<dt>Filter by</dt>
        <dd>
        	<select id="type" onchange="settype()">
            	<option value="0">Any type</option>
            	<option value="1"<?php if($this->session->userdata('s_type') == 1) print ' selected="selected"'; ?>>Film</option>
                <option value="2"<?php if($this->session->userdata('s_type') == 2) print ' selected="selected"'; ?>>SoundKILDA</option>
                <option value="3"<?php if($this->session->userdata('s_type') == 3) print ' selected="selected"'; ?>>Top 100</option>
            </select>
        </dd>
    </dl>
    -->
    <dl></dl>
    <div style="clear:both"></div>
    <br/>
    <div id="bands-list">
    
    </div>
</div>
</body>
</html>
