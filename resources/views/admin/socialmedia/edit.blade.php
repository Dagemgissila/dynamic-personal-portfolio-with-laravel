@extends('admin.adminlayout')

@section('content')
<div class="pull-right">
      <a class="btn btn-primary" href="{{ route('socialmedia.index') }}" enctype="multipart/form-data"> Back</a>
</div>
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">fill your social media link information </p>
      <form action="{{ route('socialmedia.update',$socialmedia->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @METHOD('PUT')
    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
        <label for="ptitle">socialmediaicon</label>
    <input type="text" name="socialmediaicon" value="{{$socialmedia->socialmediaicon}}" class="form-control" >
        </div>

        <div class="red">
       @error('socialmediaicon')
       {{$message}}
       @enderror
  </div>

        <div class="form-group">
 <label for="psubtitle">url</label>
    <input type="text" name="url" value="{{$socialmedia->url}}" class="form-control" >
        </div>
       
        <div class="red">
           @error('url')
             {{$message}}
             @enderror
       </div>

        

        <button type="submit" class="btn btn-primary me-2">Submit</button>
      
      </form>
    </div>
  </div>
</div>

@endsection