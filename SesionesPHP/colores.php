<html>
<head>
<title>Eleccion de Colores</title>
<link rel="icon" type="image/x-icon" href="../images/favicon.png">
<style>
    a {
        color: black;
        text-decoration: none;
    }
    a:hover {
        color: #777;
        transition: 150ms;
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: 15px;
    }
</style>
</head>
<body 

<?php
    session_start();

    if (!isset($_SESSION["bgCol"])) {
        $_SESSION["bgCol"] = 0;
    }

    if (!isset($_SESSION["textCol"])) {
        $_SESSION["textCol"] = 0;
    }

    if (isset($_REQUEST["enviar"])) {
        $bgCol = traduce($_REQUEST["nbgCol"]);
        $textCol = traduce($_REQUEST["ntextCol"]);
        $_SESSION["bgCol"] = $bgCol;
        $_SESSION["textCol"] = $textCol;
        // print "<html>\n<head>\n<title>Eleccion de colores</title>\n</head>\n";
        print("bgcolor=\"$bgCol\" text=\"$textCol\">");
    } else {
        print ">";
    }

    function traduce($color) {
        switch ($color) {
            case "rojo"         : return "red";
            case "verde"        : return "green";
            case "azul"         : return "blue";
            case "cian"         : return "cyan";
            case "amarillo"     : return "yellow";
        }
    }
?>

<h2><a href="../">Elige los tus colores favoritos</a></h2>
<form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="post">
    <p>Color de fondo:
        <select name="nbgCol">
            <option>rojo</option>
            <option>verde</option>
            <option>azul</option>
            <option>cian</option>
            <option>amarillo</option>
        </select></p>
    <hr>
    <p>Color del texto:
    <select name="ntextCol">
        <option>rojo</option>
        <option>verde</option>
        <option>azul</option>
        <option>cian</option>
        <option>amarillo</option>
    </select></p>

    <p><input type="submit" name="enviar"></p>
</form>
</body>
</html>