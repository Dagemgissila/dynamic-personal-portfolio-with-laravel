@extends('admin.adminlayout')

@section('content')


@if( $profiles->count())
<div class="col-lg-12 grid-margin stretch-card" style="max-width:100%;over-flow:auto;">
  <div class="card">
    <div class="card-body">
     <h2>your profile</h2>
      </p>      @if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
      <div class="table-responsive">
        <table class="table table-hover" style="max-width:100%;over-flow:auto;">

          <thead>
      
              <tr>
            
      <th scope="col">fullname</th>
      <th scope="col">email</th>
     
      <th scope="col">abouttitle</th>
      <th scope="col">aboutsubtitle</th>
      <th scope="col">phonenumber</th>
      <th scope="col">address</th>
      <th scope="col">status</th>
      <th scope="col">profilephoto</th>
      <th scope="col">action</th>

          </tr>
    
          </thead>
          <tbody>
          @foreach( $profiles as $profile)
<tr >

      <td>{{$profile->users->fullname}}</td>
      <td>{{$profile->users->email}}</td>
    
      <td>{{$profile->profiletitle}}</td>
      <td>{{$profile->profilesubtitle}}</td>
      <td>{{$profile->phonenumber}}</td>
      <td>{{$profile->address}}</td>
      <td>@if($profile->status==1)
        <button class="btn btn-success">active</button>
        @else
        <button class="btn btn-danger">inactive</button>
        @endif
      </td>
      <td><img src="{{('uploads/gallery/'.$profile->profileimage)}}" style="width:150px;height:150px;" alt=""></td>
      <td>
      <form action="{{ route('profile.destroy',$profile->id) }}" method="Post">
      @csrf
@method('DELETE')
<a class="btn btn-primary" href="{{ route('profile.edit',$profile->id) }}">Edit</a>

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

<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('profile.create') }}"> add profile</a>
</div>
@endif
@endsection