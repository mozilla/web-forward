<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>		<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>		<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="author" content="">
  <meta name="robots" content="index, follow" />
  <link rel="shortcut icon" href="../../assets/images/favicon.png">

  <link rel="stylesheet" href="https://www.mozilla.org/tabzilla/media/css/tabzilla.css" />
  <!-- Bootstrap core CSS -->
  <link href="../assets/styles/bootstrap.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../assets/styles/base.css" rel="stylesheet">
  <link href="../assets/styles/animated-header-component.css" rel="stylesheet">

</head>

<body id="<?php echo $page->id() ?>">

  <div class="top-image-bg"> <!-- big header bg -->
    <nav class="navbar-static-top mainnav">
      <div class="container">
        <a href="http://www.mozilla.org/" id="tabzilla">Mozilla</a>
        <div class="row mainnavrow">
            <div class="col-xs-4 col-md-4 logoarea">
              <a href="/" class=""><img src="..//assets/images/sandstone/logo-w.png" alt="WebFWD" class="brandlogo" /></a>
            </div>
            <nav class="col-xs-8 col-md-8 text-right navlinks">
                <a href="/resources/"<?php echo ($site->uri()->path()->first() == 'resources') ? ' class="active"' : '' ?>>Resources</a>
                <a href="/partners/"<?php echo ($site->uri()->path()->first() == 'partners') ? ' class="active"' : '' ?>>Partners</a>
                <a href="/calendar/"<?php echo ($site->uri()->path()->first() == 'calendar') ? ' class="active"' : '' ?>>Calendar</a>
                <a href="/blog/"<?php echo ($site->uri()->path()->first() == 'blog') ? ' class="active"' : '' ?>>Blog</a>
                <a href="/about/"<?php echo ($site->uri()->path()->first() == 'about') ? ' class="active"' : '' ?>>About</a>
            </nav>
        </div>
      </div>
    </nav>

  <!-- navigation
  <nav class="navbar navbar-default navbar-fixed-top mainnav" role="navigation">
    <div class="row navbox">
      <div class="container">
        <ul class="nav navbar-nav navbar-left navlinks">
          <li>
    			  <a href="/resources/"<?php echo ($site->uri()->path()->first() == 'resources') ? ' class="current"' : '' ?>>Resources</a>
    			</li>
    			<li>
    			  <a href="/partners/"<?php echo ($site->uri()->path()->first() == 'partners') ? ' class="current"' : '' ?>>Partners</a>
    			</li>
    			<li>
    			  <a href="/calendar/"<?php echo ($site->uri()->path()->first() == 'calendar') ? ' class="current"' : '' ?>>Calendar</a>
    			</li>
    			<li>
    			  <a href="/blog/"<?php echo ($site->uri()->path()->first() == 'blog') ? ' class="current"' : '' ?> target="_blank">Blog</a>
    			</li>
    			<li>
    			  <a href="/accelerator/" target="_blank">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   /navigation -->
