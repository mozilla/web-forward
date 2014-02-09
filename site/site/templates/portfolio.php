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


<!-- portfolio alumni -->
<div class="row padding">
	<div class="col-xs-12">
		<h2><?php echo $page->headline2() ?></h2>
	</div>
	<div class="col-xs-12">
		<p class="largeP"><?php echo $page->content2() ?></p>
	</div>
</div>

<div class="row padding" id="past">
		<?php $files = $pages->find('content_portfolio-alumni'); ?>
		<?php foreach($files->images() as $image): ?>
				<div class="col-xs-12 col-sm-6 col-md-4">
				  <div class="boxes">
  					<a href="<?php echo $image->link() ?>" target="_blank"><img class="img-responsive" src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" /></a><br />
  					<p><?php echo $image->info() ?></p>
  					<h6><a href="<?php echo $image->link() ?>" target="_blank">Website</a><?php if ($image->video() != NULL): ?> | <a href="<?php echo $image->video() ?>" target="_blank">Video</a><?php endif; ?></h6>
  				</div>
				</div>
		<?php endforeach ?>
	</div>
</div>
<!-- portfolio alumni -->

</section>
<!-- /end container -->

<!-- MAIN -->

<?php snippet('footer') ?>