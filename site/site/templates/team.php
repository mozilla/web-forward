<?php snippet('header') ?>

<!-- MAIN -->

<!-- team -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline1() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content1() ?></p>
	</div>
</div>

<?php $files = $pages->find('content_about-team-webfwd'); ?>
<?php foreach($files->images() as $image): ?>
	<div class="row padding h-card vcard">
		<div class="six columns imageFrame">
			<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" />
		</div>
		<div class="six columns">
			<h4 class="p-name fn"><?php echo $image->name() ?></h4>
			<p class="p-note note"><?php echo multiline($image->info()) ?></p>
			<p><?php echo $image->links() ?></p>
		</div>
	</div>
<?php endforeach ?>
<!-- /team -->

<!-- scouts -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline2() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content2() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid two-up">
		<?php $files = $pages->find('content_about-team-scouts'); ?>
		<?php foreach($files->images() as $image): ?>
			<li>
				<div class="peopleFrame h-card vcard">
					<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" />
					<h5><a href="<?php echo $image->link() ?>" target="_blank" class="p-name fn u-url url"><?php echo $image->name() ?></a></h5>
					<p class="p-note note"><?php echo $image->description() ?></p>
					<span class="white radius label p-country-name"><?php echo $image->country() ?></span>
				</div>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
</div>
<!-- /scouts -->

<!-- /MAIN -->

<?php snippet('footer') ?>