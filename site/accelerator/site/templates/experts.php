<?php snippet('header') ?>

<!-- MAIN -->

<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->main() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid two-up">
		<?php $files = $pages->find('content_about-experts'); ?>
		<?php foreach($files->images() as $image): ?>
			<li>
				<div class="peopleFrame h-card vcard">
					<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" />
					<h5><a href="<?php echo $image->link() ?>" target="_blank" class="p-name fn u-url url"><?php echo $image->name() ?></a></h5>
					<small><?php echo $image->title() ?></small>
					<p class="p-note note"><?php echo $image->description() ?></p>
					<span class="white radius label p-category category"><?php echo $image->expertise() ?></span>
				</div>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
</div>

<!-- /MAIN -->

<?php snippet('footer') ?>