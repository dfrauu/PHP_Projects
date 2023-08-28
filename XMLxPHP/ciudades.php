<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudades</title>
    <style>
        body {
            color: white;
            background-color:#1f1d33;
            padding: 5px;
        }

        a {
            color: white;
            text-decoration: none;
            padding: 0 5px 0 5px
        }

        a:hover {
            color: #ff6eaf;
            transition: 150ms;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
        }

        table {
            border-collapse: collapse;
            width: max-content;
            margin: auto;
            font-size: 17px;
        }

        th, td {
            border: 1px solid white;
            text-align: center;
            padding: 5px 25px;
            width: 33.333%;
        }

        th[colspan="3"] {
            font-size: 20px;
        }

        h1, h2 {
            text-align: center;
        }

        h3 {
            margin: 1px;
            color: #ffec6e;
        }
    </style>
</head>
<body>
    <br><h1><a href="../">Informacion sobre ciudades</a></h1>
    <table>
        <?php
            if (!$xml = simplexml_load_file("ciudades.xml")) {
                echo "<h2>[ Error: No se ha podido cargar el archivo XML ]</h2>";
            } else {
                echo '
        <tr>
            <th colspan="3">Ciudades</th>
        </tr>
        <tr>
            <th><h3>Ciudad</h3></th>
            <th><h3>Pais</h3></th>
            <th><h3>Continente</h3></th>
        </tr>
                ';
                foreach ($xml->ciudad as $city) {
                    echo '
        <tr>
            <td>'.$city->nombre.'</td>
            <td>'.$city->pais.'</td>
            <td>'.$city->attributes()->continente.'</td>
        </tr>
                    ';
                }
            }
        ?>
    </table>
</body>
</html>