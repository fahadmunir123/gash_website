<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Gamepad</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
	<!-- header section start -->
	<div class="header_section">

    @include('Frontend/navbar')
	</div>
	<!-- header section end -->
  <!-- banner section start -->
  <div class="banner_section layout_padding">
    <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Gash Games</h1>
                {{-- <h1 class="controller_text">controller</h1> --}}
                <p class="banner_text">Dodging Bird is the First game in our pool. Ensuring you most amusing moments of your life with a purpose of letting you earn reward against your victories</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="images/img-1.png"></div>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Video games</h1>
                <h1 class="controller_text">controller</h1>
                <p class="banner_text">Dodging Bird is the First game in our pool. Ensuring you most amusing moments of your life with a purpose of letting you earn reward against your victories</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="images/img-1.png"></div>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Gash Games</h1>
                <h1 class="controller_text">Play Games and Win Cash</h1>
                <p class="banner_text">Dodging Bird is the First game in our pool. Ensuring you most amusing moments of your life with a purpose of letting you earn reward against your victories</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="images/img-1.png"></div>
            </div>
          </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- banner section end -->
  <!-- about section start -->
  <div class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="image_2"><img src="images/img-2.png"></div>
        </div>
        <div class="col-md-6">
          {{-- <h1 class="about_text">Who Are We</h1> --}}
          <h1 class="about_text">Who Are We</h1>
          <p class="lorem_text1">
            <b>Gash Games</b> is a Conglomerate of <b>Akonto</b> which is one of the few software development and IT machine integration enterprise in Pakistan that works with agency systems and companies. As a privately owned enterprise, Akonto presents IT Consultancy, software program layout and development as well as expert offerings and hardware deployment and renovation to its clients.
            
            We also have special understanding in custom software development, IT services and custom solutions to our business enterprise clients according to their specific needs.
            <h4>
            Our software products include:</h4>
            
            ERP / Accounting System for Trading / Manufacturing / Service providers business
            Point of Sale  + Inventory system for multi chain retailers
            School + College Management System
            Human Resource, Payroll Management System
            Hospital Management System</p>
          <div class="shop_bt_2"><a href="www.akonto.ltd">Go to Akonto</a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- about section end -->
   <!-- video section start -->
  <div class="video_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="video_text_2">3d video game</h1>
          <h1 class="controller_text_2">remote control</h1>
          <p class="banner_text_2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
          <div class="shop_bt"><a href="#">Shop Now</a></div>
        </div>
        <div class="col-md-6">
          <div class="image_4"><img src="images/img-4.png"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- video section end -->
  <!-- testimonial section start -->
  {{-- <div class="testimonial_section layout_padding">
    <div class="container">
      <h1 class="testimonial_text">Testimonial</h1>
      <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
      <div class="testimonial_section_2">
        <div class="box_main">
          <div class="quote_icon"><img src="images/quote-icon.png"></div>
          <p class="dolor_text"> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
          <div class="client_main">
            <div class="client_left">
              <div class="images_5"><img src="images/img-5.png"></div>
            </div>
            <div class="client_right">
              <h1 class="sandy_text">Sandy Delex</h1>
              <p class="sandy_text_1">Reprehenderit</p>
            </div>
          </div>
        </div>
      </div>
      <div class="see_main">
        <div class="see_bt"><a href="#">See More</a></div>
      </div>
    </div>
  </div> --}}
  <!-- testimonial section end -->
  <!-- contact section start -->
  
  <!-- contact section end -->









  <!-- footer section start -->

{{-- @include('Frontend/footer'); --}}

  <!-- footer section end -->







  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">Copyright 2020 All Right Reserved By <a href="https://html.design/"> Free html Templates</p>
    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
        });
    </script>
</body>
</html>