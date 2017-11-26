<?php
 $cachebuster = '201711261141';

 $page = substr($_SERVER['REQUEST_URI'], 1);

 $active[$page]=' class="active"';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
  	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  	<meta name="robots" content="index, follow" />
  	<meta name="keywords" content="Settlements, Real Estate" />
  	<meta name="title" content="Plus Your Settlements" />
  	<meta name="author" content="Maad Web Design" />
  	<meta name="description" content="Settlements are what we do. We will take you through each step of the settlement process." />

   	<title><?php if ($pagetitle) { echo "$pagetitle" . " - Plus Your Settlements"; } else {echo 'Plus Your Settlements';}?></title>

	<link rel="icon" href="favicon.ico?t=<?php echo $cachebuster; ?>" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/style.css?t=<?php echo $cachebuster; ?>" />
    <link rel="stylesheet" href="nivo/nivo-slider.css?t=<?php echo $cachebuster; ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo/themes/default/default.css?t=<?php echo $cachebuster; ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo/nivo-style.css?t=<?php echo $cachebuster; ?>" type="text/css" media="screen" />
  
 <script type="text/javascript" src="js/jquery-3.2.1.min.js?t=<?php echo $cachebuster; ?>"></script>
 <script type="text/javascript" src="nivo/jquery.nivo.slider.pack.js?t=<?php echo $cachebuster; ?>"></script>

<script type="text/javascript" src="js/jquery.validate.min.js?t=<?php echo $cachebuster; ?>"></script>
<script type="text/javascript" src="js/innerfade.js?t=<?php echo $cachebuster; ?>"></script>
<script type="text/javascript" src="js/stampduty.js?t=<?php echo $cachebuster; ?>"></script>

   
    <script type="text/javascript">
    $(window).on("load", function() {
        $('#slider').nivoSlider();
    });
    </script>
    
    
</head>

<body class="home">

    <div id="container">
	    <div id="wrapper">

		<div id="navigation">

	<div class="content">
		<div class="logo"><h1><a href="/" title="Plus Your Settlements"><span>Plus Your Settlements</span></a></h1></div>
                <div class="pexa"><img src="images/pexa.png" width="105" /></div>

		<ol id="sitelinks">
	<li<?php echo $active['services']; ?>><a href="/services" title="Services"><span>Services</span> <em>what we offer you</em></a></li>
	<li<?php echo $active['buying']; ?>><a href="/buying" title="Buying"><span>Buying</span> <em>we make buying easy</em></a></li>

	<li<?php echo $active['selling']; ?>><a href="/selling" title="Selling"><span>Selling</span> <em>Sell without the hassle</em></a></li>
	<li<?php echo $active['tools']; ?>><a href="/tools" title="Tools"><span>Tools</span> <em>Calculate the sums</em></a></li>
	<li<?php echo $active['about']; ?>><a href="/about" title="About us"><span>About us</span> <em>get to know us</em></a></li>
	<li<?php echo $active['contact']; ?>><a href="/contact" title="Contact us"><span>Contact us</span> <em>ask us anything</em></a></li>

</ol>
		

	</div>

</div>
