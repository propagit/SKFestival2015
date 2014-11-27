<script>
function validateEmailRight()
	{
		var email = $('#subscribe-right').val();
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  
         if(reg.test(email) == false) {
 
          alert('Invalid Email Address');
          return false;
        }
		else
		{
			$.ajax({
  type: "POST",
  url: "<?php echo base_url()?>page/add_subscribe_ajax",
  data: { email: email }
}).done(function( msg ) {
           alert(msg );
		   $('#subscribe-right').val('');
});
		}
}
</script>

<div id="under-cons-wrapper">
	&nbsp;
	<div id="top-text">THIS WEBSITE<br/>IS UNDER<br/>CONSTRUCTION</div>
	<div id="bottom-text">THE FULL PROGRAM<br/>FOR THE 2014 ST KILDA<br/>FESTIVAL LAUNCHES<br/>ON 6 JANUARY</div>
</div>

<!-- <div class="today">WHAT'S ON TODAY</div>
<div class="black-box-today">
	<div class="box-today">
    	<div class="font-day">SAT </div><div class="font-date">2 FEB</div>
    </div>
    <div class="box-today">
    	<div class="font-day">SUN </div><div class="font-date">3 FEB</div>
    </div>
    <div class="box-today">
    	<div class="font-day">MON </div><div class="font-date">4 FEB</div>
    </div>
</div>
<div class="black-box-today">
	<div class="box-today">
    	<div class="font-day">TUE </div><div class="font-date">5 FEB</div>
    </div>
    <div class="box-today">
    	<div class="font-day">WED </div><div class="font-date">6 FEB</div>
    </div>
    <div class="box-today">
    	<div class="font-day">THU </div><div class="font-date">7 FEB</div>
    </div>
</div>
<div class="black-box-today">
	<div class="box-today">
    	<div class="font-day">FRI </div><div class="font-date">8 FEB</div>
    </div>
    <div class="box-today">
    	<div class="font-day">SAT </div><div class="font-date">9 FEB</div>
    </div>
    <div class="box-today">
    	<div class="font-day">SUN </div><div class="font-date">10 FEB</div>
    </div>
</div> -->

<!-- <hr class="page-hr hidden-phone">

<div class="right-list hidden-phone">VIEW/DOWNLOAD <span class="program-bold">THE PROGRAM</span></div>

<hr class="page-hr">

<div class="right-list">VOTE FOR A BAND ON THE <span class="program-bold">NEW MUSIC STAGE</span></div> -->

<hr class="page-hr">

<span class="subheading_content_page" style="margin-bottom: 20px;float: left;text-align: center; width:100%;">Sign up for Festival News, Announcements and Offers</span>
<div style="float:none;"><div class="right-list" style="float:left;margin-top:8px; font-weight:500">
	SUBSCRIBE
</div>
<div  style="float:right;"><input class="right-subscribe" type="text" name="subscribe-right" id="subscribe-right" placeholder="Enter your email here">
<div style="float:left;"><i class="icon-ok" style="margin-top:5px;font-size:25px;color:#7800FF;margin-left:10px; margin-right:10px; cursor:pointer;" onclick="validateEmailRight()"></i></div></div></div>
<div style="clear:both;"></div>

<hr class="page-hr">
