@extends('client.clientlayout')

@section('content')

@if($homesettings->count())
                
                          @foreach($homesettings as $homesetting)
<div class="vg-page page-home" id="home" style="background-image: url(../uploads/gallery/{{$homesetting->homephoto}});background-size:cover;">
@endforeach

@else
<div class="vg-page page-home" id="home" style="background-image: url(../assets/img/bg_image_1.jp)">
@endif
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        @if($homesettings->count())
        <a href="" class="navbar-brand"><img src="{{('uploads/gallery/'.$homesetting->logo)}}" alt="no image" style="width:100px;height:100px;border-radius:50%;"></a>
        @else
      
        @endif
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">About</a>
            </li>
            <li class="nav-item active">
              <a href="#resume" class="nav-link" data-animate="scrolling">resume</a>
            </li>
            <li class="nav-item active">
              <a href="#services" class="nav-link" data-animate="scrolling">service</a>
            </li>
           
            <li class="nav-item active">
              <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
            </li>
            <li class="nav-item active">
              <a href="#testimonies" class="nav-link" data-animate="scrolling">testimonies</a>
            </li>
            <li class="nav-item active">
              <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
            </li>
            <li class="nav-item active">
              <a href="{{url('client/blogs')}}" class="nav-link" data-animate="scrolling">Blog</a>
            </li>
            <li class="nav-item active">
              <a href="{{url('client/gallery')}}" class="nav-link" data-animate="scrolling">gallery</a>
            </li>
           
          </ul>
         
                 
        <a href="/login" class="btn btn-theme-outline">login</a>
                
         
        </div>
      </div>
    </div>
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Welcome</h5>
      @if($profiles->count())
      @foreach($profiles as $profile)
      <h1 class="fw-light mb-4">I'm <b class="fg-theme">{{$profile->users->fullname}}</b> </h1>
      @endforeach
      @else
           
      @endif
    
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>
  

  @if($profiles->count())
  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
      @foreach($profiles as $profile)
        <div class="col-lg-4 py-3 ">
          <div class="img-place wow fadeInUp">
            <img src="uploads/gallery/{{$profile->profileimage}}"  alt="">
          </div>
        </div>
           
        <div class="col-lg-6 offset-lg-1 wow fadeInRight mb-4">
          <h1 class="fw-light mb-8">{{$profile->profiletitle}}</h1>
          <h5 class="fg-theme mb-3">{{$profile->profilesubtitle}}</h5>
          <p class="text-muted">{{$profile->	aboutMeDescription}}</p>
          <ul class="theme-list">
          <li><b>full name:</b>{{$profile->users->fullname}}</li>
            <li><b>phone number:</b>{{$profile->phonenumber}}</li>
            <li><b>email:</b>{{$profile->users->email}}</li>
            <li><b>address:</b> {{$profile->address}}</li>
           
          </ul>
          <button class="btn btn-theme-outline">Download CV</button>
        </div>
        @endforeach

      </div>
    </div>
    @else
   ,,,,

    @endif

    





   
    <div class="container pt-5" id="resume">
      <div class="row">
    
        <div class="col-md-6 wow fadeInRight">
         
          <h2 class="fw-normal">Education</h2>
          @if($educations->count())
          @foreach($educations as $education)
          <ul class="timeline mt-4 pr-md-5">
           
           
            <li>
              <div class="title">{{$education->startyear}} - {{$education->endyear}}</div>
              <div class="details">
                <h5>{{$education->degree}},{{$education->department}}</h5>
                <small class="fg-theme">{{$education->institution_name}}</small>

              </div>
            </li>
          </ul>
          @endforeach
        </div>
        @else

        @endif

        <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
      
          <h2 class="fw-normal">Experience</h2>
          
        @if($experiences->count())
        @foreach($experiences as $experience)
          <ul class="timeline mt-4 pr-md-5">
           
          
            <li>
              <div class="title">{{$experience->duration}}</div>
              <div class="details">
                <h5>{{$experience->responsibility}}</h5>
                <small class="fg-theme">{{$experience->companyname}}</small>

              </div>
            </li>
          </ul>

          @endforeach
        </div>
        @else

        @endif
      </div>
    </div>
  </div>
  
  



  
  
   <!-- Page Service -->
   @if($services->count())
   <div class="vg-page page-service" id="services">
    <h1 class="text-center wow fadeInUp">Services</h1>
    <div class="container">

      <div class="row">
      @foreach($services as $service)
        <div class="col-md-6 col-lg-6 mb-5 wow fadeInUp">
          <div class="card card-body">
           
            <h4 class="fg-theme">{{$service->servicename}}</h4>
            <p  style="font-family: sans-serif;font-size:20px;">{{$service->description}}</p>
           
          </div>
        </div>
       
      
        @endforeach
        
       
      </div>
      
    </div>
  </div> <!-- End page services -->
  @else

  @endif
  
  

 

