<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_db = 'information_schema';

    $con_bd = mysqli_connect ($db_host, $db_user, $db_password, $db_db);

    if ($con_bd) {
        echo '<h3><a href="./">Felicidades: Se realizo una conexion adecuada a MySQL.</a></h3>';
        echo 'Informacion del Host: '.mysqli_get_host_info($con_bd).'<br>';
        echo 'Informacion del Servidor: '.mysqli_get_server_info($con_bd).'<br>';
        echo 'Informacion del Cliente: '.mysqli_get_client_info().'<br>';
        echo 'Informacion de la Version: '.mysqli_get_client_version().'<br>';
        $cierre_bd = @mysqli_close($con_bd);
    }
    else {
        echo 'Errno: '.mysqli_connect_errno();
        echo '<br>';
        echo 'Mensaje de Error: '.mysqli_connect_error();
        exit();
    }
?>