@extends('admin.adminlayout')

@section('content')
<div class="pull-right">
      <a class="btn btn-primary" href="{{ route('portfolio.index') }}" enctype="multipart/form-data"> Back</a>
</div>
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">portfolio </p>
      <form  action="{{route('portfolio.store')}}" method="post" enctype="multipart/form-data">
      @csrf

   

        <div class="form-group">
        <label for="ptitle">projecttitle</label>
    <input type="text" name="projecttitle" value="" class="form-control" >
        </div>
        <div class="red">
       @error('projecttitle')
       {{$message}}
       @enderror
       </div>

        <div class="form-group">
        <label for="ptitle">projectimage </label>
    <input type="file" name="projectimage" value="" class="form-control" >
        </div>
       
        <div class="red">
           @error('projectimage')
             {{$message}}
             @enderror
       </div>

        
        <div class="form-group">
        <label for="psubtitle">project description</label>
    <input type="text" name="projectdescription" value="" class="form-control">
        </div>

        <div class="red">
           @error('projectdescription')
             {{$message}}
             @enderror
       </div>

       

        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
</div>

@endsection