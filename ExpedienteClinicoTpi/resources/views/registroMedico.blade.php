<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro De Medico</title>
       
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <!-- Styles -->

       <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</head>
<body>
    <form action="Post">
   <label >Nombre:</label>
   <input type="text" placeholder="Nombre"><br>
   <label >Apellido:</label>
   <input type="text" placeholder="Apellidos"><br>
   <label >Edad:</label>
   <input type="text" placeholder="Edad"><br>
   <label >Area de Especializacion:</label>
    <select name="Especialidad">
   <option value="1">General</option> 
   <option value="2">Odontologia </option> 
   <option value="3">Radiologia</option>
  
  
</select><br>
<label >DUI:</label>
<input type="text" placeholder="DUI"><br>
<label >NIT:</label>
<input type="text" placeholder="NIT"><br>
<button> Registrar</button>
</form>
</body>
</html>