<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bizler-Multipurpose Business Template</title>
  <meta name="Bizler" content="Bizler">
  <!-- description -->
  <meta name="description" content="Bizler-Multipurpose Business Template">
  <!-- keywords -->
  <meta name="keywords" content="Business , Bootstrap4, Responsive, HTML5, CSS3, Carousel, Website Template, Revolution, UI Development, Bizler">
  <?php require_once 'links.php'; ?>
</head>

<body>

  <!-- ====== Preloader ====== -->
  <div class="preloader js-preloader flex-center">
    <div class="dots">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
  </div>

  <div class="wraper">
    <!-- ====== Header Starts ====== -->
    <header class="header">
    <?php require_once 'header.php'; ?>
    </header>
    <!-- ====== Header End ====== -->

    <!-- ====== Banner Start ====== -->
    <section id="inner-banner">
      <div class="container">
        <div class="row">
          <div class="inner-heading">
            <h2>Contact Us</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->


    <!-- ====== Contact Detail Start ====== -->
    <section id="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <h3>Contact Info</h3>
                <div class="separator left-align ">
                  <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
                <div class="info">
                  <ul>
                    <li>
                      <div class="icon">
                        <i class="flat flaticon-phone-receiver"></i>
                      </div>
                      <div class="content">
                        <div class="label">Phone No.</div>
                        <div class="value">0123-456-789, 0123-456-789</div>
                      </div>
                    </li>

                    <li>
                      <div class="icon">
                        <i class="flat flaticon-mail-black-envelope-symbol"></i>
                      </div>
                      <div class="content">
                        <div class="label">Email Id</div>
                        <div class="value">info@bizler.com</div>
                      </div>
                    </li>

                    <li>
                      <div class="icon">
                        <i class="flat flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                      </div>
                      <div class="content">
                        <div class="label">Address</div>
                        <div class="value">123, Street Name, City Name, State Name, Country Name, Pin Code : 123456 </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                <div class="form-header text-center">
                  <h4>Let’s Get In Touch!</h4>
                  <div class="separator">
                    <ul>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div>
                  <p>It would be great to hear from you! If you got any questions</p>
                </div>
                <div class="contact-form">
                  <form action="https://wpshopmart.com/index.html">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                          <input value="" type="text" placeholder="Full Name" />
                        </div>
                        <div class="form-group">
                          <input value="" type="text" placeholder="Email" />
                        </div>
                        <div class="form-group">
                          <input value="" type="text" placeholder="Phone No." />
                        </div>
                        <div class="form-group">
                          <input value="" type="text" placeholder="Subject" />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
                        <textarea placeholder="Message"></textarea>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group text-center mar-none">
                        <button type="submit">Send Message <i class="flat flaticon-plane"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Contact Detail End ====== -->
    <!-- ====== Location Map Start ====== -->

    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2946.9024756292984!2d-82.94958102059759!3d42.38722399141172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824d5b348edb015%3A0xdaee97c5759dff87!2sMack+Market!5e0!3m2!1sen!2sin!4v1543833407272" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- ====== Location Map End ====== -->
  </div>
  <!-- ====== Footer Start ====== -->
  <?php require_once 'footer.php'; ?>
  <!-- ====== Footer End ====== -->
  <!-- popper js-->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js-->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints js plugin -->
  <script src="js/waypoints.min.js"></script>
  <!-- Counter-up js plugin -->
  <script src="js/jquery.counterup.min.js"></script>
  <!-- Preloadinator -->
  <script src="js/jquery.preloadinator.min.js"></script>
  <script>
    $('.js-preloader').preloadinator({
      minTime: 2000
    });
  </script>
  <!-- Lightbox-->
  <script src="js/lightbox.js"></script>
  <!--imageloaded js plugin -->
  <script src="js/imagesloaded.js"></script>
  <!-- isotope js -->
  <script src="js/isotope.min.js"></script>
  <!-- Owl Slider js-->
  <script src="js/owl.carousel.js"></script>
  <script src="js/owl.custom.js"></script>
  <!-- parallax js-->
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="js/jquery.localscroll-1.2.7-min.js"></script>
  <!-- Header menu -->
  <script src="js/jquery.smartmenus.min.js"></script>
  <!-- Custome js-->
  <script src="js/custom.js"></script>
</body>

</html>