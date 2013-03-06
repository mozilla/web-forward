<?php snippet('header') ?>

<!-- MAIN -->

<!-- portfolio main -->
<div class="row padding">
	<div class="four columns">
		<h2><?php echo $page->headline1() ?></h2>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content1() ?></p>
	</div>
</div>

<?php $files = $pages->find('content_portfolio-main'); ?>
<?php foreach($files->images() as $image): ?>
<div class="row padding">
	<div class="six columns imageFrame">
		<a href="<?php echo $image->link() ?>" target="_blank"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" /></a>
	</div>
	<div class="six columns">
		<h4 id="<?php echo $image->name() ?>"><?php echo $image->name() ?></h4>
		<p class="largeP"><?php echo $image->info() ?></p>
		<p><?php echo $image->more() ?></p>
	</div>
</div>
<?php endforeach ?>
<!-- portfolio main -->

<!-- portfolio alumni -->
<div class="row padding">
	<div class="four columns">
		<h2><?php echo $page->headline2() ?></h2>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content2() ?></p>
	</div>
</div>

<div class="row padding" id="past">
	<div class="twelve columns">
		<ul class="block-grid four-up">
		<?php $files = $pages->find('content_portfolio-alumni'); ?>
		<?php foreach($files->images() as $image): ?>
			<li>
				<div class="alumni">
					<a href="<?php echo $image->link() ?>" target="_blank"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" /></a><br />
					<p><?php echo $image->info() ?></p>
					<h6><a href="<?php echo $image->link() ?>" target="_blank">Website</a><?php if (array_key_exists('video',$image): ?> | <a href="<?php echo $image->video() ?>" target="_blank">Video</a><?php endif; ?></h6>
				</div>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
</div>
<!-- portfolio alumni -->

<!-- MAIN -->

<?php snippet('footer') ?>