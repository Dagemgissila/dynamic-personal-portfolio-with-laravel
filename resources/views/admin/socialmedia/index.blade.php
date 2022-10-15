@extends('admin.adminlayout')

@section('content')
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('socialmedia.create') }}"> add social media link</a>
</div
@if($socialmedias->count())
<div class="col-lg-10 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">social media</h4>
      @if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
      
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
      
              <tr>
           
<th scope="col">socialmediaicon</th>
<th scope="col">url</th>

<th>action</th>>

          </tr>
    
          </thead>
          <tbody>
          @foreach($socialmedias as $socialmedia)
<tr>

<td>{{$socialmedia->socialmediaicon}}</td>
<td>{{$socialmedia->url}}</td>

<td>
<form action="{{ route('socialmedia.destroy',$socialmedia->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('socialmedia.edit',$socialmedia->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit"  class="btn btn-danger">Delete</button>
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

no comment
@endif

@endsection