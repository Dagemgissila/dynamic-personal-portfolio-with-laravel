{{-- @extends("admin.adminlayout")

@section("content")
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('education.create') }}"> add my education info</a>
</div>

@if( $educations->count())

<div class="col-lg-12 grid-margin stretch-card" style="max-width:100%;over-flow:auto;">
  <div class="card">
    <div class="card-body">
      <h2>education info</h2>
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
             
      <th scope="col">institutioname</th>
      <th scope="col">degree</th>
      <th scope="col">department</th>
      <th scope="col">startyear</th>
      <th scope="col">endyear</th>
      <th scope="col">status</th>
      <th>action</th>

          </tr>
    
          </thead>
          <tbody>
          @foreach( $educations as $education)
<tr>

      <td>{{$education->institution_name}}</td>
      <td>{{$education->degree}}</td>
      <td>{{$education->department}}</td>
      <td>{{$education->startyear}}</td>
      <td>{{$education->endyear}}</td>
      <td>@if($education->status==1)
        <button class="btn btn-success">active</button>
        @else
        <button class="btn btn-danger">inactive</button>
        @endif</td>
      <td>
      <form action="{{ route('education.destroy',$education->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('education.edit',$education->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit"  class="btn btn-danger">Delete</button>
<form>
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

<h1>no education information was filled</h1>
@endif
@endsection --}}



@extends("admin.adminlayout")

@section("content")
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('education.create') }}"> add education info</a>
</div>
@if( $educations->count())
<div class="col-lg-12 grid-margin stretch-card" style="max-width:100%;over-flow:auto;">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">education info</h4>
   
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
             
                <th scope="col">institutioname</th>
      <th scope="col">degree</th>
      <th scope="col">department</th>
      <th scope="col">startyear</th>
      <th scope="col">endyear</th>
      <th scope="col">status</th>
      <th>action</th>

          </tr>
    
          </thead>
          <tbody>
          @foreach( $educations as $education)
<tr >
  <td>{{$education->institution_name}}</td>
      <td>{{$education->degree}}</td>
      <td>{{$education->department}}</td>
      <td>{{$education->startyear}}</td>
      <td>{{$education->endyear}}</td>
      <td>@if($education->status==1)
        <button class="btn btn-success">active</button>
        @else
        <button class="btn btn-danger">inactive</button>
        @endif</td>
      
      
  
      <td>
      <form action="{{ route('education.destroy',$education->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('education.edit',$education->id) }}">Edit</a>
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



