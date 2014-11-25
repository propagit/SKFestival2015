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
    <div class="bar-title"><div>Vote Result</div></div>
    <div class="content-area">
    	<div style="float: left; font-weight: 700; width: 300px;">
    		Band Name
    	</div>
    	<div style="float:left; font-weight: 700; width: 100px;">
    		Vote
    	</div>
    	<div style="clear:both; height: 5px;">
    	</div>
    	<?php
    		foreach($result as $r)
			{
			?>
				<div style="float: left; width: 300px;">
		    		<?=$r['band_name']?>
		    	</div>
		    	<div style="float:left; width: 100px;">
		    		<?=$r['count']-1?>
		    	</div>
		    	<div style="clear:both; height: 5px;">
		    	</div>
			<?php
			}
    	?>
    </div>
</div>