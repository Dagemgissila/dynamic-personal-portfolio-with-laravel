@extends("admin.adminlayout")

@section("content")


<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">create  </p>
      <h1>create accounte</h1>
      <form action="{{ route('createaccounte.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>
    <div class="form-group">
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
                    <select name="role" class="form-control p_input" style="color:black;" id="">
                        <option value="admin">admin</option>
                        <option value="teammember" selected >team member</option>
                        <option value="other">other</option>
                    </select>
                  </div>
                  

       

        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
</div>





       

@endsection