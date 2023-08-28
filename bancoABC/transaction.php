<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(!empty($_SESSION['usuario'])) {
            if($_POST) {
                $amount = number_format((float)$_POST['amount'], 2, '.', '');
                switch($_POST['type']) {
                    case 'deposit':
                        $_SESSION['balance'] += $_POST['amount'];
                        $_SESSION['balance'] *= 1.025;
                        array_push($_SESSION['history'], "+".$amount);
                        $balance = number_format((float)$_SESSION['balance'], 2, '.', '');
                        echo "Deposito realizado con exito
                        <br>
                        Nuevo saldo: ".$balance;
                        break;

                    case 'withdrawal':
                        if ($_POST['amount'] > $_SESSION['balance']) {
                            echo '[Transaccion fallida]: Fondos insuficientes';
                        } elseif ($_SESSION['w_limit'] > 1500) {
                            echo '[Transaccion fallida]: No puede retirar mas de $1500 por dia.';
                        } elseif($_SESSION['balance']-$_POST['amount'] < 100) {
                            echo '[Transaccion fallida]: El capital no puede ser menor a $100.';
                        } elseif($_SESSION['w_count'] >= 4) {
                            echo '[Transaccion fallida]: El maximo de retiros es 4 por dia.';
                        } else {
                            $_SESSION['balance'] -= $_POST['amount'];
                            $_SESSION['w_limit'] += $_POST['amount'];
                            $_SESSION['w_count']++;
                            $balance = number_format((float)$_SESSION['balance'], 2, '.', '');
                            array_push($_SESSION['history'], "-".$amount);
                            echo "Retiro realizado con exito
                            <br>
                            Nuevo saldo: ".$balance;
                        }
                        break;
                }
                echo '
                    <br>
                    <a href="menu.php">Regresar</a>
                ';
            }
        } 
    ?>
</body>
</html>