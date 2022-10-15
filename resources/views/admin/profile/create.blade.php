@extends('admin.adminlayout')

@section('content')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">fill the your profile information  </p>
      <form  action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
      @csrf

    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

    <div class="form-group">
        <label for="ptitle">aboutTitle(example....hello  i am  your name) </label>
    <input type="text" name="profiletitle" value="" class="form-control" >
        </div>
        <div class="red">
       @error('aboutTitle')
       {{$message}}
       @enderror
       </div>

       <div class="form-group">
        <label for="ptitle">aboutSubTitle (example.....i am web developer....i am lawyer)</label>
    <input type="text" name="profileSubTitle" value="" class="form-control" >
        </div>
        <div class="red">
       @error('aboutSubTitle')
       {{$message}}
       @enderror
       </div>

       <div class="form-group">
        <label for="ptitle">profileimage </label>
    <input type="file" name="profileimage" value="" class="form-control" >
        </div>
        <div class="red">
       @error('aboutImage')
       {{$message}}
       @enderror
       </div>

      

        <div class="form-group">
        <label for="ptitle">aboutMeDescription </label>
    <input type="text" name="aboutMeDescription" value="" class="form-control" >
        </div>
        <div class="red">
       @error('aboutMeDescription')
       {{$message}}
       @enderror
       </div>

       <div class="form-group">
        <label for="ptitle">phone number </label>
    <input type="number" name="phonenumber" value="" class="form-control" >
        </div>
       
        <div class="red">
           @error('phonenumber')
             {{$message}}
             @enderror
       </div>


        <div class="form-group">
        <label for="ptitle">address </label>
    <input type="text" name="address" value="" class="form-control" >
        </div>
       
        <div class="red">
           @error('address')
             {{$message}}
             @enderror
       </div>

        
        <div class="form-group">
        <label for="psubtitle">birthdate</label>
    <input type="date" name="birthdate" value="" class="form-control">
        </div>

        <div class="red">
           @error('birthdate')
             {{$message}}
             @enderror
       </div>


        <button type="submit" class="btn btn-primary me-2">submit</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
</div>
@endsection