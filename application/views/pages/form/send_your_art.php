<script type="text/javascript" src="<?=base_url()?>js/jquery-1.6.2.js"></script>
<div id="paga_content_outside">
    <div id="pagecontent" style="float:none;">
        <div id="left-container">
        	<div id="form_wrapper">
                <div id="form_header" style="float:left"> 
                    2013 St Kilda Festival Poster Design Competition
                </div>
                <div style="clear:both;"></div>
                <div id="form_sub_header">
                	Entry form
                </div>
                <script>
					<?php 
						if($this->session->flashdata('success'))
						{?>
							alert('Thank you, we have received your application');
						<?php }
					?>
					function validateEmail(email) 
					{ 
						var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    					return filter.test(email);
					}
					
					function validate_form()
					{
						var firstname = $('#firstname').val();
						var surname = $('#surname').val();
						var email = $('#email').val();
						var agree = $('#agree').attr('checked');
						var valid = true;
						if(firstname == '') 
						{
							valid = false;
						}
						if(surname == '') 
						{
							valid = false;
						}
						if(email == '') 
						{
							valid = false;
						}
						/*if(validateEmail(email))
						{
							valid = false;
						}*/
						if(agree != 'checked') {valid = false;}
						
						return valid;
					}
				</script>
                <form action="<?=base_url()?>page/add_send_your_art" method="post" onsubmit="return validate_form();">
                    <div id="form_content">
                    	<div>
                        	<div class="form_label" style="float:left">First Name</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="firstname" name="firstname"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Surname</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="surname" name="surname"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Phone</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="phone" name="phone"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Email</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="email" name="email"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div style="float:left"><input class="form_checkbox" type="checkbox" value="Yes" id="live" name="live"></div>
                        	<div class="form_label_checkbox" style="float:left">Tick here to confirm that you either live, work or study in the City of Port Phillip</div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Please give details</div>
                            <div style="float:left"><textarea class="form_textarea" id="detail" name="detail"></textarea></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div style="float:left"><input class="form_checkbox" type="checkbox" value="1" id="agree" name="agree"></div>
                        	<div class="form_label_checkbox" style="float:left">By submitting this application I certify that I have read and agree with the Terms and Conditions</div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<input class="form_button" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div> 
             
            
        	<div style="clear:both;"></div>
        </div>
    </div>
</div>

