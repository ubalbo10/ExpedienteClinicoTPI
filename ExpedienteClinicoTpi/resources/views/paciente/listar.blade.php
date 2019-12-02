<!DOCTYPE html>

<html>
<head>
    <title>Listado de Pacientes</title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body{
      font-family: 'Exo', sans-serif;
    }
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: #EE192D;color:white;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
    }
    </style>

  </head>
<body>
<div class="col-md-6">
<div class="fomr-group">
<table class="col-md-6" border="1">

  <tr>

    <th>Nombre</th>

    <th>Edad</th>

    <th>DUI</th>
     <th>Acciones</th>

  </tr>

  



@foreach ($pacientes as $paciente)
            
     <tr>

    <td>{{$paciente['nombre']}}</td>

    <td>{{$paciente['edad']}}</td>

    <td>{{$paciente['DUI']}}</td>
    
  </tr>
@endforeach
</table>
</div>
</div>


   
  



</body>
</html>