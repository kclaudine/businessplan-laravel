<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>GetIt Done</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>

      .btn {
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); }
    .btn:hover, .btn:focus {
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15); }
  
  .medilife-btn {
    display: inline-block;
    color: #ffffff;
    background-color: #006cff;
    height: 45px;
    padding: 0 55px 0 30px;
    line-height: 42px;
    font-size: 14px;
    min-width: 140px;
    border-radius: 0;
    font-weight: 700;
    position: relative;
    z-index: 1;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms; }
    .medilife-btn span {
      width: 40px;
      height: 45px;
      background-color: #081f3e;
      display: inline-block;
      position: absolute;
      top: -1px;
      right: -1px;
      font-size: 24px;
      color: #ffffff;
      font-weight: 500;
      -webkit-transition-duration: 500ms;
      transition-duration: 500ms; }
    .medilife-btn:hover, .medilife-btn:focus {
      background-color: #081f3e;
      color: #ffffff; }
    .medilife-btn:hover span, .medilife-btn:focus span {
      color: #ffffff;
      background-color: #006cff; }
    .medilife-btn.btn-2 {
      background-color: #081f3e;
      color: #ffffff; }
      .medilife-btn.btn-2 span {
        color: #ffffff;
        background-color: #006cff; }
      .medilife-btn.btn-2:hover, .medilife-btn.btn-2:focus {
        background-color: #006cff;
        color: #ffffff; }
      .medilife-btn.btn-2:hover span, .medilife-btn.btn-2:focus span {
        color: #ffffff;
        background-color: #081f3e; }
    .medilife-btn.btn-3 {
      background-color: #ffffff;
      color: #081f3e;
      border: 2px solid;
      border-color: #006cff; }
      .medilife-btn.btn-3 span {
        top: -2px;
        right: -2px; }
    .medilife-btn.btn-4 {
      background-color: #ffffff;
      color: #081f3e;
      border: 2px solid;
      border-color: #006cff; }
      .medilife-btn.btn-4 span {
        background-color: #006cff;
        top: -2px;
        right: -2px; }
  
  .medilife-appoint-btn {
    display: inline-block;
    color: #ffffff;
    background-color: #ff0000;
    height: 50px;
    padding: 0 15px;
    line-height: 50px;
    font-size: 14px;
    min-width: 140px;
    border-radius: 0;
    font-weight: 500;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    text-transform: uppercase;
    box-shadow: none; }
    .medilife-appoint-btn span {
      font-weight: 700; }
    .medilife-appoint-btn:hover, .medilife-appoint-btn:focus {
      color: #006cff;
      background-color: #ffffff;
      box-shadow: none;
      font-weight: 500; }
    .medilife-appoint-btn:hover span, .medilife-appoint-btn:focus span {
      font-weight: 700; }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .medilife-appoint-btn {
        margin-top: 30px; } }
    @media only screen and (max-width: 767px) {
      .medilife-appoint-btn {
        margin-top: 10px; } }
  
    </style>
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>GetIt <em>Done</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive" >
            <ul class="navbar-nav ml-auto" id="medilifeMenu">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  {{-- <span class="sr-only">(current)</span> --}}
                </a>
              </li> 
              {{-- <li class="nav-item">
                <a class="nav-link" href="products.html">Our Products</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('intouch') }}">Contact Us</a>
              </li>
              <li>
              @if (Route::has('login'))
              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  @auth
                         <x-app-layout>
                         </x-app-layout>
                  @else
                      <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" >Log in</a></li>
                      

                      @if (Route::has('register'))
                          <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" >Register</a></li>
                      @endif
                  @endauth
              </div>
          @endif
        </li>
        
        
        {{-- <button type="button" class="btn btn-outline-danger">Danger</button> --}}
        {{-- <button type="button" class="btn btn-outline-secondary">Secondary</button> --}}
        {{-- <a class="btn btn-outline-secondary"" href="#" role="button">Link</a> --}}
        <!--SEARCH AND APPOINTMENT-->
        {{-- <a href="#" class="btn medilife-appoint-btn ml-30">For <span>emergencies</span> Click here</a> --}}
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->

    <div>
        home
    </div>
    

    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
            <!-- Appointment Button -->
            <a href="{{ route('contact') }}" class="btn medilife-appoint-btn ml-30">For <span>Booking</span> A Business Plan Click here</a>
            <a class="btn btn-outline-danger" href="{{ route('coach') }}" role="button" btn-lg>For <span> booking a coach</span> click here</a>
               
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Banner Ends Here -->

    @include('user.products')

   

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script src="javas/bootstrap.min.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
