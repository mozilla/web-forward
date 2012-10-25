<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>		<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>		<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title><?php echo $site->title() ?> | <?php echo $page->title() ?></title>

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="/assets/stylesheets/foundation.min.css" />
	<link rel="stylesheet" href="/assets/stylesheets/app.min.css" />
	<link rel="stylesheet" href="https://www.mozilla.org/tabzilla/media/css/tabzilla.css" />

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="/assets/stylesheets/ie.min.css" />
	<![endif]-->

	<!-- Included Modernizr -->
	<script src="/assets/javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	
	<!-- Video JS code -->
	<!--
	<link rel="stylesheet" href="/assets/stylesheets/video-js.css" />
	<script src="/assets/javascripts/video.min.js"></script>
	<script>_V_.options.flash.swf = "/assets/images/video-js/video-js.swf";</script>
	-->

	<!-- The ever-so-important FavIcon -->
	<link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png" />
</head>

<body id="<?php echo $page->id() ?>">
<div id="outer-wrapper">
<div id="wrapper">
<div class="container">

<!-- navigation -->
<div class="row">
	<header>
		<a href="http://www.mozilla.org/" id="tabzilla">Mozilla</a>
		<nav id="mainNavigation">
			<ul>
				<li><a href="/"<?php echo ($site->uri()->path()->first() == '') ? ' class="current"' : '' ?>>Home</a></li>
				<li><a href="/about/"<?php echo ($site->uri()->path()->first() == 'about') ? ' class="current"' : '' ?>>About</a></li>
				<li><a href="/portfolio/"<?php echo ($site->uri()->path()->first() == 'portfolio') ? ' class="current"' : '' ?>>Portfolio</a></li>
				<li><a href="http://blog.webfwd.org/">Blog</a></li>
				<li><a href="/apply/"<?php echo ($site->uri()->path()->first() == 'apply') ? ' class="current"' : '' ?>>Apply</a></li>
			</ul>
		</nav>
		<h1><a href="/"><img src="/assets/images/sandstone/logo.png" alt="WebFWD" /></a></h1>
	</header>
</div>
<!-- /navigation -->
