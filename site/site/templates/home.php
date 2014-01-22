<?php snippet('header') ?>

<!-- MAIN -->

<!-- promo -->
<section id="promo">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 text-center">
        <h1>
          <?php echo $page->headline() ?>
        </h1>
      </div>
    </div>
  </div>
</section>

</div> <!-- onlyhome -->

<!-- container -->
<section class="container" id="homecontent">

  <!-- main content -->
  <section class="row">
    <div class="col-xs-12 col-md-6 promoimageA">
      <?php echo $page->section1image() ?>
    </div>
    <div class="col-xs-12 col-md-6 text-area vertically-align-text promotextA">
      <h3><?php echo $page->section1() ?></h3>
      <?php echo $page->section1text() ?>
    </div>
  </section>

  <section class="row">
    <div class="col-xs-12 col-md-6 promotextB">
      <h3><?php echo $page->section2() ?></h3>
      <h5><?php echo $page->section2subhead1() ?></h5>
      <p><?php echo $page->section2text1() ?></p>
      <h5>Upcoming Events</h5>
      <ul class="">
        <li><a href="/calendar/">Tues Jan 28 - Lorem ipsum event</a></li>
        <li><a href="/calendar/">Tues Jan 28 - Lorem ipsum event</a></li>
        <li><a href="/calendar/">Tues Jan 28 - Lorem ipsum event</a></li>
        <li><a href="/calendar/">See more</a></li>
      </ul>
      <h5><?php echo $page->section2subhead2() ?></h5>
      <p><?php echo $page->section2text2() ?></p>
      <h5><?php echo $page->section2subhead3() ?></h5>
      <p><?php echo $page->section2text3() ?></p>
    </div>
    <div class="col-xs-12 col-md-6 vertically-align-image promoimageB">
      <?php echo $page->section2image() ?>
    </div>
  </section>
  <!-- /MAIN -->

      <!-- <h3><?php echo $page->columnheader2() ?></h3>
      <?php echo $page->columntext2() ?> -->

<!-- /end container -->
</section>


<?php snippet('footer') ?>