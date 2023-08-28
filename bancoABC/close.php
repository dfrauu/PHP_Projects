<?php
    session_start();
    if(!empty($_SESSION['usuario'])) {
        session_unset();
        // session_destroy();
        echo "Has cerrado sesion<br>";
        echo '<a href="index.php">Volver</a>';
        die();
    }
?>