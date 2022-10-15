@extends("admin.adminlayout")

@section("content")


    
    @if( $contac->count())
    
    <div class="col-lg-12 grid-margin stretch-card" style="max-width:100%;over-flow:auto;">
      <div class="card">
        <div class="card-body">
          <h2>contacts </h2>
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
                
          <th scope="col">name</th>
          <th scope="col">email</th>
          <th scope="col">message</th>
        
          <th>status</th>
          <th>action</th>
          <th>mail</th>
    
              </tr>
        
              </thead>
              <tbody>
               
              @foreach( $contac as $contacts)
             
    <tr>
 
          <td>{{$contacts->name}}</td>
          <td>{{$contacts->email}}</td>
          <td>{{$contacts->message}}</td>
        
          <td>@if($contacts->status==1)
            <button class="btn btn-success">seen</button>
            @else
            <button class="btn btn-danger">pending</button>
            @endif</td>
          <td>

            
               
                    <a href="viewMessage/{{$contacts->id}}" class="btn btn-primary" >view</a>
          </td>
          <td>
            <a href="mailto:{{$contacts->email}}" class="btn btn-primary">send email</a>
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
    
    <h1>no contact message</h1>
    @endif
@endsection