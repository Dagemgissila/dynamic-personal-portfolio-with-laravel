@extends('admin.adminlayout')

@section('content')

      <a class="btn btn-primary" href="{{ route('homesetting.index') }}" enctype="multipart/form-data"> Back</a>

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">SETTING </p>
      <form  action="{{route('homesetting.store')}}" method="post" enctype="multipart/form-data">
        @csrf
  
      <div>
          @if(Session::has('success'))
              {{Session::get('success')}}
          @endif
      </div>
  
          <div class="form-group">
          <label for="ptitle">homephoto</label>
      <input type="file" name="homephoto" value="" class="form-control" >
          </div>
  
         
  
          <div class="form-group">
          <label for="ptitle">logo</label>
      <input type="file" name="logo" value="" class="form-control" >
          </div>
          
  
          <button type="submit" class="btn btn-primary me-2">Submit</button>
         
        </form>
      </div>
    </div>
  </div>
    

@endsection