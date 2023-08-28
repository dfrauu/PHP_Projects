<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
</head>
<body style="padding: 5px 0 0 25px;">
    <h3>4. Matriz de lado N</h3>
    <fieldset style="width: max-content; padding: 25px;">
        <form action="matrizN.php" method="post">
            <label for="side">Introduzca el caracter de la matriz: </label>
            <?php
                if(isset($_POST["char"])) {
                    echo '<input type="text" name="char" value="'.$_POST["char"].'" required>';
                    $char = $_POST["char"];
                } else {
                    echo '<input type="text" name="char" value="*">';
                }
            ?>
            <br><label for="side">Introduzca el tamaño de la matriz: </label>
            <?php
                if(isset($_POST["side"])) {
                    echo '<input type="number" name="side" value="'.$_POST["side"].'" required><br><input type="submit" value="Insertar"><br><br>';
                    $n = $_POST["side"];
                    for ($i = 1; $i <= $n; $i++) {
                        if($i == 1 || $i == $n) {
                            for ($j = 1; $j <= $n; $j++) {
                                echo "$char&nbsp";
                            }
                            echo "<br>";
                        } else {
                            echo "$char " ;
                            for ($j = 1; $j <= $n-2; $j++) {
                                echo "&nbsp&nbsp&nbsp";
                            }
                            echo "$char<br>";
                        }
                    }

                } else {
                    echo '<input type="number" name="side" required><br><input type="submit" value="Insertar">';
                }
            ?>
        </form>
        <br><form action="matrizN.php" method="post"><input type="submit" value="Reset"></form>
    </fieldset>
    
    <a href="practicaPHP.php" style="color: black;"><h4>Regresar</h4></a>
</body>
</html>