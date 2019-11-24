<!DOCTYPE html>

<html>
<head>
    <title></title>
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
<form action="{{ asset('/Evento/create/') }}" method="post">
          @csrf
          <div class="fomr-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre">
          </div>
          <div class="fomr-group">
            <label>Apellidos</label>
            <input type="text" class="form-control" name="Apellidos">
          </div>
          <div class="fomr-group">
            <label>Edad</label>
            <input type="text" class="form-control" name="edad">
          </div>
          
          <div class="fomr-group">
            <label>Area de Especializacion</label>
            <select type="date" class="form-control" name="especialidad">
            <option value="1">General</option> 
            <option value="2">Odontologia </option> 
            <option value="3">Radiologia</option>
  
  
            </select>
          </div>
          <div class="fomr-group">
            <label>DUI</label>
            <input type="text" class="form-control" name="dui">
          </div>
          <div class="fomr-group">
            <label>NIT</label>
            <input type="text" class="form-control" name="nit">
          </div>
          <br>       
          
          <input type="submit" class="btn btn-info" value="Guardar">
        </form>
        </div>
   
  



</body>
</html>