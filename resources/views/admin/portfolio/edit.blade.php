@extends('admin.adminlayout')

@section('content')
<div class="pull-right">
      <a class="btn btn-primary" href="{{ route('portfolio.index') }}" enctype="multipart/form-data"> Back</a>
</div>
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">PORTFOLIO</h4>
      
      <form action="{{ route('portfolio.update',$portfolio->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
       @METHOD('PUT')
   

        <div class="form-group">
        <label for="ptitle">projecttitle</label>
    <input type="text" name="projecttitle" value="{{$portfolio->projecttitle}}" class="form-control" >
        </div>
        <div class="red">
       @error('projecttitle')
       {{$message}}
       @enderror
       </div>

        <div class="form-group">
        <label for="ptitle">projectimage </label>
    <input type="file" name="projectimage" value="{{$portfolio->projectimage}}" class="form-control" >
        </div>
        <div>
          <img src="{{('/uploads/gallery/'.$portfolio->projectimage)}}" style="width:150px;height:100px;" alt="">
        </div>
      
       
        <div class="red">
           @error('projectimage')
             {{$message}}
             @enderror
       </div>

        
       <div class="form-group">
        <label for="ptitle">project describtion </label>
    <textarea name="projectdescription" id="" cols="30" value="" rows="10" style="width:100%;">{{$portfolio->projectdescription}}</textarea>
        </div>

        <div class="red">
           @error('projectdescription')
             {{$message}}
             @enderror
       </div>


       <div class="form-group">
            <label for="ptitle">status</label>
     
                    <select name="status" class="form-control p_input"  id="">
                        <option value="1" >active</option>
                        <option value="0">inactive</option>
                       
                    </select>
            

        </div>

       

        <button type="submit" class="btn btn-primary me-2">update</button>
      
      </form>
    </div>
  </div>
</div>

@endsection