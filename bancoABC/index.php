<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco ABC</title>
</head> 
<body>
<?php
    if(isset($_POST['enviar'])) {
        if(empty($_POST['usuario']) || empty($_POST['password']))
            echo 'Debes llenar todos los datos';
        elseif($_POST['usuario']=="Diego" && $_POST['password']=="parcial2"){
            $_SESSION['usuario']=$_POST['usuario'];
            $_SESSION['password']=$_POST['password'];
            echo 'Te has logueado como '.$_SESSION['usuario'];
            echo "<br><br><a href='menu.php'>Ir a transacciones</a>";
        } else {
            echo 'Datos incorrectos<br>';
            echo '<a href="">Regresar</a>';
        }
    } else {
        echo '
            test user: Diego
            <br>
            test pass: parcial2
            <form name="login" method="post" action="index.php">
                Usuario:<br><input name="usuario" id="usuario" type="text">
                <br>
                Password:<br><input name="password" id="password" type="text">
                <br><br>
                <input name="enviar" type="submit" id="enviar" value="Enviar">
            </form>
            <a href="register.php">Registrate</a>
        ';
    }
    
?>
</body>
</html>