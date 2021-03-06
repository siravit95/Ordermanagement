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
    <h1>จัดการสินค้า</h1>
    <hr>
    <ul>
        <li>
            <a href="{{url('/management/product/create')}}">เพิ่มสินค้า</a>
        </li>
    </ul>
    <div class="container">
        @foreach($data as $datas)

        <div class="panel panel-default">
            <div class="panel-heading">

                Product ID : {{$datas->id}}
                <br> Name : {{$datas->name}}
                <br> Price : {{$datas->price}}
            </div>
            <div class="panel-body">{{$datas->detail}}</div>
            <div class="panel-footer">

                Qut : {{$datas->qty}}
                <br>

                <a class="btn btn-default" href="{{url("management/product/{$datas->id}")}}">ดูข้อมูล</a>

            </div>
        </div>
        @endforeach


    </div>


</body>

</html>