<?

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/from-data">

       <label for="nombre">Nombre:</label>
       <p><input type="text" name="nombre" autofocus="autofocus" maxlength="10" minlength="4" pattern="[A-Z;a-z]+" required="required"></p> <br>

       <label for="apellido">Apellido:</label>
       <p><input type="text" name="apellido" disabled="disabled"></p> <br>

       <input type="submit" value="enviar">
    </form>
</body>
</html>
