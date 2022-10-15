@extends('admin.adminlayout')

@section('content')
<div class="pull-right">
      <a class="btn btn-primary" href="{{ route('socialmedia.index') }}" enctype="multipart/form-data"> Back</a>
</div>
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">fill your social media link information </p>
      <form  action="{{route('socialmedia.store')}}" method="post">
      @csrf

    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

    <div class="form-group">
                    <select name="socialmediaicon" class="form-control p_input" style="color:black;" id="">
                        <option value="telegram">telegram</option>
                        <option value="facebook" selected >facebook</option>
                        <option value="instagram">instagram</option>
                        <option value="youtube">youtube</option>
                        <option value="twitter">twitter</option>
                        <option value="linkedin">linkedin</option>
                        <option value="pinterest">pinterest</option>
                        

                    </select>
                  </div>

        <div class="red">
       @error('socialmediaicon')
       {{$message}}
       @enderror
  </div>
  

        <div class="form-group">
 <label for="psubtitle">link</label>
    <input type="text" name="url" value="" class="form-control" >
        </div>
       
        <div class="red">
           @error('url')
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