<?php snippet('header') ?>

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

<!-- MAIN -->

<div class="row padding">
	<div class="twelve columns text-center">
		<h1 class="large"><?php echo $page->headline() ?></h1>
	</div>
</div>

<!-- video -->
<div class="row padding-small">
	<div class="ten columns centered">
		<video id="webfwd-about-video" class="video-js vjs-default-skin" controls preload="none" data-setup="{}" poster="/assets/images/webfwd_2012.jpg">
			<source src="https://videos-cdn.mozilla.net/serv/webfwd/webfwd_2012.webm" type='video/webm' />
			<source src="https://videos-cdn.mozilla.net/serv/webfwd/webfwd_2012.mp4" type='video/mp4' />
		</video>
	</div>
</div>
<script type="text/javascript">
  // Once the video is ready
  _V_("webfwd-about-video").ready(function(){

    var myPlayer = this;    // Store the video object
    var aspectRatio = 9/16; // Make up an aspect ratio

    function resizeVideoJS(){
      // Get the parent element's actual width
      var width = document.getElementById(myPlayer.id).parentElement.offsetWidth;
      // Set width to fill parent element, Set height
      myPlayer.width(width).height( width * aspectRatio);
    }

    resizeVideoJS(); // Initialize the function
    window.onresize = resizeVideoJS; // Call the function on resize
  });
</script>
<!-- /video -->

<!--
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
-->

<div class="row padding-small" id="aboutMain">
	<div class="four columns">
		<p><?php echo $page->about() ?></p>
		<a href="/apply/" class="medium blue radius button">Apply For Our Next Class</a>
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