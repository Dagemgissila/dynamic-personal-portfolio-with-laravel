<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('../../template/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('../../template/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('../../template/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('../../template/assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register to create account</h3>
                <form action="{{route('register')}}" method="post">

                   @csrf
                  <div class="form-group">
                  <div class="red">
                       @if(Session::has('error'))
                     {{Session::get('error')}}
                        @endif
                     </div>
                  <label for="fullname"><b>fullname</b></label>
                  <input type="text" class="form-control p_input" placeholder="Enter full name" name="fullname" value="{{old('fullname')}}">
                  </div>
                  <div class="red">
                  @error('fullname')
                  {{$message}}
                    @enderror
                   </div>


                  <div class="form-group">
                  <label for="email"><b>Email</b></label>
                  <input type="email" class="form-control p_input" placeholder="Enter Email" name="email" value="{{old('email')}}">
                  </div>

                  <div class="red">
                       @error('email')
                    {{$message}}
                        @enderror
                       </div>


                  <div class="form-group">
                  <label for="psw"><b>Password</b></label>
                  <input type="password" class="form-control p_input" placeholder="Enter Password" name="password" value="{{old('password')}}">
                  </div>

                  <div class="red">
                       @error('password')
                    {{$message}}
                        @enderror
                       </div>


                  <div class="form-group">
                  <label for="psw"><b>confirm Password</b></label>
                  <input type="password" class="form-control p_input" placeholder="Enter Password" name="password_confirmation" value="{{old('password')}}">
                  </div>
                  <div class="red">
                       @error('password_confirmation')
                    {{$message}}
                        @enderror
                       </div>

                 
                   
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">register</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>