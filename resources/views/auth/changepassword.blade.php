@extends('admin.adminlayout')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Chnage Password') }}</div>

              <form action="{{ route('update-password') }}" method="POST">
                  @csrf
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @elseif (session('error'))
                          <div class="alert alert-danger" role="alert">
                              {{ session('error') }}
                          </div>
                      @endif

                      <div class="mb-3">
                          <label for="oldPasswordInput" class="form-label">Old Password</label>
                          <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                              placeholder="Old Password">
                          @error('old_password')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="newPasswordInput" class="form-label">New Password</label>
                          <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                              placeholder="New Password">
                          @error('new_password')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                          <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                              placeholder="Confirm New Password">
                      </div>

                  </div>

                  <div class="card-footer">
                      <button class="btn btn-success">Submit</button>
                  </div>

              </form>
          </div>
      </div>
  </div>
</div>


{{-- <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">fill the what your client say </p>
     
      <form action="{{ url('changepassword') }}" method="POST" enctype="multipart/form-data">
      @csrf


    <div>
        @if(Session::has('status'))
            {{Session::get('status')}}
        @endif
    </div>

        <div class="form-group">
    <label for="ptitle">currentpassword</label>
    <input type="password"  name="current-password" value="" class="form-control" >
        </div>
        <div class="red">
       @error('name')
       {{$message}}
       @enderror
       </div>

        <div class="form-group">
            <label for="ptitle">new password</label>
            <input type="password" name="new-password" value="" class="form-control" >
        </div>
       
        <div class="red">
           @error('comment')
             {{$message}}
             @enderror
       </div>

        
        <div class="form-group">
        <label for="psubtitle">confirme password</label>
            <input type="password" name="confirm_password" value="" class="form-control" >
        </div>

        <div class="red">
           @error('photo')
             {{$message}}
             @enderror
       </div>
      

        <button type="submit" class="btn btn-primary me-2">change password</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
</div> --}}
@endsection






