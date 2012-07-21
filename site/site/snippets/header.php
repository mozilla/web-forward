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
	<?php echo css('assets/stylesheets/foundation.min.css') ?>
	<?php echo css('assets/stylesheets/app.min.css') ?>
	<?php echo css('https://www.mozilla.org/tabzilla/media/css/tabzilla.css') ?>

	<!--[if lt IE 9]>
		<?php echo css('assets/stylesheets/ie.min.css') ?>
	<![endif]-->

	<!-- Included Modernizr -->
	<?php echo js('assets/javascripts/modernizr.foundation.js') ?>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
		<?php echo js('http://html5shiv.googlecode.com/svn/trunk/html5.js') ?>
  <![endif]-->
	
	<!-- Video JS code -->
	<?php echo css('assets/stylesheets/video-js.min.css') ?>
	<?php echo js('assets/javascripts/video.min.js') ?>
	<script>_V_.options.flash.swf = "/assets/images/video-js/video-js.swf";</script>

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
				<li><a href="/">Home</a></li>
				<li><a href="/about/">About</a></li>
				<li><a href="/portfolio/">Portfolio</a></li>
				<li><a href="http://blog.webfwd.org/">Blog</a></li>
				<li><a href="/apply/">Apply</a></li>
			</ul>
		</nav>
		<h1><a href="/"><img src="/assets/images/sandstone/logo.png" alt="WebFWD" /></a></h1>
	</header>
</div>
<!-- /navigation -->
