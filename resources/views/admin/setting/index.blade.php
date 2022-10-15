@extends('admin.adminlayout')

@section('content')

@if($homesettings->count())
<div class="col-lg-12 grid-margin stretch-card">
    
  <div class="card">
    <div class="card-body">
    <h2>setting</h2>
      </p>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
      
              <tr>
          


<th scope="col">homephoto</th>

<th scope="col">logo</th>

<th>action</th>

          </tr>
    
          </thead>
          <tbody>
          @foreach($homesettings as $homesetting)
<tr>



<td><img src="{{('uploads/gallery/'.$homesetting->homephoto)}}" alt="no image" style="width:100px;height:100px;"></td>

<td><img src="{{('uploads/gallery/'.$homesetting->logo)}}" alt="no image" style="width:100px;height:100px;"></td>


<td>
      <form action="{{ route('homesetting.destroy',$homesetting->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('homesetting.edit',$homesetting->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
      </td>
</tr>
@endforeach
        
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@else

<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('homesetting.create') }}">add </a>
</div>
@endif

@endsection