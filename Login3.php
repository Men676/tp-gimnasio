<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
            input.form-control {
            margin-bottom: 20px;
            width: 340px;
            padding: 20px;
            border: 1px solid#ccc;
            border-radius: 10px;
            }
  </style>
</head>
<center>
<body>

<div class="container">
  
  <img src="imagen/FullEnergy.jpg" width="250">
  <h2>LOGIN </h2>
  <form action="validar.php" method="post">
    <div class="form-group">
      <label for="email">Usuario:</label>
      <input type="text" class="form-control" id="email" placeholder="Ingrese Usuario" name="usuario" size="30" maxlength="20">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Ingrese Contraseña" name="contraseña" size="30" maxlength="20">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Recordar</label>
    </div>
    <button type="submit" class="btn btn-default" value="ingresar">INGRESAR</button>
  </form>
</div>

</body>
</html>
