   <div id="page_content_outside">
    <div id="page_content">
        <div id="left_content">
        	<div id="content_wrapper">
                <div class="heading_content_page"> 
                    St Kilda Residents Newsletter
                </div>
                <br/>
                <div class="subheading_content_page">
                	Enter your details
                </div><br/>
                <script>
					<?php 
						if($this->session->flashdata('success'))
						{?>
							alert('<?=$this->session->flashdata('success')?>');
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
						var phone = $('#phone').val();
						var pdoce = $('#pcode').val();
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
						if(phone == '') 
						{
							valid = false;
						}
						if(pcode == '') 
						{
							valid = false;
						}
						if(!valid)
						{
							alert('Please enter all required fields');
						}
						return valid;
					}
				</script>
                <form action="<?=base_url()?>page/add_email_subscription" method="post" onsubmit="return validate_form();">
                    <div id="form_content">
                    	<div>
                        	<div class="form_label" style="float:left">First Name*</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="firstname" name="firstname"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Last Name*</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="surname" name="surname"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Postcode*</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="pcode" name="pcode"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Email*</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="email" name="email"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Phone*</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="phone" name="phone"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	Please send email to <a href="mailto:stkildafestival@portphillip.vic.gov.au">stkildafestival@portphillip.vic.gov.au</a> for more information
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<input style="width:56px;height:26px;" class="form_button" type="submit" value="Enter">
                        </div>
                    </div>
                </form>
           
        	
        </div> <!-- #content_wrapper -->
     </div> <!-- #left_content -->