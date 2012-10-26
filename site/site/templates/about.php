<?php snippet('header') ?>

<!-- MAIN -->

<div class="row padding">
	<div class="twelve columns text-center">
		<h1 class="large"><?php echo $page->headline() ?></h1>
	</div>
</div>

<div class="row padding-small">
	<div class="ten columns centered">
		<div id="featured"> 
			<img src="/assets/images/about-program.jpg" alt="WebFWD Program" data-caption="#htmlCaption1" />
			<img src="/assets/images/about-experts.jpg" alt="WebFWD Experts" data-caption="#htmlCaption2" />
			<img src="/assets/images/about-team.jpg" alt="WebFWD Team" data-caption="#htmlCaption3" />
			<img src="/assets/images/about-partners.jpg" alt="WebFWD Partners" data-caption="#htmlCaption4" />
		</div>
		<span class="orbit-caption" id="htmlCaption1"><h4><a href="/about/program/">Learn about the program</a></h4></span>
		<span class="orbit-caption" id="htmlCaption2"><h4><a href="/about/experts/">Meet the experts</a></span>
		<span class="orbit-caption" id="htmlCaption3"><h4><a href="/about/team/">Connect with our team</a></span>
		<span class="orbit-caption" id="htmlCaption4"><h4><a href="/about/partners/">Benefit from our partners</a></span>
	</div>
</div>

<div class="row padding-small" id="aboutMain">
	<div class="four columns">
		<p><?php echo $page->about() ?></p>
		<a href="/apply/" class="medium blue radius button">Apply For Our February 2013 Class</a>
		<p><a href="#" data-reveal-id="myModal">Test</a></p>
	</div>
	<div class="eight columns">
		<ul class="block-grid two-up">
			<li>
				<h3><a href="<?php echo url($page->slug1()) ?>"><?php echo $page->header1() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description1() ?></p>
			</li>
			<li>
				<h3><a href="<?php echo url($page->slug2()) ?>"><?php echo $page->header2() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description2() ?></p>
			</li>
			<li>
				<h3><a href="<?php echo url($page->slug3()) ?>"><?php echo $page->header3() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description3() ?></p>
			</li>
			<li>
				<h3><a href="<?php echo url($page->slug4()) ?>"><?php echo $page->header4() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description4() ?></p>
			</li>
			<li>
				<h3><a href="<?php echo url($page->slug5()) ?>"><?php echo $page->header5() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description5() ?></p>
			</li>
			<li>
				<h3><a href="<?php echo url($page->slug6()) ?>"><?php echo $page->header6() ?> »</a></h3>
				<p class="largeP"><?php echo $page->description6() ?></p>
			</li>
		</ul>
	</div>
</div>

<!-- /MAIN -->

<?php snippet('footer') ?>