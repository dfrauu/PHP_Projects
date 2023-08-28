<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro</title>
    <link rel="icon" type="image/x-icon" href="../images/doge.png">
</head>
<body><br><br>
    <fieldset>
        <legend>Ingrese sus datos:<a href="test.php"></a></legend>
        <form action="db_insert.php" method="post">
            Nombre: <br><input type="text" name="name" required><br><br>
            Apellido: <br><input type="text" name="surname" required><br><br>
            Deposito inicial: <br><input type="number" name="amount" min="100" step="0.01" required><br><br>
            Usuario: <br><input type="text" name="user" required><br><br>
            Password: <br><input type="password" name="pass" required><br><br>
            <br><input type="submit" value="Registrar">
        </form>
    </fieldset>
    <a href="index.php">Volver a login</a>
</body>
</html>