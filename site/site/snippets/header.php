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

</head>

<body id="<?php echo $page->id() ?>">

  <!-- navigation -->
  <nav class="navbar navbar-default navbar-fixed-top mainnav" role="navigation">

    <div class="container">
      <a href="http://www.mozilla.org/" id="tabzilla" style="z-index:9999">Mozilla</a>
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a href="/" class="navbar-brand"><img src="..//assets/images/sandstone/logo.png" alt="WebFWD" /></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="" id="">
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
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
  <!-- /navigation -->
