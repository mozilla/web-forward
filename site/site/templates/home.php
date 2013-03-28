<?php snippet('header') ?>

<!-- MAIN -->

<!-- subheadline -->
<div class="row padding">
	<div class="twelve columns">
		<h1 class="text-center"><?php echo $page->subheadline() ?></h1>
	</div>
</div>
<!-- /subheadline -->

<!-- video -->
<div class="row padding-small">
	<div class="ten columns centered">
		<video class="video-js vjs-default-skin" controls preload="none" data-setup="{}" width="809" height="458" poster="/assets/images/webfwd_2013.jpg">
			<source src="https://videos-origin.mozilla.org/manage/webfwd//WebFWD_Module_UX_ChrissieBrodigan_March2013.webm" type='video/webm' />
			<source src="https://videos-origin.mozilla.org/manage/webfwd//WebFWD_Module_UX_ChrissieBrodigan_March2013.mp4" type='video/mp4' />
		</video>
	</div>
</div>
<!-- /video -->



<!-- main content -->
<div class="row padding">
	<div class="four columns">
		<h2><?php echo $page->columnheader1() ?></h2>
		<p class="largeP"><?php echo $page->columntext1() ?></p>
	</div>
	<div class="four columns">
		<h2><?php echo $page->columnheader2() ?></h2>
		<p class="largeP"><?php echo $page->columntext2() ?></p>
	</div>
	<div class="four columns">
		<h2><?php echo $page->columnheader3() ?></h2>
		<p class="largeP"><?php echo $page->columntext3() ?></p>
	</div>
</div>
<!-- /main content -->

<!-- headline 
<div class="row padding">
	<div class="twelve columns text-center">
		<h1 class="huge"><?php echo $page->headline() ?></h1>
	</div>
</div>
headline -->

<!-- portfolio-->
<div class="row padding">
	<div class="twelve columns">
		<h2>Our Teams</h2>
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<ul class="block-grid five-up">
			<?php $files = $pages->find('content_portfolio-main'); ?>
			<?php foreach($files->images() as $image): ?>
			<li><a href="<?php echo url('') ?>portfolio/#<?php echo $image->name() ?>"><img src="<?php echo $image->thumb()->url() ?>" alt="<?php echo $image->name() ?>" class="thumbs" /></a></li>
			<?php endforeach ?>
		</ul>
	</div>
</div>
<!-- /portfolio-->

<!-- news -->
<div class="row padding" id="news">
	<div class="twelve columns">
		<h2>News</h2>
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<ul class="block-grid three-up">
			<li><h5><a href="<?php echo $page->newslink1() ?>" title="<?php echo $page->newsheadline1() ?>" target="_blank"><?php echo $page->newsheadline1() ?></a></h5><p class="largeP"><?php echo $page->newscontent1() ?></p></li>
			<li><h5><a href="<?php echo $page->newslink2() ?>" title="<?php echo $page->newsheadline2() ?>" target="_blank"><?php echo $page->newsheadline2() ?></a></h5><p class="largeP"><?php echo $page->newscontent2() ?></p></li>
			<li><h5><a href="<?php echo $page->newslink3() ?>" title="<?php echo $page->newsheadline3() ?>" target="_blank"><?php echo $page->newsheadline3() ?></a></h5><p class="largeP"><?php echo $page->newscontent3() ?></p></li>
		</ul>
	</div>
</div>
<!-- /news -->

<!-- /MAIN -->

<?php snippet('footer') ?>