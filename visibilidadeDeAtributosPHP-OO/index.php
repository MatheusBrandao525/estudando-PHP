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
/*      
        por ser um atributo privado, não podemos atribuir um valor fora da clesse...
        $obj->ponta = '0.5'; 

        por ser um atributo protegido não podemos atribuir ou alterar o atributo fora da classe...
        $obj->tampada = false;

*/
        // chamando método...
        $obj->tampar();

        $obj->escrever()
    ?>
</body>
</html>