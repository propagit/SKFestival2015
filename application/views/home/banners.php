<?php
	$all = $this->News_sticker_model->get_published();
	$dots = '';
	$items = '';
	$count = 0;
	foreach($all as $alls){
		$dots .= '<li data-slide-to="'.$count.'" data-target="#stkildafestival_banners" '.($count == 0 ? 'class="active"' : '').'></li>';
			 $items .= '<div class="item '.($count == 0 ? 'active' : '').'">
						<a href="'.$alls['url'].'">
							<img src="'.base_url().'photos/news_sticker/'.$alls['image'].'" />
						
							<div class="item_text_box hide">
								<div class="item_text_overlay"></div>
								<div class="item_txt">
									<span class="item_heading">'.$alls['heading'].' - '.$alls['subheading'].'</span>
									<span class="item_description">'.$alls['description'].'</span>
								</div>
							</div>
						
						</a>
					</div>	
					'; 
		$count++;
		
	}
?>

<div class="banners">
    <div id="stkildafestival_banners" class="carousel slide carousel-banner">
        <ol class="carousel-indicators cindicator">
            <?=$dots;?>
        </ol>
        <div class="carousel-inner">
            <?=$items;?>          
        </div>
        <a class="left carousel-control" data-slide="prev" href="#stkildafestival_banners"><i class="icon-angle-left"></i></a>
        <a class="right carousel-control" data-slide="next" href="#stkildafestival_banners"><i class="icon-angle-right"></i></a>
    </div>
</div><!--banners-->


<script>
$(document).ready(function() 
{
	$('.carousel').carousel({
		interval: 6000
	})
});
</script>