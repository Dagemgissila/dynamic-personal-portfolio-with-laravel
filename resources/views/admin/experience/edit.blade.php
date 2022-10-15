@extends("admin.adminlayout")

@section("content")

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('experience.index') }}" enctype="multipart/form-data"> Back</a>
</div>
      <form action="{{ route('experience.update',$experience->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @METHOD('PUT')

    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
        <label for="ptitle">company name </label>
    <input type="text" name="companyname" value="{{$experience->companyname}}" class="form-control" >
        </div>
        <div class="red">
       @error('companyname')
       {{$message}}
       @enderror
       </div>

        <div class="form-group">
        <label for="ptitle">your responsibility </label>
    <input type="text" name="responsibility" value="{{$experience->responsibility}}" class="form-control" >
        </div>
       
        <div class="red">
           @error('responsibility')
             {{$message}}
             @enderror
       </div>

        
        <div class="form-group">
        <label for="psubtitle">duration</label>
    <input type="text" name="duration" value="{{$experience->duration}}" class="form-control">
        </div>

        <div class="red">
           @error('duration')
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