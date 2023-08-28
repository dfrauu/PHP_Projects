<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiac sign</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
</head>
<body style="padding: 5px 0 0 25px;">
    <h3>4. Signo segun fecha de cumplea&ntildeos</h3>
    <fieldset style="width: max-content; padding: 25px;">
        <?php
            // https://cdn.images.express.co.uk/img/dynamic/130/590x/secondary/star-sign-dates-3832874.jpg
            if($_POST) {
                $day = $_POST["day"];
                $month = $_POST["month"];
                switch ($month) {
                    case "Enero";
                        if($day<=19)
                            { $sign = "Capricornio"; }
                        else
                            { $sign = "Acuario"; }
                        break;
                    case "Febrero";
                        if($day<=17)
                            { $sign = "Acuario"; }
                        else
                            { $sign = "Piscis"; }
                        break;
                    case "Marzo";
                        if($day<=20)
                            { $sign = "Piscis"; }
                        else
                            { $sign = "Aries"; }
                        break;
                    case "Abril";
                        if($day<=20)
                            { $sign = "Aries"; }
                        else
                            { $sign = "Tauro"; }
                        break;
                    case "Mayo";
                        if($day<=21)
                            { $sign = "Tauro"; }
                        else
                            { $sign = "Geminis"; }
                        break;
                    case "Junio";
                        if($day<=21)
                            { $sign = "Geminis"; }
                        else
                            { $sign = "Cancer"; }
                        break;
                    case "Julio";
                        if($day<=22)
                            { $sign = "Cancer"; }
                        else
                            { $sign = "Leo"; }
                        break;
                    case "Agosto";
                        if($day<=23)
                            { $sign = "Leo"; }
                        else
                            { $sign = "Virgo"; }
                        break;
                    case "Septiembre";
                        if($day<=23)
                            { $sign = "Virgo"; }
                        else
                            { $sign = "Libra"; }
                        break;
                    case "Octubre";
                        if($day<=23)
                            { $sign = "Libra"; }
                        else
                            { $sign = "Escorpio"; }
                        break;
                    case "Noviembre";
                        if($day<=22)
                            { $sign = "Escorpio"; }
                        else
                            { $sign = "Sagitario"; }
                        break;
                    case "Diciembre";
                        if($day<=20)
                            { $sign = "Sagitario"; }
                        else
                            { $sign = "Capricornio"; }
                        break;
                }
                echo "Fecha de cumpleaños: <br>$day de $month<br>";
                echo "<h4>Su signo es $sign</h4>";
                echo '<form action="4.php" method="post"><input type="submit" value="Reset"></form>';
            } else {
                echo '
        <form action="4.php" method="post">
            <br><label for="status">Seleccione su mes de cumpleaños:</label><br>
            <select name="month">
                <option value="Enero">Enero</option>
                <option value="Febrero">Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo">Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto">Agosto</option>
                <option value="Septiembre" selected>Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre">Noviembre</option>
                <option value="Diciembre">Diciembre</option>
            </select>
            <br><label for="day">Seleccione su dia de cumpleaños:</label><br>
            <select name="day">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7" selected>7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <br><br><input type="submit" value="Insertar">
        </form>
                ';
            }
        ?>
    <br>
    </fieldset>
    <a href="index.php" style="color: black;"><h4>Regresar</h4></a>
</body>
</html>