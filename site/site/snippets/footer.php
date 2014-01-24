
  <!-- footer -->
	<footer>
		<div class="container">
		  <div class='row'>
  			<div class="col-xs-12 col-md-4">
  				<a href="http://www.mozilla.org/" class="footer-logo"><img src="/assets/images/sandstone/footer-mozilla.png" alt="mozilla" /></a>
  			</div>
  			<div class="col-xs-6 col-md-4">
  				<nav>
  					<ul class="list-unstyled">
  						<li><a href="mailto:webfwd@mozilla.com">Contact</a></li>
  						<li><a href="https://twitter.com/#!/MozWebFWD">Twitter</a></li>
  						<li><a href="https://www.facebook.com/webfwd">Facebook</a></li>
  					</ul>
  				</nav>
  			</div>
  			<div class="col-xs-6 col-md-4">
  				<nav>
  					<ul class="list-unstyled">
  						<!-- <li><a href="/calendar/">Events</a></li> -->
  						<li><a href="http://www.mozilla.org/privacy-policy.html">Privacy Policy</a></li>
  						<li><a href="http://www.mozilla.org/about/legal.html">Legal Notices</a></li>
  					</ul>
  				</nav>
  			</div>
  		</div>
		</div>
	</footer>
	<!-- /footer -->

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="../assets/js/jquery-1.10.2.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/classie.js"></script>
  <script src="../assets/js/cbpAnimatedHeader.js"></script>
  <script src="../assets/js/modernizr.custom.js"></script>
  <script src="https://www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>

  <script type="text/javascript" charset="utf-8">
    //change bg images
    if(window.location.href == "http://localhost:8888/resources/") {
      //resources bg image
      $(".top-image-bg").css("background","url('/assets/images/promo-resources.png') no-repeat center center fixed");
      $(".top-image-bg").css("background-size","cover");
      $(".top-image-bg").css("height","auto");
    }

    if(window.location.href == "http://localhost:8888/partners/") {
      //resources bg image
      $(".top-image-bg").css("background","url('/assets/images/promo-partners.png') no-repeat center center fixed");
      $(".top-image-bg").css("background-size","cover");
      $(".top-image-bg").css("height","auto");
    }

    if(window.location.href == "http://localhost:8888/calendar/") {
      //resources bg image
      $(".top-image-bg").css("background","url('/assets/images/promo-calendar.png') no-repeat center center fixed");
      $(".top-image-bg").css("background-size","cover");
      $(".top-image-bg").css("height","auto");
    }

    if(window.location.href == "http://localhost:8888/about/") {
      //resources bg image
      $(".top-image-bg").css("background","url('/assets/images/promo-about.png') no-repeat center center fixed");
      $(".top-image-bg").css("background-size","cover");
      $(".top-image-bg").css("height","auto");
    }

    $('#resources .row .col-xs-6.col-md-4:nth-child(3n)').after('<div class="clearfix visible-xs visible-sm visible-md visible-lg"></div>');

  </script>


</body>
</html>
