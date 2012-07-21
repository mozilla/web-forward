<?php snippet('header') ?>

<!-- MAIN -->

<!-- learning modules -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline1() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content1() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-modules'); ?>
		<?php foreach($files->images() as $image): ?>
			<li>
				<div class="resourcesContent">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" /></a>
					<p><strong><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></strong><br /><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
</div>
<!-- /learning modules -->

<!-- webinars -->
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
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-webinars'); ?>
		<?php foreach($files->images() as $image): ?>
			<li>
				<div class="resourcesContent">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" /></a>
					<p><strong><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></strong><br /><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
</div>
<!-- /webinars -->

<!-- brown bags -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline3() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content3() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-brownbags'); ?>
		<?php foreach($files->images() as $image): ?>
			<li>
				<div class="resourcesContent">
					<a href="<?php echo $image->link() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->topic() ?>" /></a>
					<p><strong><a href="<?php echo $image->link() ?>"><?php echo $image->topic() ?></a></strong><br /><?php echo $image->expert() ?></p>
					<p><?php echo $image->description() ?></p>
				</div>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
</div>
<!-- /brown bags -->

<!-- /MAIN -->

<?php snippet('footer') ?>