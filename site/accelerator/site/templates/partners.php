<?php snippet('header') ?>

<!-- MAIN -->

<div class="row padding">
	<div class="four columns">
		<h2><?php echo $page->headline() ?></h2>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->main() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-partners'); ?>
		<?php foreach($files->images() as $image): ?>
			<li>
				<div class="partners">
					<a href="<?php echo $image->link() ?>" target="_blank"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" /></a>
					<p><?php echo $image->main() ?></p>
				</div>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
</div>

<!-- /MAIN -->

<?php snippet('footer') ?>