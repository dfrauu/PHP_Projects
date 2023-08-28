<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auuuugh</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../all.css">
</head>
<body style="padding: 5px 0 0 25px;">
    <h1><a href="../">Laboratorio 3</a></h1>

    <h3>1. Sumatoria de los numeros del 1 al 10</h3>
    <?php
        $acc = 0;
        for ($i = 1; $i <= 10; $i++) {
            $acc = $acc + $i;
        }
        echo $acc;
        unset($i);
    ?>

    <h3>2. Sumatoria de los numeros del 1 al 300 y cantidad de numeros pares en el rango</h3>
    <?php
        $sum = 0;
        $odd = 0;
        for ($i = 1; $i <= 300; $i++) {
            $sum = $sum + $i;
            if($i % 2 !== 0) {
                $odd = $odd + 1; 
            }
        }
        echo $sum;
        echo "<br>Hay $odd numeros impares";
        unset($i);
        unset($sum);
    ?>

    <h3><a href="promedionotas.php" >3. Calcular promedio de N notas</a></h3>

    <h3><a href="matrizN.php">4. Matriz de lado N</a></h3>

    <h3><a href="">5. Calcular media de 10 asignaturas</a></h3>
</body>
</html>