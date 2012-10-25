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

<!-- MAIN -->

<div class="row padding">
	<div class="twelve columns text-center">
		<h1 class="large"><?php echo $page->headline() ?></h1>
	</div>
</div>

<div class="row padding-small">
	<div class="ten columns centered">
		<div id="featured"> 
			<img src="/assets/images/about-program.jpg" alt="WebFWD Program" data-caption="#htmlCaption1" />
			<img src="/assets/images/about-experts.jpg" alt="WebFWD Experts" data-caption="#htmlCaption2" />
			<img src="/assets/images/about-team.jpg" alt="WebFWD Team" data-caption="#htmlCaption3" />
			<img src="/assets/images/about-partners.jpg" alt="WebFWD Partners" data-caption="#htmlCaption4" />
		</div>
		<span class="orbit-caption" id="htmlCaption1"><h4><a href="/about/program/">Learn about the program</a></h4></span>
		<span class="orbit-caption" id="htmlCaption2"><h4><a href="/about/experts/">Meet the experts</a></span>
		<span class="orbit-caption" id="htmlCaption3"><h4><a href="/about/team/">Connect with our team</a></span>
		<span class="orbit-caption" id="htmlCaption4"><h4><a href="/about/partners/">Benefit from our partners</a></span>
	</div>
</div>

<div class="row padding-small" id="aboutMain">
	<div class="four columns">
		<p><?php echo $page->about() ?></p>
		<a href="/apply/" class="medium blue radius button">Apply For Our February 2013 Class</a>
		<p><a href="#" class="button" data-reveal-id="myModal2">Click Me For A Modal</a></p>
	</div>
	<div class="eight columns">
		<ul class="block-grid two-up">
			<li>
				<h3><a href="<?php echo url($page->slug1()) ?>"><?php echo $page->header1() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description1() ?></p>
			</li>
			<li>
				<h3><a href="<?php echo url($page->slug2()) ?>"><?php echo $page->header2() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description2() ?></p>
			</li>
			<li>
				<h3><a href="<?php echo url($page->slug3()) ?>"><?php echo $page->header3() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description3() ?></p>
			</li>
			<li>
				<h3><a href="<?php echo url($page->slug4()) ?>"><?php echo $page->header4() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description4() ?></p>
			</li>
			<li>
				<h3><a href="<?php echo url($page->slug5()) ?>"><?php echo $page->header5() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description5() ?></p>
			</li>
			<li>
				<h3><a href="<?php echo url($page->slug6()) ?>"><?php echo $page->header6() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description6() ?></p>
			</li>
		</ul>
	</div>
</div>

<!-- /MAIN -->

			</div>
			<!-- /container -->
		</div>
		<!-- /wrapper -->

	<!-- footer -->
	<footer>
		<div class="row">
			<div class="three columns">
				<a href="http://www.mozilla.org/" class="footer-logo"><img src="/assets/images/sandstone/footer-mozilla.png" alt="mozilla" /></a>
			</div>
			<div class="three columns">
				<p>Portions of this content are ©1998–2012 by individual mozilla.org contributors. Content available under a <a href="http://www.mozilla.org/foundation/licensing/website-content.html">Creative Commons license</a>.</p>
				<p><a href="http://www.mozilla.org/en-US/contribute/page/">Contribute to this page</a><p>
			</div>
			<div class="three columns">
				<nav>
					<ul>
						<li><a href="mailto:webfwd@mozilla.com">Contact</a></li>
						<li><a href="https://twitter.com/#!/MozWebFWD">Twitter</a></li>
						<li><a href="https://www.facebook.com/webfwd">Facebook</a></li>
						<li><a href="https://mail.mozilla.org/listinfo/webfwd-all">Newsletter</a></li>
					</ul>
				</nav>
			</div>
			<div class="three columns">
				<nav>
					<ul>
						<li><a href="https://www.google.com/calendar/b/0/embed?src=p8f1sspddudoko6oecne0efkog@group.calendar.google.com&ctz=America/Los_Angeles">Events</a></li>
						<li><a href="http://www.flickr.com/photos/69751921@N07/sets/72157627996680613/detail/">In the Press</a></li>
						<li><a href="http://www.mozilla.org/privacy-policy.html">Privacy Policy</a></li>
						<li><a href="http://www.mozilla.org/about/legal.html">Legal Notices</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>
	<!-- /footer -->

</div>
<!-- /outer-wrapper -->

<!-- MODAL -->
<div id="myModal" class="reveal-modal expand">
	<iframe src="http://player.vimeo.com/video/52167567?badge=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>
<!-- MODAL -->

<!-- 'Apply for Oct class' ribbon -->
<!-- <a href="/apply/"><img style="position: absolute; top: 0; left: 0; border: 0;" src="/assets/images/apply.png" alt="Apply for Oct class" /></a> -->

<!-- Included JS Files -->
<script src="/assets/javascripts/jquery.min.js"></script>
<script src="/assets/javascripts/foundation.js"></script>
<script src="/assets/javascripts/app.min.js"></script>
<script src="https://www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>

<!-- Clicky -->
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(66455590); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66455590ns.gif" /></p></noscript>

<!-- Page Generated: <?php echo $site->modified() ?> // WebFWD -->
</body>
</html>
