
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <style>
         
        </style>
    </head>
    <body>
    
{{$result}}
<!--  -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="text" class="hh form-control" placeholder="Username" value="" aria-label="Username" aria-describedby="basic-addon1">
</div>
<button type="button" class=" button btn btn-secondary">Dark</button>
    
 <button onclick="window.location.href='{{ url('/'.$id) }}'"></button>
  
    </body>
</html>
