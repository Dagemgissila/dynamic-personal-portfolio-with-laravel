<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blogs</title>
    <style>
        body{
            background-color:bright;
        }
        .container{
            width:50%;
            margin:auto;
            margin-top:50px;
            padding:10px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="card-img">
    <img src="{{('uploads/gallery/$blog->image')}}" alt="no image" style="width:150px;height:150px;">
            </div>
          <div class="blogcontent">
            <h1>{{$blog->topic}}</h1>
            <p>{{$blog->content}}</p>

          </div>
    </div>
</body>
</html>