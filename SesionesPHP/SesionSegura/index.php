<?php
    session_start();
?>
<html>
<head>
    <title>Las sesiones</title>
    <meta http-equiv="Content-Type" content="text/html; charset-iso8859-1">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../../all.css">
</head>
<body>
    <h2><a href="../..">Sesion Segura</a></h2>
    <!-- <br><br><br><br> -->
    <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td><?php
            if(isset($_POST['enviar'])) {
                if(empty($_POST['usuario']) || empty($_POST['password']))
                    echo 'Debes llenar todos los datos';
                elseif($_POST['usuario']=="test" && $_POST['password']=="test"){
                    $_SESSION['usuario']=$_POST['usuario'];
                    $_SESSION['password']=$_POST['password'];
                    echo 'Te has logueado como '.$_SESSION['usuario'];
                } else {
                    echo 'Datos incorrectos<br>';
                }
            }
            
        ?></td>
        <td rowspan="2">
            <form name="login" method="post" action="index.php">
                <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>Usuario:</td>
                        <td><input name="usuario" id="usuario" type="text"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input name="password" id="password" type="password"></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"><input name="enviar" type="submit" id="enviar" value="Enviar"></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
    <tr>
        <td><a href="segura.php">PAGINA SEGURA</a></td>
    </tr>
    </table>
</body>
</html>