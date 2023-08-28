<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Height Category</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
</head>
<body style="padding: 5px 0 0 25px;">
    <h3>2. Categoria por estatura</h3>
    <fieldset style="width: max-content; padding: 25px;">
        <form action="2.php" method="post">
            <?php
                if(isset($_POST["height"])) {
                    echo 'Introduzca su estatura (metros): <br><input type="number" min="0" max="2.72" name="height" step="0.01" value="'.$_POST["height"].'" required>';
                } else {
                    echo 'Introduzca su estatura (metros): <br><input type="number" min="0" max="2.72" name="height" step="0.01" required>';
                }
            ?>
            <input type="submit" value="Insertar">
            <?php
                if(isset($_POST["height"])) {
                    $height = $_POST["height"];
                    if($height<1.56)
                        { $category = "Baja"; }
                    elseif($height>=1.56 && $height<=1.79)
                        { $category = "Media"; }
                    elseif($height>1.79)
                        { $category = "Alta"; }
                    echo "
            <h4>Categoria: $category</h4>
        </form>";
                    echo '<form action="2.php" method="post"><input type="submit" value="Reset"></form>';
                }
            ?>
    </fieldset>
    
    <a href="index.php" style="color: black;"><h4>Regresar</h4></a>
</body>
</html>