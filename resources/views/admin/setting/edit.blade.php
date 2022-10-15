@extends('admin.adminlayout')

@section('content')
<div class="pull-right">
      <a class="btn btn-primary" href="{{ route('homesetting.index') }}" enctype="multipart/form-data"> Back</a>
</div>
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">SETTING </p>
      <form action="{{ route('homesetting.update',$homesetting->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
       @METHOD('PUT')
    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

     

    <div class="form-group">
        <label for="ptitle">logo</label>
    <input type="file" name="logo" value="{{$homesetting->logo}}" class="form-control" >
        </div>
        <div>
          <img src="{{('/uploads/gallery/'.$homesetting->logo)}}" alt="no image" style="width:100px;height:100px;">
          </div>
     


        <div class="form-group">
        <label for="ptitle">homephoto</label>
    <input type="file" name="homephoto" value="{{$homesetting->homephoto}}" class="form-control" >
        </div>

       

          <div>
            <img src="{{('/uploads/gallery/'.$homesetting->homephoto)}}" alt="no image" style="width:100px;height:100px;">
          </div>


      

       

        <button type="submit" class="btn btn-primary me-2">Submit</button>
       
      </form>
    </div>
  </div>
</div>

@endsection