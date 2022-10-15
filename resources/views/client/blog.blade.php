<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  

  
  <title>Blog</title>
 <link rel="shortcut icon" type="image/ico" href="{{asset('../assets/favicon.ico')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('../assets/css/themify-icons.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('../assets/css/bootstrap.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('../assets/vendor/animate/animate.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('../assets/vendor/owl-carousel/owl.carousel.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('../assets/vendor/nice-select/css/nice-select.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('../assets/vendor/fancybox/css/jquery.fancybox.min.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('../assets/css/virtual.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('../assets/css/topbar.virtual.css')}}">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>

  <!-- Navbar -->
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      @if($homesettings->count())
      @foreach($homesettings as $d)
    <img src="{{('/uploads/gallery/'.$d->logo)}}" alt="no image" style="width:100px;height:100px;border-radius:50%;"></a>
         @endforeach
    @else

    @endif
      <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
        <span class="ti-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="/#home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="/#resume" class="nav-link">resume</a>
          </li>
          <li class="nav-item">
            <a href="/#services" class="nav-link">services</a>
          </li>
          <li class="nav-item">
            <a href="/#portfolio" class="nav-link">Portofolio</a>
          </li>
          <li class="nav-item active">
            <a href="" class="nav-link">Blog</a>
          </li>
          <li class="nav-item">
              <a href="{{url('client/gallery')}}" class="nav-link" data-animate="scrolling">gallery</a>
            </li>
          <li class="nav-item">
            <a href="/#contact" class="nav-link">Contact</a>
          </li>
        </ul>
        
      </div>
    </div>
  </div> <!-- End Navbar -->
  
  <div class="vg-page page-blog">
    <div class="container">

     


      
</div>

<div class="vg-page page-blog" id="blog">
@if($blogs->count())
    <div class="container">
      <div class="text-center">
        <div class="badge badge-subhead wow fadeInUp">Blog</div>
      </div>
      
      <div class="row post-grid">
      
      @foreach($blogs as $blog)
        <div class="col-md-6 col-lg-4 wow fadeInUp">
         <a href="/viewBlogdetail/{{$blog->id}}">
          <div class="card">
        
            <div class="img-place">
              <img src="../uploads/gallery/{{$blog->image}}" alt="">
            </div>
            <div class="caption">
            
              <a href="#" class="post-title">{{$blog->topic}}</a>
              <span class="post-date"><span class="sr-only">Published on</span> {{$blog->created_at}}</span>
            </div>
         
          </div>
          </a>
       
        </div>
        @endforeach

       
      </div>
    </div>
    @else

    @endif
  </div> <!-- End blog -->

  <!-- Footer -->
  <div class="vg-footer">
    <h1 class="text-center">Virtual Folio</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="footer-info">
            <p>Where to find me</p>
            <hr class="divider">
            <p class="fs-large fg-white">1600 Amphitheatre Parkway Mountain View, California 94043 US</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Follow me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              @if($socialmedia->count())
                @foreach($socialmedia as $s)
                 <li><a href="{{$s->url}}">{{$s->socialmediaicon}}</a></li>
              @endforeach
              @else
              @endif
  
            
              
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Contact me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              @if($profiles->count())
              @foreach($profiles as $profile)
              
               <li> {{$profile->phonenumber}}</li>
               @endforeach
             @else
 
             @endif
              
            </ul>
          </div>
        </div>
      </div>
      
       
      
    </div>
  </div> <!-- End foote<!-- End footer -->
  
  
<script src="../assets/js/jquery-3.5.1.min.js"></script>
  
<script src="../assets/js/bootstrap.bundle.min.js"></script>
  
<script src="../assets/vendor/owl-carousel/owl.carousel.min.js"></script>
  
<script src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  
<script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>
  
<script src="../assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
  
<script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

<script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>

<script src="../assets/js/google-maps.js"></script>
  
<script src="../assets/js/topbar-virtual.js"></script>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->
  
</body>
</html>