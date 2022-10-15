@extends("admin.adminlayout")

@section("content")

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">create blog </p>
      <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
        <label for="ptitle">topic </label>
    <input type="text" name="topic" value="" class="form-control" >
        </div>
        <div class="red">
       @error('topic')
       {{$message}}
       @enderror
       </div>

        <div class="form-group">
        <label for="ptitle">content </label>
    <textarea name="content" id="" cols="30" rows="10" style="width:100%;"></textarea>
        </div>
       
        <div class="red">
           @error('content')
             {{$message}}
             @enderror
       </div>

        
        <div class="form-group">
        <label for="psubtitle">image</label>
    <input type="file" name="image" value="" class="form-control">
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




