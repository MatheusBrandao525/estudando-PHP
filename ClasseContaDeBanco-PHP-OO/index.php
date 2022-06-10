<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta de banco</title>
</head>
<body>
    <pre>
        <?php 

            include_once 'ContaBanco.php';

            $conta1 = new ContaBanco();
            $conta1->abirConta('CC');
            $conta1->setNumConta(64514);
            $conta1->setDonoConta('Matheus');
            print_r($conta1);


            echo '<br>';

            $conta2 = new ContaBanco();
            $conta2->abirConta('CP');
            $conta2->setNumConta(84848);
            $conta2->setDonoConta('Maria');
            print_r($conta2);

        ?>
    </pre>
</body>
</html>