<html>
<head>
    <title>Secret</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../../all.css">
</head>
<body>
    <br><br>
    <?php
        session_start();
        if(!empty($_SESSION['usuario'])) {
            echo '
                Te has logueado como: '.$_SESSION['usuario'].'<br />
                Has logrado el acceso a una pagina segura
                <br><br><a href="logout.php">CERRAR SESION</a>
            ';
        } else {
            echo '
                No estas logueado<br />
                Esta pagina es restringida!
                <br>
                <a href="index.php">Regresar</a>
            ';
        }
    ?>
</body>
</html>