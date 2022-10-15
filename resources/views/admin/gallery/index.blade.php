@extends("admin.adminlayout")

@section("content")
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('gallery.create') }}"> ADD GALLERY</a>
</div>
@if( $galleries->count())
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
             
      <th scope="col">image</th>
    
      <th scope="col">status</th>
      <th>action</th>

          </tr>
    
          </thead>
          <tbody>
          @foreach( $galleries as $gallery)
<tr >

      <td><img src="{{('uploads/gallery/'.$gallery->image)}}" alt="no image" style="width:100px;height:100px;"></td>
      <td>@if($gallery->status==1)
        <button class="btn btn-success">active</button>
        @else
        <button class="btn btn-danger">inactive</button>
        @endif</td>
      
      
  
      <td>
      <form action="{{ route('gallery.destroy',$gallery->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('gallery.edit',$gallery->id) }}">Edit</a>
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
      {{$galleries->links()}}
    </div>
  </div>
</div>


@else

no comment
@endif


@endsection