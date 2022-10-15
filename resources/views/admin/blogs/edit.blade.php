@extends("admin.adminlayout")

@section("content")

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
    
      <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('blog.index') }}" enctype="multipart/form-data"> Back</a>
</div>
      <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
@method('PUT')
    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
        <label for="ptitle">topic </label>
    <input type="text" name="topic" value="{{$blog->topic}}" class="form-control" >
        </div>
        <div class="red">
       @error('topic')
       {{$message}}
       @enderror
       </div>

        <div class="form-group">
        <label for="ptitle">content </label>
    <textarea name="content" id="" cols="30" value="" rows="10" style="width:100%;">{{$blog->content}}</textarea>
        </div>
       
        <div class="red">
           @error('content')
             {{$message}}
             @enderror
       </div>

        
        <div class="form-group">
        <label for="psubtitle">image</label>
    <input type="file" name="image" value="" value="{{$blog->image}}" class="form-control">
        </div>
        <div>
          <img src="{{('/uploads/gallery/'.$blog->image)}}" alt="no image" style="width:150px;height:150px;">
        </div>

        <div class="red">
           @error('image')
             {{$message}}
             @enderror
       </div>

       <div class="form-group">
            <label for="ptitle">status</label>
     
                    <select name="status" class="form-control p_input"  id="">
                        <option value="1" selected>active </option>
                        <option value="0"  >inactive</option>
                       
                    </select>
            

        </div>

       

        <button type="submit" class="btn btn-primary me-2">Submit</button>
 
      </form>
    </div>
  </div>
</div>

@endsection






