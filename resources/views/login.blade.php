<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login GreenNet</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css" >
</head>
<body>
   <form action="login" method="post">
    @csrf
   <h1 class="">Sistema de login</h1>

   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="name" id="name"></p>

   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="password" id="password"></p>

   <input type="submit" value="Ingresar">

   </form>
</body>
</html>