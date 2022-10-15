@extends('admin.adminlayout')

@section('content')

<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('testimony.create') }}"> add what your client say</a>
</div>
<div class="col-lg-12 grid-margin stretch-card">
 
    
    <div>
        @if(Session::has('delete'))
            {{Session::get('delete')}}
        @endif
    </div>
  
     

      
          <div class="table-responsive">
            <table class="table table-hover" style='max-width:100%'>
              <thead>
          
                  <tr>
             
              <th>name</th>
              <th>comment</th>
              <th>photo</th>
              <th>status</th>
              <th>action</th>
    
              </tr>

              </thead>
              <tbody>
                @foreach($testimonies as $testimony)
<tr>

<td>{{$testimony->name}}</td>
<td>{{$testimony->comment}}</td>
<td><img src="{{('uploads/gallery/'.$testimony->photo)}}" alt="no image" style="width:100px;height:100px;"></td>
<td>@if($testimony->status==1)
        <button class="btn btn-success">active</button>
        @else
        <button class="btn btn-danger">inactive</button>
        @endif</td>
<td>
<form action="{{ route('testimony.destroy',$testimony->id) }}" method="Post">
      @csrf
@method('DELETE')
<a class="btn btn-primary" href="{{ route('testimony.edit',$testimony->id) }}">Edit</a>

<button type="submit"  class="btn btn-danger">Delete</button>
</form>
</td>


</tr>
@endforeach
        
          </tbody>
        </table>
     
        {{$testimonies->links()}}
      </div>
    </div>
  </div>
</div>
@endsection







