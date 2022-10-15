@extends("admin.adminlayout")

@section("content")

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
     
      <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('gallery.index') }}" enctype="multipart/form-data"> Back</a>
</div>
      <form action="{{ route('gallery.update',$gallery->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
    @METHOD('PUT')
    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
        <label for="ptitle"><h1>update image</h1> </label>
    <input type="file" name="image" value="{{$gallery->image}}" class="form-control" >
        </div>
        <div>
          <img src="{{('/uploads/gallery/'.$gallery->image)}}" alt="no image" style="width:100px;height:100px;">
        </div>
        <div class="red">
       @error('image')
       {{$message}}
       @enderror
</div>

<div class="form-group">
            <label for="ptitle">status</label>
     
                    <select name="status" class="form-control p_input" style="color:black;" id="">
                        <option value="1" >active</option>
                        <option value="0"  >inactive</option>
                       
                    </select>
            

        </div>
       

        <button type="submit" class="btn btn-primary me-2">Submit</button>
       
      </form>
    </div>
  </div>
</div>


@endsection