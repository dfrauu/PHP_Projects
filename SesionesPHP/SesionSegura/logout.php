<html>
<head>
    <title>logout</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../../all.css">
</head>
<body>
    <br><br>
    <?php
        session_start();
        if(!empty($_SESSION['usuario'])) {
            session_unset();
            session_destroy();
            /*
            echo '
                Sesion finalizada<br>
                <a href="index.php">Regresar</a>
            ';
            */
        }
    ?>
    Sesion finalizada<br>
    <a href="index.php">Regresar</a>
</body>
</html>