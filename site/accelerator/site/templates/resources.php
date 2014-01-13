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

<!-- LearnFWD Webinars and Presentations -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline2() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content2() ?></p>
	</div>
</div>



<!-- /LearnFWD Webinars and Presentations -->


<!-- community -->
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
		<?php $files = $pages->find('content_about-resources-community'); ?>
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
<!-- /community -->

<!-- design / ux -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline4() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content4() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-design'); ?>
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
<!-- /design / ux -->

<!-- financials and metrics -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline5() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content5() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-financials'); ?>
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
<!-- /financials and metrics -->

<!-- human resources -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline6() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content6() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-humanresources'); ?>
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
<!-- /humanresources -->

<!-- incorporation -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline7() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content7() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-incorporation'); ?>
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
<!-- /incorporation -->

<!-- investment -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline8() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content8() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-investment'); ?>
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
<!-- /investment -->

<!-- licensing -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline9() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content9() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-licensing'); ?>
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
<!-- /licensing -->

<!-- marketing -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline10() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content10() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-marketing'); ?>
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
<!-- /marketing -->

<!-- sales -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline11() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content11() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-sales'); ?>
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
<!-- /sales -->

<!-- technology -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline12() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content12() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-technology'); ?>
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
<!-- /technology -->

<!-- user research -->
<div class="row padding">
	<div class="four columns">
		<h3><?php echo $page->headline13() ?></h3>
	</div>
	<div class="eight columns">
		<p class="largeP"><?php echo $page->content13() ?></p>
	</div>
</div>

<div class="row padding">
	<div class="twelve columns">
		<ul class="block-grid three-up">
		<?php $files = $pages->find('content_about-resources-userresearch'); ?>
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
<!-- /user research -->


<!-- /MAIN -->

<?php snippet('footer') ?>