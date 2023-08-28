<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiples counter</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
</head>
<body style="padding: 5px 0 0 25px;">
    <h3>5. Contador de numeros multiplos en un rango</h3>
    <fieldset style="width: max-content; padding: 25px;">
        <?php
            if($_POST) {
                $min = $_POST["min"];
                $max = $_POST["max"];
                $mult = $_POST["mult"];
                $acc = 0;

                if($min > $max) {
                    $swap = $min;
                    $min = $max;
                    $max = $swap;
                    echo '
        Se intercambiaron los limites del rango<br><br>';
                }

                for ($i = $min; $i <= $max; $i++) {
                    if($i % $mult == 0) {
                        $acc = $acc + 1;
                    }
                }
                echo '
        Tope inferior: '.$min.'<br>
        Tope superior: '.$max.'<br>
        <h4>En el rango hay '.$acc.' multiplos de '.$mult.'</h4>
        <form action="5.php" method="post"><input type="submit" value="Clear"></form>
                ';
            } else {
                echo '
        <form action="5.php" method="post">
            Introduzca un rango entre dos numeros enteros: <br>
            <label for="min">Tope inferior: </label><br><input type="number" name="min" required><br>
            <label for="max">Tope superior: </label><br><input type="number" name="max" required><br><br>
            Buscar multiplos de 
            <select name="mult" style="width: 35px; height: 25px;">
                <option value="3">3</option>
                <option value="5">5</option>
            </select> 
            en el rango.<br>
            <br><input type="submit" value="Insertar">
        </form>
                ';
            }
        ?>
    
    </fieldset>
    
    <a href="index.php" style="color: black;"><h4>Regresar</h4></a>
</body>
</html>