
@extends("admin.adminlayout")

@section("content")
<div class="pull-right mb-2"><a class="btn btn-success" href="{{ route('createaccounte.create') }}"> account</a>
</div>
@if( $users->count())
<div class="col-lg-12 grid-margin stretch-card" style="max-width:100%;over-flow:auto;">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">gallery photo</h4>
   
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
             
      <th scope="col">fll name</th>
    
      <th scope="col">email</th>

<th scope="col">role</th>
<th scope="col">action</th>

          </tr>
    
          </thead>
          <tbody>
          @foreach( $users as $user)
<tr >

      <td>{{$user->fullname}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role}}</td>
      
      
  
      <td>
      <form action="{{ route('createaccounte.destroy',$user->id) }}" method="Post">
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