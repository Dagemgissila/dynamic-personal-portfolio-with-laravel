@extends("admin.adminlayout")

@section("content")

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">fill your education information  </p>
      <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
        <label for="ptitle">institution name </label>
    <input type="text" name="institutionname" value="" class="form-control" >
        </div>
        <div class="red">
       @error('institutionname')
       {{$message}}
       @enderror
       </div>

        <div class="form-group">
        <label for="ptitle">degree </label>
    <input type="text" name="degree" value="" class="form-control" >
        </div>
       
        <div class="red">
           @error('degree')
             {{$message}}
             @enderror
       </div>

        
        <div class="form-group">
        <label for="psubtitle">department</label>
    <input type="text" name="department" value="" class="form-control">
        </div>

        <div class="red">
           @error('department')
             {{$message}}
             @enderror
       </div>


       <div class="form-group">
       <label for="psubtitle">startyear</label>
    <input type="date" name="startyear" value="" class="form-control" >
        </div>

        <div class="red">
           @error('startyear')
             {{$message}}
             @enderror
       </div>

       <div class="form-group">
       <label for="psubtitle">endyear</label>
    <input type="date" name="endyear" value="" class="form-control" >
        </div>

        <div class="red">
           @error('endyear')
             {{$message}}
             @enderror
       </div>

       

        <button type="submit" class="btn btn-primary me-2">Submit</button>
     
      </form>
    </div>
  </div>
</div>

@endsection