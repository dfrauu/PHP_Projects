<?php
    if(isset($_POST["button"])) {
        $button = $_POST["button"];
        switch ($button) {
            case "self":
                $button = "blank";
                break;
            case "blank":
                $button = "self";
                break;
        }
    } else {
        $button = "self";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTDocs Index</title>
    <link rel="icon" type="image/x-icon" href="../images/doge.png">
    <link rel="stylesheet" href="../all.css">
</head>
<body>
    <h2>HTDocs Content:</h2>
    <div class="center">
        <fieldset class="squareset">
            <legend><a href="all.css" target="_blank">Menu</a></legend>
            <?php
                $xml = simplexml_load_file("entries.xml")
                or
                die("<h2>[ Error ] Misplaced XML file</h2>");

                foreach ($xml->page as $entry) {
                    echo '<h3><a target="_'.$button.'" href='.$entry->path.'>'.$entry->name.'</a></h3>';
                }
                
                echo '<br>
            <form action="index.php" method="post">
                <input type="text" name="button" value="'.$button.'" hidden>
                <input type="submit" value="Target: '.$button.'">
            </form>';
            ?>
        </fieldset>
    </div>
</body>
</html>

<?php
    /*
    header("Location: ..\\IdiomaCookies\ContadorCookies.php");
    die();

    $onclick = "location.href='http://www.youtube.com'";
    echo '<button onclick="'.$onclick.'" type="button">YouTube</button>';
    */
?>
