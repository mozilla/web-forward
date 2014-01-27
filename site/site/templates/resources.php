<?php snippet('header') ?>

<!-- MAIN -->


<section class="header-box">
  <div class="container">
    <!-- main content -->
    <section class="row">
      <div class="col-md-12">
        <h1><?php echo $page->title() ?></h1>
        <h4><?php echo $page->headline() ?></h4>
      </div>
    </section>
  </div>
</section>

</div> <!-- end .top-image-bg -->

<!-- container -->
<section class="container maincontent">

<!-- learning modules -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h3><?php echo $page->headline1() ?></h3>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content1() ?></p>
	</div>
</div>

<div class="row learningmodules">
		<?php $files = $pages->find('content_about-resources-modules'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>
<!-- /learning modules -->

<!-- LearnFWD Webinars and Presentations -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h3><?php echo $page->headline2() ?></h3>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content2() ?></p>
	</div>
</div>



<!-- /LearnFWD Webinars and Presentations -->


<!-- community -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h4 class="subtitle-txt"><?php echo $page->headline3() ?></h4>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content3() ?></p>
	</div>
</div>

<div class="row">
		<?php $files = $pages->find('content_about-resources-community'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>

<!-- /community -->

<!-- design / ux -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h4 class="subtitle-txt"><?php echo $page->headline4() ?></h4>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content4() ?></p>
	</div>
</div>

<div class="row designux">
		<?php $files = $pages->find('content_about-resources-design'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>
<!-- /design / ux -->

<!-- financials and metrics -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h4 class="subtitle-txt"><?php echo $page->headline5() ?></h4>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content5() ?></p>
	</div>
</div>

<div class="row">
		<?php $files = $pages->find('content_about-resources-financials'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>
<!-- /financials and metrics -->

<!-- human resources -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h4 class="subtitle-txt"><?php echo $page->headline6() ?></h4>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content6() ?></p>
	</div>
</div>

<div class="row">
		<?php $files = $pages->find('content_about-resources-humanresources'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>
<!-- /humanresources -->

<!-- incorporation -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h4 class="subtitle-txt"><?php echo $page->headline7() ?></h4>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content7() ?></p>
	</div>
</div>

<div class="row">
		<?php $files = $pages->find('content_about-resources-incorporation'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>
<!-- /incorporation -->

<!-- investment -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h4 class="subtitle-txt"><?php echo $page->headline8() ?></h4>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content8() ?></p>
	</div>
</div>

<div class="row">
		<?php $files = $pages->find('content_about-resources-investment'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>
<!-- /investment -->

<!-- licensing -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h4 class="subtitle-txt"><?php echo $page->headline9() ?></h4>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content9() ?></p>
	</div>
</div>

<div class="row">
		<?php $files = $pages->find('content_about-resources-licensing'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>
<!-- /licensing -->

<!-- marketing -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h4 class="subtitle-txt"><?php echo $page->headline10() ?></h4>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content10() ?></p>
	</div>
</div>

<div class="row">
		<?php $files = $pages->find('content_about-resources-marketing'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>
<!-- /marketing -->

<!-- sales -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h4 class="subtitle-txt"><?php echo $page->headline11() ?></h4>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content11() ?></p>
	</div>
</div>

<div class="row">
		<?php $files = $pages->find('content_about-resources-sales'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>
<!-- /sales -->

<!-- technology -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h4 class="subtitle-txt"><?php echo $page->headline12() ?></h4>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content12() ?></p>
	</div>
</div>

<div class="row tech">
		<?php $files = $pages->find('content_about-resources-technology'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>
<!-- /technology -->

<!-- user research -->
<div class="row">
	<div class="col-xs-12 col-md-12">
		<h4 class="subtitle-txt"><?php echo $page->headline13() ?></h4>
	</div>
	<div class="col-xs-12 col-md-12">
		<p class="largeP"><?php echo $page->content13() ?></p>
	</div>
</div>

<div class="row">
		<?php $files = $pages->find('content_about-resources-userresearch'); ?>
		<?php foreach($files->images() as $image): ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="box">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" class="img-responsive" /></a>
					<p class="subtitle"><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></p><p class="author"><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</div>
		<?php endforeach ?>
</div>
<!-- /user research -->


</section>
<!-- /end container -->
<!-- /MAIN -->

<?php snippet('footer') ?>