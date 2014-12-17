        <div class="container white-container">
                <div class="row-fluid">
                	<div class="span12 bordered-top remove-gutters">
                       <div id="ad-space" class="carousel slide" style="margin-bottom:0;">
                       		<div class="carousel-inner">
                    		<?php
							$ad_banners = $this->News_sticker_model->get_banners();
							if($ad_banners){
								$count = 0;
								foreach($ad_banners as $banner){
							?>
                            <div class="item <?=$count ? '' : 'active';?>">
                                <a href="#" onclick="track_ads('<?=base_url();?>page/banner/<?=$banner['id'];?>','<?=$banner['name'];?>')">
                                    <img style="width: 100%" alt="" src="<?=base_url()?>photos/banners/<?=$banner['name']?>"/>
                                </a>
                            </div>
                            <?	
								$count++;
								}
							}
                    		?>
                            </div>
                    	</div> 
                    </div>
                
                
                
                    <div class="span12 remove-gutters">
                    	<?php if(0){ ?>
                        <!--<div class="footer_text_sponsor">2014 SPONSORED BY</div>
                        <div class="all-sponsors hidden-phone" style="text-align: center;" >
                        	
                        	<img class="img-footer-sponsor" alt="" src="<?=base_url()?>images/promotional_colour-(vector).png" style="margin-right:100px;"/>
                        	<img class="img-footer-sponsor" alt="" src="<?=base_url()?>images/Arts_Victoria_Logo.png" style="margin-right:100px;"/>
                        	<img class="img-footer-sponsor" alt="" src="<?=base_url()?>images/7MATE_LOGO_CMYK.png" style="margin-right:100px;"/>
                        	<img class="img-footer-sponsor" alt="" src="<?=base_url()?>images/NOVA_HERO_squared.png" />
                        </div>-->
                        <?php } ?>
                        
                        <div class="hidden-phone quick-links">
                            <hr class="footer-hr" />
                            <div class="row-fluid">
                                <div class="span3">
                                    <div class="footer_text"><a href="<?=base_url()?>page/pages/29">Contact Us</a></div>
                                </div>
                                <div class="span3" >
                                    <div class="footer_text footer_text_right"><a target="_blank" href="http://www.portphillip.vic.gov.au">City of Port Phillip</a></div>
                                </div>
                                <div class="span3" >
                                    <div class="footer_text footer_text_center" ><a href="<?=base_url()?>page/pages/117">Filming and Photography Permits</a></div>
                                </div>
                                <div class="span3" >
                                    <div class="footer_text footer_text_left" ><a target="_blank" href="http://stkildafestival.induction.integralcs.com/">Safety Induction</a></div>
                                </div>
                            </div>
                            
                            <hr class="footer-hr" />
                            <div class="footer_text_design">
                            	<img class="img-footer-sponsor" alt="" src="<?=base_url()?>images/promotional_colour-(vector).png" style="margin-right:100px;"/> St Kilda Festival Image Design Competition Winner: CONSUELO FERNÃNDEZ-ORTIZ</div>
                            <br />
                            <br />
                        </div>
                    </div>
                </div>	
        </div>


</div><!--#pattern-->
</body>
<script>
$(document).ready(function() {
	$('#ad-space').carousel({
		interval: 6000
	});
});

function track_ads(url,img_name){
	_gaq.push(['_trackEvent', 'Ads', 'Click', img_name]);
	window.location.href = url;
}


// on enter subscribe
$(function(){
	$('#head-subscribe-input').keypress(function (e) {
		 var key = e.which;
		 if(key == 13)  // the enter key code
		 {
			 subscribe();
			 return false;  
		 }
	});   
});

function subscribe(){
	var email = $('#head-subscribe-input').val();
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	
	 if(reg.test(email) == false) {
	  	alert('Invalid Email Address');
	  	return false;
	}else{
		$.ajax({
			type: "POST",
			url: "<?php echo base_url()?>page/add_subscribe_ajax",
			data: { email: email }
			}).done(function( msg ) {
			   alert(msg );
			   $('#subscribe-email').val('');
		});
	}
}
</script>
</html>