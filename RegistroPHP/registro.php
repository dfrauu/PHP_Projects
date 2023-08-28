<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="../images/doge.png">
    <link rel="stylesheet" href="../all.css">
    <style>
        fieldset {
            margin: auto;
        }
        a {
            text-decoration: underline;
        }
    </style>
</head>
<body><br><br>
    <fieldset>
        <legend>Registro</legend>
        <?php
            if (
                isset($_POST['name']) && !empty($_POST['name'])
                &&
                isset($_POST['surname']) && !empty($_POST['surname'])
                &&
                isset($_POST['phone']) && !empty($_POST['amount'])
            ) {
                $nombreReg = $_POST['name'];
                $apellidoReg = $_POST['surname'];
                $telefonoReg = $_POST['amount'];
                
                $db = "bancoabc";
                $host = "localhost";
                $pw = "";
                $user = "root";
                    
                $con = mysqli_connect($host, $user, $pw, $db) or die("No se pudo autentificar con la BD");
                mysqli_select_db($con, $db) or die ("No se pudo conectar a la BD");

                $sql = "INSERT INTO accounts (username,Apellido,Telefono)
                VALUES ('$nombreReg', '$apellidoReg', '$telefonoReg')";

                if ($con->query($sql) === true) {
                    echo "<h3>Guardado correctamente<br>";
                    echo '<a href="index.php">Volver al formulario</a><h3>';
                } else {
                    echo "Error: " . $sql . "<br>" . $con->error;
                }

                $con->close();

            } else {
                echo "Debe llenar los campos";
            }
        ?>
    </fieldset>
</body>
</html>
