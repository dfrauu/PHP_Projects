<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller</title>
    <link rel="icon" type="image/x-icon" href="../images/doge.png">
    <link rel="stylesheet" href="../all.css">
</head>
<body><br><br> 
    <h2 style="text-align: center; color: white;"><a href="../">Registro</a></h2>
    <fieldset style="margin: auto; width: max-content; padding: 25px;">
        <legend>Ingrese sus datos:<a href="test.php"></a></legend>
        <form action="registro.php" method="post">
            Nombre: <br><input type="text" name="name" required><br><br>
            Apellido: <br><input type="text" name="surname" required><br><br>
            Telefono: <br><input type="number" name="phone" required><br><br>
            <br><input type="submit" value="Registrar">
        </form>
    </fieldset>
</body>
</html>