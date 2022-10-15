
@extends("admin.adminlayout")

@section("content")
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('experience.create') }}"> add experience</a>
</div>
@if( $experiences->count())
<div class="col-lg-12 grid-margin stretch-card" style="max-width:100%;over-flow:auto;">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"> experience</h4>
   
      </p>
      @if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
      <div class="table-responsive">
        <table class="table table-hover" style="max-width:100%;over-flow:auto;">
          <thead>
      
              <tr>
             
                <th scope="col">companyname</th>
                <th scope="col">responsibility</th>
                <th scope="col">duration</th>
                <th scope="col">status</th>
                  <th>action</th>

          </tr>
    
          </thead>
          <tbody>
          @foreach( $experiences as $experience)
<tr >
  <td>{{$experience->companyname}}</td>
  <td>{{$experience->responsibility}}</td>
  <td>{{$experience->duration}}</td>

     
      <td>@if($experience->status==1)
        <button class="btn btn-success">active</button>
        @else
        <button class="btn btn-danger">inactive</button>
        @endif</td>
      
      
  
      <td>
      <form action="{{ route('experience.destroy',$experience->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('experience.edit',$experience->id) }}">Edit</a>
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

@endif


@endsection