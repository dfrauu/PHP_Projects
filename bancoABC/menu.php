<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <?php
        session_start();
        if(!empty($_SESSION['usuario'])) {
            
            // unset($_SESSION['balance']);
            // unset($_SESSION['w_limit']);
            // unset($_SESSION['w_count']);
            // unset($_SESSION['history']);

            if (empty($_SESSION['balance']) && empty($_SESSION['w_limit']) && empty($_SESSION['w_count']) && empty($_SESSION['history'])) {
                $_SESSION['balance'] = 100;
                $_SESSION['w_limit'] = 0;
                $_SESSION['w_count'] = 0;
                $_SESSION['history'] = array();
            }

            $withdrawn_today = number_format((float)$_SESSION['w_limit'], 2, '.', '');
            $current_balance = number_format((float)$_SESSION['balance'], 2, '.', '');

            if(!isset($_SESSION['creationTime'])) {
                $_SESSION['creation_time'] = time();
            }
            
            if (time() - $_SESSION['creation_time'] <= 60*60*24 ){
            }
            else {
                $_SESSION['w_count'] = 0;
            }

            echo '
                Bienvenido/a, '.$_SESSION['usuario'].'
                <br>
                <a href="close.php">Log Out</a>
                <hr>
                Sus fondos son de '.$current_balance;
            
            echo '
                <form method="post" action="transaction.php">
                    <select name="type">
                        <option value="deposit">Depositar</option>
                        <option value="withdrawal">Retirar</option>
                    </select>
                    <input type="number" name="amount" step="0.01">
                    <input name="enviar" type="submit" value="Enviar"><br><br>
                </form>';
            
            echo 'Hoy a retirado '.$withdrawn_today;
            echo '<br>Retiros realizados hoy: '.$_SESSION['w_count'].' de 4.';
            echo '<br><a href="">';
            
            echo '</a>';
            
        } else {
            echo '
                Por favor inicia sesion
                <br>
                <a href="index.php">Regresar</a>
            ';
        }
    ?>
    <hr>
    Historial:
    <br>
    <?php
        if(!empty($_SESSION['history'])) {
            foreach($_SESSION['history'] as $transaction) {
                echo $transaction;
                echo "<br>";
            }
        }
    ?>
</body>
</html>