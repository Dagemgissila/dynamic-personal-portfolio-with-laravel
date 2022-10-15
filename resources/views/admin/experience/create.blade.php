@extends("admin.adminlayout")

@section("content")
<div class="pull-right">
      <a class="btn btn-primary" href="{{ route('experience.index') }}" enctype="multipart/form-data"> Back</a>
</div>
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">fill your experience </p>
      <form  action="{{route('experience.store')}}" method="post">
      @csrf

   

        <div class="form-group">
        <label for="ptitle">company name </label>
    <input type="text" name="companyname" value="" class="form-control" >
        </div>
        <div class="red">
       @error('companyname')
       {{$message}}
       @enderror
       </div>

        <div class="form-group">
        <label for="ptitle">your responsibility </label>
    <input type="text" name="responsibility" value="" class="form-control" >
        </div>
       
        <div class="red">
           @error('responsibility')
             {{$message}}
             @enderror
       </div>

        
        <div class="form-group">
        <label for="psubtitle">duration</label>
    <input type="text" name="duration" value="" class="form-control">
        </div>

        <div class="red">
           @error('duration')
             {{$message}}
             @enderror
       </div>


        <button type="submit" class="btn btn-primary me-2">Submit</button>
      
      </form>
    </div>
  </div>
</div>


@endsection