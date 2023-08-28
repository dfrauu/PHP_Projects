<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Category</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
</head>
<body style="padding: 5px 0 0 25px;">
    <h3>3. Categoria por indice de masa corporal</h3>
    <fieldset style="width: max-content; padding: 25px;">
        <form action="3.php" method="post">
            <?php
                if(isset($_POST["imc"])) {
                    echo 'Introduzca su IMC (Indice de masa corporal): <br><input type="number" min="0" max="105" name="imc" step="0.1" value="'.$_POST["imc"].'" required>';
                } else {
                    echo 'Introduzca su IMC (Indice de masa corporal): <br><input type="number" min="0" max="105" name="imc" step="0.1" required>';
                }
            ?>
            <input type="submit" value="Insertar">
            <?php
                if(isset($_POST["imc"])) {
                    $imc = $_POST["imc"];
                    if($imc<=0)
                    { echo "[Error] IMC invalido"; }
                    elseif($imc<18.5)
                    { echo "<h4>Categoria: Underweight</h4>"; }
                    elseif($imc>=18.5 && $imc<=24.9)
                    { echo "<h4>Categoria: Healthy</h4>"; }
                    elseif($imc>=25 && $imc<=29.9)
                    { echo "<h4>Categoria: Overweight</h4>"; }
                    elseif($imc>=30)
                    { echo "<h4>Categoria: Obese</h4>"; }
                    echo '
        </form><form action="3.php" method="post"><input type="submit" value="Reset"></form>';
                }
            ?>
    </fieldset>
    
    <a href="index.php" style="color: black;"><h4>Regresar</h4></a>
</body>
</html>