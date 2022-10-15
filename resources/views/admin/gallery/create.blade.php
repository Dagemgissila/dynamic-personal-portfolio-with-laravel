@extends("admin.adminlayout")

@section("content")
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">add photo your gallery </p>
      <form  action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
      @csrf

    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
        <label for="ptitle"><h1>add gallery image</h1> </label>
    <input type="file" name="image" value="" class="form-control" >
        </div>
        <div class="red">
       @error('image')
       {{$message}}
       @enderror
</div>
       

        <button type="submit" class="btn btn-primary me-2">Submit</button>
      
      </form>
    </div>
  </div>
</div>


@endsection