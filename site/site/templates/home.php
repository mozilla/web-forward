<?php snippet('header') ?>

<!-- MAIN -->

<!-- promo -->
<section id="promo">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        promo image
      </div>
    </div>
  </div>
</section>

<!-- container -->
<section class="container maincontent">

  <!-- main content -->
  <section class="row">
    <div class="col-md-12">
      <h2><?php echo $page->columnheader1() ?></h2>
      <?php echo $page->columntext1() ?>
    </div>
  </section>

  <section class="row">
    <div class="col-md-12">
      <h2>How Can You Be A Part Of It?</h2>
    </div>
  </section>
  <section class="row text-center">
    <div class="col-xs-4">
      <img src="" alt="Startup image">
      <h3>If you are a startup program</h3>
      <p>We’d love to explore how we provide our workshops to your startup community.</p>
    </div>
    <div class="col-xs-4">
      <img src="" alt="Startup image">
      <h3>If you are a startup</h3>
      <p>We’d love to explore how we provide our workshops to your startup community.</p>
    </div>
    <div class="col-xs-4">
      <img src="" alt="Startup image">
      <h3>If you love startups</h3>
      <p>you can help by sharing our offering with your local accelerator, coworking space or other startup program. You can also roll up your sleeves and be a workshop facilitator!</p>
    </div>
  </section>
  <!-- /MAIN -->

      <!-- <h2><?php echo $page->columnheader2() ?></h2>
      <?php echo $page->columntext2() ?> -->

<!-- /end container -->
</section>


<?php snippet('footer') ?>