<div class="vg-page page-blog" id="portfolio">
  @if($portfolios->count())
    <div class="container">
      <div class="text-center">
        <div class="badge badge-subhead wow fadeInUp">portfolio</div>
      </div>
      
      <div class="row post-grid">
      
        @foreach($portfolios as $portfolio)
        <div class="col-md-6 col-lg-4 wow fadeInUp">
      
          <div class="card">
        
            <div class="img-place">
              <img src="uploads/gallery/{{$portfolio->projectimage}}" alt="">
            </div>
            <div class="caption">
            
              <div class="img-caption">
                <h5 class="fg-theme">{{$portfolio->projecttitle}}</h5>
                <p>{{$portfolio->projectdescription}}</p>
              </div>

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
  
  <!-- Testimonial -->
  <div class="vg-page page-testimonial" id="testimonies">
    <div class="container">
      <h1 class="text-center fw-normal wow fadeInUp">What Clients are Saying</h1>
      <div class="row justify-content-center mt-5 wow fadeInUp">
        <div class="col-md-9">
        @if($testimonies->count())
          <div class="owl-carousel testi-carousel">

          @foreach($testimonies as $testimony)
          <div class="item">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-place">
                    <img  src="uploads/gallery/{{$testimony->photo}}" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="caption">
                    <div class="testi-content">{{$testimony->comment}}</div>
                    <div class="testi-info">
                      <div class="thumb-profile">
                        <img src="uploads/gallery/{{$testimony->photo}}" alt="">
                      </div>
                      <div class="tagline">
                        <h5 class="mb-0">{{$testimony->name}}</h5>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach


            
          </div>

          @else

          @endif
        </div>
      </div>
    </div>
  </div> <!-- End testimonial -->
  

  
  
  
  <!-- Contact -->
  <section id="contact">
  <div class="vg-page page-contact">
    <div class="container-fluid">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Contact</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Get in touch</h1>
      <div class="row py-5">
        {{-- @if($homesettings->count())
        <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
                 @foreach($homesettings as $homesetting)
            <div  style="width: 50%; height: 100%;margin:auto;">

            </div>
            @endforeach
        
        </div>

        @else

        @endif --}}
        <div class="col-lg-5">
          <form action="/contactme" method="post" class="vg-contact-form">
            @csrf
            <div class="form-row">
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="name" placeholder="Your Name">
              </div>
              <div class="red">
                @error('name')
                {{$message}}

                @enderror
              </div>
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="email" placeholder="Email Address">
              </div>
              <div class="red">
                @error('email')
                {{$message}}

                @enderror
              </div>
             
              <div class="col-12 mt-3 wow fadeInUp">
                <textarea class="form-control" name="message" rows="6" placeholder="Enter message here.."></textarea>
              </div>
              <div class="red">
                @error('message')
                {{$message}}

                @enderror
              </div>

              <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- End Contact -->
</section>
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
             
              <li target="_blank"> {{$profile->phonenumber}}</li>
              @endforeach
            @else

            @endif
          </ul>
        </div>
      </div>
    </div>
    
     
    
  </div>
</div> <!-- End foote

  
 @endsection