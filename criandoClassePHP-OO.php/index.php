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

        include_once 'Caneta.php';

        $obj = new Caneta;
        $obj->tipo = 'transparente';
        $obj->cor = 'azul';
        $obj->ponta = '0.5';
        $obj->tampada = false;

        /* print_r($obj); */

        $obj->escrever();
    ?>
</body>
</html>