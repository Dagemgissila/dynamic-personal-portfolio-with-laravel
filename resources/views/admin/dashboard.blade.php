@extends('admin.adminlayout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .row {
  margin-right: -15px;
  margin-left: -15px;
}

.col-lg-3, .col-md-6, .col-xs-3 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col-xs-3 {
  float: left;
  width: 20%;
}

.col-xs-9 {
  width: 75%;
  float: left;
}

.clearfix:after {
  clear: both;
}

.clearfix:before,
.clearfix:after {
  display: table;
  content: " ";
}

.panel {
  margin-bottom: 10px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}

.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}

.panel-heading {
  height: 100px;
  background-color: turquoise;
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}

.panel-green {
  border: 2px dashed #398439;
}

.panel-green .panel-heading {
  background-color: #398439;
}

.green {
  color: #398439;
}

.blue {
  color: #337ab7;
}

.red {
  color: #ce7f7f;
}

.panel-primary {
  border: 2px dashed #337ab7;
}

.panel-primary .panel-heading {
  background-color: #337ab7;
}

.yellow {
  color: #ffcc00;
}

.panel-yellow {
  border: 2px dashed #ffcc00;
}

.panel-yellow .panel-heading {
  background-color: #ffcc00;
}

.panel-red {
  border: 2px dashed #ce7f7f;
}

.panel-red .panel-heading {
  background-color: #ce7f7f;
}

.huge {
  font-size: 30px;
}

.panel-heading {
  color: #fff;
}

.pull-left {
  float: left !important;
}

.pull-right {
  float: right !important;
}

.text-right {
  text-align: right;
}

.under-number {
  font-size: 20px;
}

@media (min-width: 992px) {
  .col-md-6 {
    float: left;
    width: 50%;
  }
}

@media (min-width: 1200px) {
  .col-lg-3 {
    float: left;
    width: 20%;
  }
}

    </style>
</head>
<body>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-4x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                      <div class='huge'>{{$contact}}</div>
                            
                        </div>
                        <div class="under-number">contact message</div>
                    </div>
                </div>
               
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-4x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                      <div class='huge'>{{$blog}}</div>
                          
                        </div>
                        <div class="under-number">blog post</div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-4x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                      <div class='huge'>{{$gallery}}</div>
                           
                        </div>
                        <div class="under-number">gallery</div>
                    </div>
                </div>
               
            </div>
        </div>
      
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-4x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                      <div class='huge'>{{$portfolio}}</div>
                          
                        </div>

                        <div class="under-number">project</div>
                    </div>
                </div>
               
            </div>
        </div>
      
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-4x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                      <div class='huge'>{{$service}}</div>
                           
                        </div>
                        <div class="under-number">service</div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-4x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                      <div class='huge'>{{$testimony}}</div>
                           
                        </div>
                        <div class="under-number">testimony</div>
                    </div>
                </div>
               
            </div>
        </div>

       
    </div>
    
      
    
     
</body>
</html>


                <!-- /.row -->
           

@endsection