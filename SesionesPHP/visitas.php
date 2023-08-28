<?php
    session_start();
    if(isset($_POST['reset'])) {
        unset($_SESSION['count']);
    }
    
    if(!isset($_SESSION["count"])) {
        $_SESSION["count"] = 0;
    }
    else {
        $_SESSION["count"]++;
    }
?>

<html>
    <head>
        <title>Contador de accesos</title>
        <link rel="icon" type="image/x-icon" href="../images/favicon.png">
        <link rel="stylesheet" href="../all.css">
    </head>
    <body> 
        <h1><a href="../">Visitas</a></h1>
        <a href="">
            <?php
                echo "Hola, has accedido a esta pagina ". $_SESSION["count"] ." veces";
            ?>
        </a><br><br>
        <form action="visitas.php" method="post">
            <input type="submit" name="reset" value="Reset">
        </form>
    </body>
</html>