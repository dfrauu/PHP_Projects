<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial calculator</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
</head>
<body style="padding: 5px 0 0 25px;">
    <h3>6. Calulo de factorial</h3>
    <fieldset style="width: max-content; padding: 25px;">
        <?php
            if($_POST) {
                $val = $_POST["val"];
                $fact = 1;

                if($val == 0) {
                    $fact = 1;
                } else {
                    for ($i = 1; $i <= $val; $i++) {
                        $fact = $fact * $i;
                    }
                }
                
                echo '
                    El valor ingresado n es '.$val.'<br>
                    <h4>El factorial n! es '.$fact.'</h4>'.$val.'! = '.$fact.'
                    <form action="6.php" method="post"><br><input type="submit" value="Clear"></form>
                ';
            } else {
                echo '
                    Ingresar un numero entero positivo: <br>
                    <form action="6.php" method="post">
                        <input type="number" name="val" min="0" required>
                        <input type="submit" value="Insertar">
                    </form>
                ';
            }
        ?>
    </fieldset>
    
    <a href="index.php" style="color: black;"><h4>Regresar</h4></a>
</body>
</html>