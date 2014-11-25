
<?php
	/*  * 
		Nav for mobile device
	 */

?>

<script>
var cur_id = 0;
function hide_all()
{
	<?
	$menus = $this->Menu_model->get_menus();
	foreach($menus as $menu)
	{
		$links = $this->Menu_model->get_links($menu['id'],0);
	?>
	jQuery('#subtop-menu-wrapper<?=$menu['id']?>').slideUp();
	<?
		if(count($links) > 0)
		{
		?>
		jQuery('#sign<?=$menu['id']?>').html('+');
		<?
		}
		else
		{
		?>
		jQuery('#sign<?=$menu['id']?>').html(' ');
		<?
		}
	?>
	
	<?
	}
	?>
}

function show_sub(id)
{
	//alert(id);
	
	hide_all();
	if(id != cur_id)
	{
		cur_id = id;
		jQuery('#subtop-menu-wrapper'+id).slideDown();
		jQuery('#sign'+id).html('-');
	}
	else
	{
		cur_id = 0;
		jQuery('#subtop-menu-wrapper'+id).slideUp();
		jQuery('#sign'+id).html('+');
	}
}

$(function(){
	$('#toggle-nav').click(function(){
		var $this = $(this);
		var target = $($this).attr('data-toggle');
		$('#'+target).slideToggle(600);
	});
});
</script>
<div id="menu-for-phone">
	<i class="fa fa-bars mob-nav-bars" id="toggle-nav" data-toggle="mob-nav"></i>
	
    <div class="container header-menu-phone hide" id="mob-nav">
    	<?php
	        $menus = $this->Menu_model->get_menus();
    	    $total_menus = count($menus);
        	$i = 1;
			foreach($menus as $menu)
			{
				$links = $this->Menu_model->get_links($menu['id'],0);
				$plus = '';    
				if(count($links) > 0)
				{
					$plus = '+';
				}
				if(count($links) > 0)
				{
					?>
						<button onclick="show_sub(<?=$menu['id']?>)" class="top-menu">
				    		<?=$menu['name']?> <span id="sign<?=$menu['id']?>"><?=$plus?></span>
				    	</button>
					<?
				}
				else 
				{
					?>
						<button onclick="window.location='<?=base_url()?>page/pages/<?=$menu['url']?>'" class="top-menu">
				    		<?=$menu['name']?> <span id="sign<?=$menu['id']?>"><?=$plus?></span>
				    	</button>
					<?
				}
				if(count($links) > 0)
				{
				?>
				<div id="subtop-menu-wrapper<?=$menu['id']?>" style="display: none;">
					<?php
					foreach($links as $link)
					{
						$url = '#';
                        if($link['url'] != ''){
                            if(is_numeric($link['url'])){
                                $url = base_url().'page/pages/'.$link['url'];
                            }else{
                                $url = $link['url'];
                            }
                        }
					?>
					<button onclick="window.location='<?=$url?>'" class="subtop-menu">
			    		<?=$link['name']?>
			    	</button>
					<?
					}
					?>
				</div>
				<?
				}
			}
		?>
	</div><!--container-->
</div>