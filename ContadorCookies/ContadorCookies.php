<?php
    if(isset($_POST['reset'])) {
        unset($_COOKIE['contador']);
    }
    
    if(isset($_COOKIE['contador'])) {
        setcookie('contador', $_COOKIE['contador'] + 1);
        $mensaje = 'Numero de visitas: ' . $_COOKIE['contador'];
    } else {
        setcookie('contador', 1);
        $mensaje = 'Bienvenido a nuestra pagina web';
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Prueba de cookie</title>
        <link rel="stylesheet" href="../all.css">
    </head>
    <body>
        <h1><a href="../">ContadorCookies</a></h1>
        <p><a href=""> <?php echo $mensaje; ?> </a></p>
        <form action="ContadorCookies.php" method="POST">
            <input type="submit" name="reset" value="Reset">
        </form>
    </body>
</html>