@extends("admin.adminlayout")

@section("content")


  
<div class="col-md-12 grid-margin stretch-card">

  <div class="card">
  <h1>testimonies</h1>
    <div class="card-body">
      <h4 class="card-title"></h4>
    
      <form action="{{ route('testimony.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
    <label for="ptitle">name</label>
    <input type="text" style="background-color:white;" name="name" value="" class="form-control" >
        </div>
        <div class="red">
       @error('name')
       {{$message}}
       @enderror
       </div>

        <div class="form-group">
            <label for="ptitle">comment</label>
            <textarea name="comment" id="" cols="20" rows="20" class="form-control"></textarea>
        </div>
       
        <div class="red">
           @error('comment')
             {{$message}}
             @enderror
       </div>

        
        <div class="form-group">
        <label for="psubtitle">photo</label>
            <input type="file" name="photo" value="" class="form-control" >
        </div>

        <div class="red">
           @error('photo')
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




