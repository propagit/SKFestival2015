
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
	
    <div id="mob-nav" class="hide">
     	<div class="mob-search-box">
          <input type="text" class="mob-search-input" placeholder="SEARCH">
        </div>
        
        <div class="container header-menu-phone">
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
                      <div onclick="show_sub(<?=$menu['id']?>)" class="top-menu">
                          <?=$menu['name']?> <span id="sign<?=$menu['id']?>"><?=$plus?></span>
                      </div>
                  <?
              }
              else 
              {
                  ?>
                      <div onclick="window.location='<?=base_url()?>page/pages/<?=$menu['url']?>'" class="top-menu">
                          <?=$menu['name']?> <span id="sign<?=$menu['id']?>"><?=$plus?></span>
                      </div>
                  <?
              }
			  
              if(count($links) > 0)
              {
              ?>
              <div id="subtop-menu-wrapper<?=$menu['id']?>" style="display: none;" class="mob-subnav">
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
                  <div onclick="window.location='<?=$url?>'" class="subtop-menu">
                      <?=$link['name']?>
                  </div>
                  
                  <?php
				  	# sub sub nav
					$child_links = $this->Menu_model->get_child_links($link['id']); 
				  	if($child_links != NULL){
                                           echo '<div class="mob-sub-sub-nav-wrap">';
                                                        foreach($child_links as $c){
                                                            $url2 = '#';
                                                            if($c['url'] != ''){
                                                                if(is_numeric($c['url'])){
                                                                   $url2 = base_url().'page/pages/'.$c['url'];
                                                                }else{
                                                                   $url2 = $c['url'];
                                                                }
                                                             }
                                                            if(strpos($url2,'Flipbook') > 0){
                                                                echo '<a class="mob-sub-sub-nav" target="_blank" href="'.$url2.'">'.$c['name'].'</a>';
                                                            }else{
                                                                echo '<a class="mob-sub-sub-nav" href="'.$url2.'">'.$c['name'].'</a>';
                                                            }
                                                        }//foreach $child_links
                                                    
                                            echo '</div>';
                                       }
                                       
                  ?>
                  
                  <?
                  }
                  ?>
              </div>
              <?
              }
          }
        ?>
        
        
        <div class="social_icons span6 remove-gutters mob-social">
        <?php $this->load->view('common/social_icons');?>
        </div>    
        
        
        </div><!--container-->
    </div><!--mob-nav-->

</div>