<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>    
    <div class="container">


        <div class="panel panel-default">
            <div class="panel-heading">

                Product ID : {{$showdata->id}}
                <br> Name : {{$showdata->name}}
                <br> Price : {{$showdata->price}}
            </div>
            <div class="panel-body">{{$showdata->detail}}</div>
            <div class="panel-footer">

                Qut : {{$showdata->qty}}
                <br>

                <a class="btn btn-default" href="{{url("management/product/{$showdata->id}/edit")}}">แก้ไข</a> 
                
                <br>
                
                <div>
                    {!! Form::open(['method' => 'DELETE', 'url'=> 'management/product/'.$showdata->id]) !!} 
                    {!! Form::submit('ลบข้อมูล', ['class'=> 'btn btn-danger']) !!} 
                    {!! Form::close() !!}
                </div>
            </div>
        </div>


    </div>


</body>

</html>