@extends('admin.adminlayout')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">fill the service you provide </p>
      <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
       @METHOD('PUT')

    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
        <label for="ptitle">service name</label>
    <input type="text" name="servicename" value="{{$service->servicename}}" class="form-control" >
        </div>
        <div class="red">
       @error('servicename')
       {{$message}}
       @enderror
       </div>

        <div class="form-group">
          <label for="ptitle">description </label>
      <textarea name="description" id="" cols="30" value="" rows="10" style="width:100%;">{{$service->description}}</textarea>
          </div>

        <div class="red">
           @error('description')
             {{$message}}
             @enderror
       </div>

       <div class="form-group">
            <label for="ptitle">status</label>
     
                    <select name="status" class="form-control p_input" style="color:black;" id="">
                        <option value="1">active</option>
                        <option value="0">inactive</option>
                       
                    </select>
            

        </div>

       

        <button type="submit" class="btn btn-primary me-2">Submit</button>
     
      </form>
    </div>
  </div>
</div>


@endsection