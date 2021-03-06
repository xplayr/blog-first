<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- Meta tags & browser stuff -->
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
<link rel="apple-touch-icon" href="images/shortcut.png" />

<title><?php wp_title('by', true, 'right'); ?> <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?></title>

<!-- Make the HTML5 elements work in IE. -->
<!--[if IE]>
<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- RSS feed generators -->
<link rel="alternate" type="application/rss+xml" title="Barry Clark » Comments Feed" href="http://barryclark.co/comments/feed/">
<link rel="alternate" type="application/rss+xml" title="Barry Clark » Feed" href="http://barryclark.co/feed/">

<!-- Google Analytics Tracking -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2530088-4']);
  _gaq.push(['_setDomainName', 'barryclark.co']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />

<!-- JS (using Zepto for ajax pageloader module and random future jQuery stuff) -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/zepto.min.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>-->

<!-- Fonts (none! ... and doesn't this still look pretty?) -->

</head>

<!-- Chartbeat -->
<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>

<body <?php body_class(); ?>>

	<div class="wrapper">
	    		
	<header class="clearfix">
	  <a class="profile-pic" href="<?php echo home_url(); ?>/">
      <img src="<?php bloginfo('template_directory'); ?>/images/baz-circle.png" />
    </a>
  	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <h2>I build things. Product, UX, Developer.</h2>

    <!-- <div class="social">
      <a href="https://twitter.com/baznyc" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" /></a>
      <a href="https://www.linkedin.com/in/bazclark/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" /></a>
      <a href="feed/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" /></a>
    </div>
     --><hr />  
      



	</header>
