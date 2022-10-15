@extends('admin.adminlayout')

@section('content')
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('service.create') }}"> add service</a>
</div>
@if($services->count())
<div class="col-lg-12 grid-margin stretch-card" style="max-width:100%;over-flow:auto;">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">services</h4>
      
      @if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
@endif
</div>
      <div class="table-responsive">
        <table class="table table-hover" style="max-width:100%;over-flow:auto;">
          <thead>
      
              <tr>
             
      <th scope="col">servicename</th>
    
      <th scope="col">description</th>
      <th scope="col">status</th>
       <th>action</th>
          </tr>
    
          </thead>
          <tbody>
          @foreach($services as $service)
<tr >

      <td>{{$service->servicename}}</td>
     
      <td>{{$service->description}}</td>
      <td>@if($service->status==1)
        <button class="btn btn-success">active</button>
        @else
        <button class="btn btn-danger">inactive</button>
        @endif</td>
      <td>
      <form action="{{ route('service.destroy',$service->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('service.edit',$service->id) }}">Edit</a>
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