<?php snippet('header') ?>

<!-- MAIN startup resources -->

<section class="header-box">
  <div class="container">
    <!-- main content -->
    <section class="row">
      <div class="col-md-12">
        <h1><?php echo $page->title() ?></h1>
        <h4><?php echo $page->headline() ?></h4>
      </div>
    </section>
  </div>
</section>

</div> <!-- end .top-image-bg -->

<!-- container -->
<section class="container maincontent">

  <section class="row-fluid">
      <?php echo $page->calendariframe() ?>
  </section>

</section>
<!-- /end container -->
<!-- /MAIN -->


<?php snippet('footer') ?>