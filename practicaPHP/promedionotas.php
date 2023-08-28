<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
</head>
<body style="padding: 5px 0 0 25px;">
    <h3>3. Calcular promedio de N notas</h3>
    <fieldset style="width: max-content; padding: 25px;">
        <form action="promedionotas.php" method="post">
            <label for="grades">Numero de notas: </label><br>

            <?php
                if(isset($_POST["grades"])) {
                    echo $_POST["grades"].'<input type="number" name="grades" value="'.$_POST["grades"].'" hidden><br>';
                    $n = $_POST["grades"];
                    echo "<br>Introduzca $n notas:<br>";
                    if(empty($_POST["g1"])) {
                        for ($i = $n; $i > 0; $i--) {
                            echo "<input type='number' name='g$i' required><br>";
                        }
                    }
                } else {
                    echo '<input type="number" name="grades" required><br>';
                }

                if(isset($_POST["g1"])) {
                    for ($i = $n; $i > 0; $i--) {
                        echo '<input type="number" name="g'.$i.'" value="'.$_POST["g$i"].'" required><br>';
                    }
                    $sum = 0;
                    echo "<br>Promedio: ";
                    for ($i = $n; $i > 0; $i--) {
                        $sum = $sum + $_POST["g$i"];
                    }
                    $avg = $sum / $n;
                    echo "$avg<br>";
                }
            ?>
            
            <br><input type="submit" value="Insertar">
        </form>
    <form action="promedionotas.php" method="post"><input type="submit" value=" Reset "></form>
    </fieldset>
    <a href="lab3.php" style="color: black;"><h4>Regresar</h4></a>
</body>
</html>