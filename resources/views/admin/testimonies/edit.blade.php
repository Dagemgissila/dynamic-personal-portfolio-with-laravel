@extends('admin.adminlayout')

@section('content')


<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">fill the what your client say </p>
      <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('testimony.index') }}" enctype="multipart/form-data"> Back</a>
</div>
      <form action="{{ route('testimony.update',$testimony->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
@method('PUT')

    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
    <label for="ptitle">name</label>
    <input type="text"  name="name" value="{{$testimony->name}}" class="form-control" >
        </div>
        <div class="red">
       @error('name')
       {{$message}}
       @enderror
       </div>

       <div class="form-group">
        <label for="ptitle">comment</label>
    <textarea name="comment" id="" cols="30" value="{{$testimony->comment}}" rows="10" style="width:100%;">{{$testimony->comment}}</textarea>
        </div>
       
        <div class="red">
           @error('comment')
             {{$message}}
             @enderror
       </div>


        <div class="form-group">
        <label for="psubtitle">photo</label>
            <input type="file" name="photo" value="{{$testimony->photo}}" class="form-control" >
        </div>
        <div>
          <img src="{{('/uploads/gallery/'.$testimony->photo)}}" alt="no image" style="width:100px;height:100px;">
        </div>

        <div class="red">
           @error('photo')
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

        <button type="submit" class="btn btn-primary me-2">update</button>
  
      </form>
    </div>
  </div>
</div>
@endsection






