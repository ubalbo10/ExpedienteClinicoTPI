<!DOCTYPE html>

<html>
<head>
    <title>Buscar Paciente</title>
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
@if (count($errors) > 0)
        <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <ul>
          @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
          @endforeach
         </ul>
        </div>
       @endif
       @if ($message = Session::get('success'))
       <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
       </div>
       @endif
        <br>
      <div class="col-md-6">
        <a href="{{url('Registro/Paciente')}}"><button class="btn btn-success">Crear Expediente</button></a>
      </div>
       <br>
       <br>

       <div class="col-md-6">
            <h3>Buscar Paciente</h3>
            <br>
            {!! Form::open(array('url'=>'Paciente','method'=>'GET','autocomplete'=>'of','role'=>'search')) !!}

              <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
                <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Buscar</button>
                </span>
              </div>
              </div>
            {{Form::close()}}
            <br>
            <br>
            <h3>Listado de pacientes</h3>
            <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead class="thead-dark">
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>DUI</th>
                        <th>Opciones</th>
                    </thead>
                    @foreach ($pacientes as $paci)
                    <tr>
                        <td>{{ $paci->nombre}}</td>
                        <td>{{ $paci->edad}}</td>
                        <td>{{ $paci->DUI}}</td>
                        <td>
                            <a href="{{url('Registro/Consulta')}}"><button class="btn btn-info">Consulta</button></a> 
                        </td>
                    </tr>
                    @endforeach
                </table>
        </div>



</body>
</html>