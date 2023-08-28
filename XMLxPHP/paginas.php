<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcadores</title>
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

        fieldset {
            width: max-content;
            padding: 25px;
            margin: auto;
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        h3 {
            margin: 1px;
            color: #ffec6e;
        }
    </style>
</head>
<body>
    <br><h1><a href="../">Marcadores de paginas web</a></h1>
    <fieldset>
        <legend><hr></legend>
        <?php
        $xml = simplexml_load_file("paginas.xml") or die("<h2>[ Error: No se ha podido cargar el archivo XML ]</h2>");

        $count = count($xml);
        $i = 0;

        foreach ($xml->pagina as $bookmark) {
            echo "
        Nombre:<h3>$bookmark->nombre</h3><br>
        Descripcion:<h3>$bookmark->descripcion</h3><br>
        <h3><a href='$bookmark->url'>[ Enlace ]</a></h3>
            ";
            if (next($xml) || ++$i != $count) {
                echo "<br><hr><br>";
            }
        }
        ?>
    </fieldset>
</body>
</html>