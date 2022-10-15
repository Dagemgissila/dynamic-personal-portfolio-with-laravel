
@extends("admin.adminlayout")

@section("content")
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('blog.create') }}"> ADD BLOG</a>
</div>
@if( $blogs->count())
<div class="col-lg-12 grid-margin stretch-card" style="max-width:100%;over-flow:auto;">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">BLOG</h4>
   
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
                <th scope="col">posted by</th>
                <th scope="col">topic</th>
                
                <th scope="col">image</th>
                <th scope="col">status</th>
                <th>action</th>

          </tr>
    
          </thead>
          <tbody>
          @foreach( $blogs as $blog)
<tr >
  <td scope="row">{{$blog->users->fullname}}</td>
  <td>{{$blog->topic}}</td>
  <td><img src="{{('uploads/gallery/'.$blog->image)}}" alt="no image" style="width:150px;height:150px;"></td>
      <td>@if($blog->status==1)
        <button class="btn btn-success">active</button>
        @else
        <button class="btn btn-danger">inactive</button>
        @endif</td>
      
      
  
      <td>
      <form action="{{ route('blog.destroy',$blog->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
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