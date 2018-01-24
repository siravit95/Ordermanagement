<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<h1>เพิ่มสินค้า</h1>

<hr>
  
<br>
{!! Form::open(['url' => 'management/product']) !!}

{!!Form::label('name','Name:')  !!}
    
{!!Form::text('name',null,["maxlength"=>50])!!} <br><br>

{!!Form::label('number','Price:')  !!}

{!!Form::number('price',null,["min"=>1,"max"=>1000])!!}  <br><br>

{!!Form::label('Detail','Detail:')  !!}  <br><br>

{!!Form::textarea('detail',"รายละเอียด",["cols"=>50,"rows"=>20])!!} <br><br>

{!!Form::label('Quantity','Quantity:')  !!} 

{!!Form::text('qty',null,["min"=>1,"max"=>100])!!} <br><br>

{!!Form::submit("ตกลง")!!}

{!! Form::close() !!}


</body>
</html>






