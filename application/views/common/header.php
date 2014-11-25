<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="" />
<meta name="google-site-verification" content="yVJdVcuk3lQ2SICu2kbtPOxynkk-zLfybxZlYkT0y3k" />
<title>	St Kilda Festival 2014</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?=base_url()?>css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link href='//fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,100,300,200,700,500,600,900,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="<?=base_url()?>css/stkilda_frontend.css">
<link rel="stylesheet" href="<?=base_url()?>css/template.css">
<link rel="stylesheet" href="<?=base_url()?>css/page.css">
<script src="<?=base_url()?>js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>js/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.cycle.js"></script>
<script src="<?=base_url()?>js/jquery.tools.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/script.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/jquery.quicksand.js" type="text/javascript"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37650188-1']);    
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<script>
  jQuery('.carousel').carousel()
</script> 

<body>
	<div class="navbar navbar-inverse navbar-fixed-top navbar-custom">
		<div class="navbar-inner">
			<div class="container max-container pale-bg">
            	<div class="row-fluid">
                
                	<!--mob nav -->
                    <div class="span6 visible-phone">
                    	<?php $this->load->view('common/mob_nav');?>
                    </div>
                    <!--mob nav ends-->
                
            		<div class="nav-lt-box span6 remove-gutters hidden-phone">
                	<button class="btn btn-alt">Support The Festival</button>
                    <input type="text" id="head-subscribe-input" placeholder="SUBSCRIBE">
               		</div>
                    
                	<div class="social_icons span6 remove-gutters pull hidden-phone">
                    <ul class="nav" id="top-navigation">
                        <li>
                        	<a href="https://www.facebook.com/StKildaFestival" target="_blank">
                        		<span class="fa-stack">
                                	<i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x txt-white"></i>
                                </span>
                        	</a>
                        </li>
                        <li>
                       		 <a href="http://twitter.com/stkildafestival" target="_blank">
                            	<span class="fa-stack">
                                	<i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x txt-white"></i>
                                </span>
                             </a>
                        </li>
                        <li>
                       		 <a href="http://www.youtube.com/thestkildafestival" target="_blank">
                            	<span class="fa-stack">
                                	<i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-youtube fa-stack-1x txt-white"></i>
                                </span>
                             </a>
                        </li>
                        <li>
                       		 <a href="#" target="_blank">
                            	<span class="fa-stack">
                                	<i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x txt-white"></i>
                                </span>
                             </a>
                        </li>
                        <li class="hidden-phone">
                            <input type="text" id="search-input" placeholder="search"/>
                        </li>
                    </ul>
                </div>
                </div>
			</div>
		</div>
	</div>
	<div onclick="window.location='<?=base_url()?>'" class="nav_offset_padding logo-banner">
    	<div class="container sk-year-banner">
			<img src="<?=base_url();?>img/stkildafestival-2015-header.png" alt="stkildafestival-2015-header.png" title="St Kilda Festival 2015">
        </div>
    </div>
	

    <?php $this->load->view('common/menu');?>
	
