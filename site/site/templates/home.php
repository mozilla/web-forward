<?php snippet('header') ?>

<!-- MAIN -->

<!-- promo -->
<section id="promo">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>
          We help entrepreneurs change the world.
        </h1>
      </div>
    </div>
  </div>
</section>

<!-- container -->
<section class="container" id="home">

  <!-- main content -->
  <section class="row">
    <div class="col-md-6">
      <img src="assets/images/promo-a.png" class="img-responsive promo-img">
    </div>
    <div class="col-md-6 text-area vertically-align-text">
      <h3><?php echo $page->columnheader1() ?></h3>
      <?php echo $page->columntext1() ?>
    </div>
  </section>

  <section class="row">
    <div class="col-xs-6 col-md-6">
      <h3>How Can You Be A Part Of It?</h3>
      <h5>If you are a startup program</h5>
      <p>We’d love to explore how we provide our workshops to your startup community.</p>
      <h5>If you are a startup</h5>
      <p>Check out our event calendar and let us know if there is an event you wish to attend (or organize!) in your community.</p>
      <h5>If you love startups</h5>
      <p>You can help by sharing our offering with your local accelerator, coworking space or other startup program. You can also roll up your sleeves and be a workshop facilitator!</p>
    </div>
    <div class="col-xs-12 col-md-6 vertically-align-image">
      <img src="assets/images/promo-b.png" class="img-responsive promo-img">
    </div>
  </section>
  <!-- /MAIN -->

      <!-- <h3><?php echo $page->columnheader2() ?></h3>
      <?php echo $page->columntext2() ?> -->

<!-- /end container -->
</section>


<?php snippet('footer') ?>