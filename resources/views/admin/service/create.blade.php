@extends('admin.adminlayout')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">fill the service you provide </p>
      <form  action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
      @csrf

    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
        <label for="ptitle">service name</label>
    <input type="text" name="servicename" value="" class="form-control" >
        </div>
        <div class="red">
       @error('servicename')
       {{$message}}
       @enderror
       </div>

      

        
        <div class="form-group">
        <label for="psubtitle">description</label>
   
    <textarea name="description" id="" cols="30" rows="10" style="width:100%;"></textarea>
        </div>

        <div class="red">
           @error('description')
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