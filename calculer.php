<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculer</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../all.css">
    <style>
        input[type="number"] {
            width: 100px;
            height: 25px;
        }
        #fieldset {
            margin: 10px;
            border: 2px solid white;
            border-radius: 0px;
        }
        h3 {
            margin-bottom: 0px;
        }
    </style>
</head>
<body style="padding-left: 25px;">
    <h1><a href="../">calculer</a></h1>
    <fieldset id="fieldset">
        <form action="calculer.php" method="post">
                <input type="number" name="var1" required>
                <select name="op">
                    <!-- <option value="">- Seleccione una opcion -</option> -->
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="number" name="var2" required>
                <br><br>
                <input type="submit" value="submit">
                <br>
                <input type="reset" value="clear">
        </form>
        <?php
            if ($_POST) {
                echo "<h3>";
                echo $var1 = $_POST["var1"];
                $op = $_POST["op"];
                echo " $op ";
                echo $var2 = $_POST["var2"];
                echo " = ";

                switch ($op) {
                    case "+";
                        echo $var1 + $var2;
                        break;
                    case "-";
                        echo $var1 - $var2;
                        break;
                    case "*";
                        echo $var1 * $var2;
                        break;
                    case "/";
                        echo $var1 / $var2;
                        break;
                    default;
                        echo "Missing operator";
                        break;
                }
                echo "</h3>";
            }
        ?>
    </fieldset><br>
    <form action="calculer.php" method="post"><input type="submit" value="reset"></form>
</body>
</html>