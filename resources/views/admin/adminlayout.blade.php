<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>portfolio Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('template/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/vendors/css/vendor.bundle.base.css')}}">

    
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('template/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('template/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('template/assets/images/favicon.png')}}" />

   
  </head>
  <body>
    
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
           
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
        
            

            </li>
            

          
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                <div class="navbar-profile">

                  <p class="mb-0 d-none d-sm-block navbar-profile-name">
                    

                  </p>
                
                </div>
              </a>
              

              
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>


        </div>
      </nav>
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <h2>dash board</h2>
          <a class="sidebar-brand brand-logo-mini" href="index.html"></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
               
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><strong>{{Auth()->user()->fullname}}</strong></h5>
                  
                </div>
              </div>
              
             
          </li>
          <!-- left side navigation -->
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" target="_blank" href="{{url('/')}}">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">my web page</span>
            </a>
          </li>


          

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('homesetting.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">home/setting</span>
            </a>
          </li>

        


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('profile.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">profile</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('createaccounte.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">create account</span>
            </a>
          </li>


          <li class="nav-item menu-items">
          <a class="nav-link" href="{{route('testimony.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">testimonies</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('socialmedia.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">social media link</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('education.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Education</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('experience.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Experience</span>
            </a>
          </li>



          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('service.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Services</span>
            </a>
          </li>


         

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('portfolio.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Project</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('gallery.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Gallery</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('blog.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Blogs</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('contactme')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">contact message</span>
              @if($contact>0)
              <span class="menu-icon" style="background-color:rgb(0, 255, 213)">
                <i class="btn-icon" style="color:white;font-size:25px;font-weight:bold">
              
               {{$contact}}
               @else


               @endif
               
                </i>
              </span>
            </a>
           
          </li>

         

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('changepassword')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">changepassword</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('logout')}}">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">logout</span>
            </a>
          </li>
          

          


         
         
         
        
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
        


           
<!-- main content -->

@yield('content')







            
          
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> </span>

            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>