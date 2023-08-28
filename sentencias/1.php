<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Health</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
</head>
<body style="padding: 5px 0 0 25px;">
    <h3>1. Diagnostico de ritmo cardiaco</h3>
    <fieldset style="width: max-content; padding: 25px;">
        <form action="1.php" method="post">
            <?php
                if($_POST) {
                    $age = $_POST["age"];
                    $bpm = $_POST["bpm"];
                    $sex = $_POST["sex"];
                    if($age<20) 
                        { $group = 0; }
                    elseif($age>=20 && $age <=29)
                        { $group = 1; }
                    elseif($age>=30 && $age <=39)
                        { $group = 2; }
                    elseif($age>=40 && $age <=49)
                        { $group = 3; }
                    elseif($age>=50) 
                        { $group = 4; }
                    switch ($sex) {
                        case "male";
                            echo "Sexo: Masculino<br>";
                            echo "Edad: $age<br>";
                            echo "Grupo de edad: $group<br>";
                            echo "Ritmo cardiaco: $bpm ppm";
                            switch ($group) {
                                case 0;
                                    echo "<br><h4>Sin diagnostico para menores de 20 a&ntildeos</h4>";
                                    break;
                                case 1;
                                    if($bpm>=86)
                                        { $diagnosis = "Inadecuado"; }
                                    elseif($bpm>=70 && $bpm<=84)
                                        { $diagnosis = "Normal"; }
                                    elseif($bpm>=62 && $bpm<=68)
                                        { $diagnosis = "Bueno"; }
                                    elseif($bpm<=60)
                                        { $diagnosis = "Excelente"; }
                                    echo "<h4>Diagnostico: $diagnosis</h4>";
                                    break;
                                case 2;
                                    if($bpm>=86)
                                        { $diagnosis = "Inadecuado"; }
                                    elseif($bpm>=72 && $bpm<=84)
                                        { $diagnosis = "Normal"; }
                                    elseif($bpm>=64 && $bpm<=70)
                                        { $diagnosis = "Bueno"; }
                                    elseif($bpm<=62)
                                        { $diagnosis = "Excelente"; }
                                    echo "<h4>Diagnostico: $diagnosis</h4>";
                                    break;
                                case 3;
                                    if($bpm>=90)
                                        { $diagnosis = "Inadecuado"; }
                                    elseif($bpm>=74 && $bpm<=88)
                                        { $diagnosis = "Normal"; }
                                    elseif($bpm>=66 && $bpm<=72)
                                        { $diagnosis = "Bueno"; }
                                    elseif($bpm<=64)
                                        { $diagnosis = "Excelente"; }
                                    echo "<h4>Diagnostico: $diagnosis</h4>";
                                    break;
                                case 4;
                                    if($bpm>=90)
                                        { $diagnosis = "Inadecuado"; }
                                    elseif($bpm>=76 && $bpm<=88)
                                        { $diagnosis = "Normal"; }
                                    elseif($bpm>=68 && $bpm<=74)
                                        { $diagnosis = "Bueno"; }
                                    elseif($bpm<=66)
                                        { $diagnosis = "Excelente"; }
                                    echo "<h4>Diagnostico: $diagnosis</h4>";
                                    break;
                            }
                            break;
                        case "female";
                            echo "Sexo: Femenino<br>";
                            echo "Edad: $age<br>";
                            echo "Grupo de edad: $group<br>";
                            echo "Ritmo cardiaco: $bpm ppm";
                            switch ($group) {
                                case -1;
                                    echo "[Error] Edad invalida";
                                    break;
                                case 0;
                                    echo "<br><h4>Sin diagnostico para menores de 20 a&ntildeos</h4>";
                                    break;
                                case 1;
                                    if($bpm>=96)
                                        { $diagnosis = "Inadecuado"; }
                                    elseif($bpm>=78 && $bpm<=94)
                                        { $diagnosis = "Normal"; }
                                    elseif($bpm>=72 && $bpm<=76)
                                        { $diagnosis = "Bueno"; }
                                    elseif($bpm<=70)
                                        { $diagnosis = "Excelente"; }
                                    echo "<h4>Diagnostico: $diagnosis</h4>";
                                    break;
                                case 2;
                                    if($bpm>=98)
                                        { $diagnosis = "Inadecuado"; }
                                    elseif($bpm>=80 && $bpm<=96)
                                        { $diagnosis = "Normal"; }
                                    elseif($bpm>=72 && $bpm<=78)
                                        { $diagnosis = "Bueno"; }
                                    elseif($bpm<=70)
                                        { $diagnosis = "Excelente"; }
                                    echo "<h4>Diagnostico: $diagnosis</h4>";
                                    break;
                                case 3;
                                    if($bpm>=100)
                                        { $diagnosis = "Inadecuado"; }
                                    elseif($bpm>=80 && $bpm<=98)
                                        { $diagnosis = "Normal"; }
                                    elseif($bpm>=74 && $bpm<=78)
                                        { $diagnosis = "Bueno"; }
                                    elseif($bpm<=72)
                                        { $diagnosis = "Excelente"; }
                                    echo "<h4>Diagnostico: $diagnosis</h4>";
                                    break;
                                case 4;
                                    if($bpm>=104)
                                        { $diagnosis = "Inadecuado"; }
                                    elseif($bpm>=84 && $bpm<=102)
                                        { $diagnosis = "Normal"; }
                                    elseif($bpm>=76 && $bpm<=82)
                                        { $diagnosis = "Bueno"; }
                                    elseif($bpm<=74)
                                        { $diagnosis = "Excelente"; }
                                    echo "<h4>Diagnostico: $diagnosis</h4>";
                                    break;
                            }
                            break;
                    }
                    echo '<form action="1.php" method="post"><input type="submit" value="Reset"></form>';
                } else {
                    echo '
                        <br>Seleccione su edad<br>
                        <input type="range" name="age" min="0" max="120" value="20" oninput="this.nextElementSibling.value = this.value"><output>20</output> a&ntildeos<br>
                        Seleccione su ritmo cardiaco<br>
                        <input type="range" name="bpm" min="40" max="160" value="60" oninput="this.nextElementSibling.value = this.value"><output>60</output> ppm<br>
                        Seleccione su sexo:
                        <br>
                        <label><input type="radio" name="sex" value="male" required>Masculino</label>
                        <br>
                        <label><input type="radio" name="sex" value="female" required>Femenino</label>
                        <br><br>
                        <input type="submit" value="Insertar"><br><br>
                    ';
                }
            ?>
        </form>
    </fieldset>
    
    <a href="index.php" style="color: black;"><h4>Regresar</h4></a>
</body>
</html>