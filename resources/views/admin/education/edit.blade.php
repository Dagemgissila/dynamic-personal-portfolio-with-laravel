@extends("admin.adminlayout")

@section("content")

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">edit </p>
      <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('education.index') }}" enctype="multipart/form-data"> Back</a>
</div>
      <form action="{{ route('education.update',$education->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
@method('PUT')
    <div>
        @if(Session::has('success'))
            {{Session::get('success')}}
        @endif
    </div>

        <div class="form-group">
        <label for="ptitle">institution name </label>
    <input type="text" name="institutionname" value="{{ $education->institution_name }}" class="form-control" >
        </div>
        <div class="red">
       @error('institutionname')
       {{$message}}
       @enderror
       </div>

        <div class="form-group">
        <label for="ptitle">degree </label>
    <input type="text" name="degree" value="{{ $education->degree }}"  class="form-control" >
        </div>
       
        <div class="red">
           @error('degree')
             {{$message}}
             @enderror
       </div>

        
        <div class="form-group">
        <label for="psubtitle">department</label>
    <input type="text" name="department" value="{{ $education->department }}" class="form-control">
        </div>

        <div class="red">
           @error('department')
             {{$message}}
             @enderror
       </div>


       <div class="form-group">
       <label for="psubtitle">startyear</label>
    <input type="date" name="startyear" value="{{ $education->startyear }}"  class="form-control" >
        </div>

        <div class="red">
           @error('startyear')
             {{$message}}
             @enderror
       </div>

       <div class="form-group">
       <label for="psubtitle">endyear</label>
    <input type="date" name="endyear" value="{{ $education->endyear }}" class="form-control" >
        </div>

        <div class="red">
           @error('endyear')
             {{$message}}
             @enderror
       </div>

       <div class="form-group">
            <label for="ptitle">status</label>
     
                    <select name="status" class="form-control p_input" style="color:black;" id="">
                        <option value="1" >active</option>
                        <option value="0"  >inactive</option>
                       
                    </select>
            

        </div>

       

        <button type="submit" class="btn btn-primary me-2">Submit</button>
       
      </form>
    </div>
  </div>
</div>

@endsection