<style>
#email_vote
{
	background: none repeat scroll 0 0 #96BEFF;
    border: medium none;
    color: #FFFFFF;
    font-family: helvetica;
    font-style: normal;
    font-weight: 200;
    height: 17px;
    margin-right: 3px;
    padding: 4.5px;
    width: 156px;
}
#button_vote
{
	background: none repeat scroll 0 0 #74009B;
    color: #96BEFF;
    font-family: helvetica;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    height: 24px;
    line-height: 24px;
    margin-right: 15px;
    text-align: center;
    width: 80px;
}
#button_vote:hover
{
	cursor: pointer;
}
</style>
<script>
<?php
	$msg = $this->session->flashdata('msg');
	if($msg != '')
	{
	?>
		alert('<?=$msg?>');
	<?
	}
?>

function vote_submit()
{
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	var email = $('#email_vote').val();
	if(re.test(email))
	{
		$('#vote_form').submit();
	}
	else
	{
		alert('Please insert a valid email address');
	}
}
</script>   
   <div id="page_content_outside">
    <div id="page_content">
     <div id="left_content">    
     
       <!-- <div id="under_construction"><strong>This site is currently under construction.</strong> Check back in January for the full line-up and program.
       </div>  -->
      <div id="under_construction2">
       		<div id="search_label">Search Artist</div>
       		<form id="search_band_form" method="post" action="<?=base_url()?>page/search_bands_key">
       		<input id="input_search" value="" name="key"/>
       		</form>
       		<div id="search_button" onclick="$('#search_band_form').submit()">Enter</div>
       		<div id="search_label" style="width: 354px; margin-right: 0">
       			<a href="<?=base_url()?>page/vote" style="color:#96BEFF">
       				Vote for your favourite <span style="font-weight: 400">New Music Stage Band</span>
       			</a>
       		</div>
       </div>
       <div style="clear:both"></div>
      <div id="content_wrapper">
      	<form method="post" action="<?=base_url()?>page/save_vote" id="vote_form">
		    <div class="heading_content_page">
		    	New Music Stage
		    </div>
		    <div class="text_content_page" style="margin-top: 15px">
		    	See the hottest new talent on the New Music Stage and help them win $5000! Chosen by the Festival audience, the best band on the New Music Stage will take home the cash and then play the Main Stage in 2014. Select your favourite band to register your vote, then enter your below email to go in our Voter Prize Pack. Voting closes 5pm Fri 15 Feb.		    </div>
		    <div style="margin-top: 20px">
			    <input type="radio" name="band_voted" value="867" /> <span class="text_content_page">Buckley Ward</span><br/>
			    <input type="radio" name="band_voted" value="868" /> <span class="text_content_page">Shaun Kirk</span><br/>
			    <input type="radio" name="band_voted" value="869" /> <span class="text_content_page">Animaux</span><br/>
			    <input type="radio" name="band_voted" value="870" /> <span class="text_content_page">Warning Birds</span><br/>
			    <input type="radio" name="band_voted" value="871" /> <span class="text_content_page">Roscoe James Irwin</span><br/>
			    <input type="radio" name="band_voted" value="872" /> <span class="text_content_page">The Twoks</span><br/>
			    <input type="radio" name="band_voted" value="873" /> <span class="text_content_page">Stillwater Giants</span><br/>
			    <input type="radio" name="band_voted" value="708" /> <span class="text_content_page">Client Liaison</span><br/>
			    <input type="radio" name="band_voted" value="874" /> <span class="text_content_page">Straylove</span><br/>
			    <input type="radio" name="band_voted" value="875" /> <span class="text_content_page">Sub Atari Knives</span>
		    </div>
		     <div style="margin-top: 20px">
		     	ENTER YOUR EMAIL TO WIN: <input type="text" value="" id="email_vote" name="email_vote"/>
		     </div>
		     <div style="margin-top: 20px">
		     	<div onclick="vote_submit();" id="button_vote">Submit</div>
		     </div>
	     </form>
      </div> <!-- #content_wrapper -->
     </div> <!-- #left_content -->