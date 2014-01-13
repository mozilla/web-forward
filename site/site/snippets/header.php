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
  <div class="mainnav">
    <div class="container">
      <a href="http://www.mozilla.org/" id="tabzilla">Mozilla</a>

      <div class="row">

        <div class="col-xs-12">
          <h1><a href="/" class="navbar-brand"><img src="..//assets/images/sandstone/logo.png" alt="WebFWD" /></a></h1>
        </div>
        <div class="col-xs-12">
          <ul class="nav nav-pills nav-justified">
            <li>asdf</li>
            <li>asdf</li>
            <li>asdf</li>
            <li>asdf</li>
          </ul>
          <a href="/"<?php echo ($site->uri()->path()->first() == '') ? ' class="current"' : '' ?>>Overview</a>
  				<a href="/resources/"<?php echo ($site->uri()->path()->first() == 'resources') ? ' class="current"' : '' ?>>Startup Resources</a>
  				<a href="/partners/"<?php echo ($site->uri()->path()->first() == 'partners') ? ' class="current"' : '' ?>>Partners</a>
  				<a href="/news/"<?php echo ($site->uri()->path()->first() == 'news') ? ' class="current"' : '' ?>>News</a>
  				<a href="/accelerator/" target="_blank">Accelerator</a>
        </div>

      </div>

		  <nav role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->

        <ul class="nav nav-pills pull-left">

        </ul>
      </nav>
    </div>
  </div>
  <!-- /navigation -->
