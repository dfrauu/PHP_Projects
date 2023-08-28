<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested reference arrays</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
</head>
<body style="padding: 5px 0 0 25px;">
    <h3>7. Arreglos asociativos bidimensionales</h3>
    <fieldset style="width: max-content; padding: 25px;">
        <?php
            $category = array(
                "Nivel Basico" => array(
                    "Ingles" => 1,
                    "Frances" => 14,
                    "Aleman" => 8,
                    "Portugues" => 3
                ),
                "Nivel Medio" => array(
                    "Ingles" => 6,
                    "Frances" => 19,
                    "Aleman" => 7,
                    "Portugues" => 2
                ),
                "Perfeccionamiento" => array(
                    "Ingles" => 3,
                    "Frances" => 13,
                    "Aleman" => 4,
                    "Portugues" => 1
                )
            );

            echo '
        <table border="3">
            <tr>
                <th></th>
                <th>Ingles</th>
                <th>Frances</th>
                <th>Aleman</th>
                <th>Portugues</th>
            </tr>';
            foreach ($category as $level => $languages) {
                echo "
            <tr>
                <th>$level</th>";
                foreach ($languages as $amount => $students) {
                    echo "
                <td>$students</td>";
                }
                echo '
            </tr>';
            }
            echo '
        </table>';
        ?>
    

    </fieldset>
    
    <a href="index.php" style="color: black;"><h4>Regresar</h4></a>
</body>
</html>