<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha primeira classe</title>
</head>
<body>
    <?php 

        // incluido a classe no arquivo index...
        include_once 'Caneta.php';

        // criando novo objeto para a classe...
        $obj = new Caneta;

        // atribuindo valores ao atributos da classe...
        $obj->tipo = 'transparente';
        $obj->cor = 'azul';
        $obj->ponta = '0.5';
        $obj->tampada = false;

        // chamando método...
        $obj->escrever();
    ?>
</body>
</html>