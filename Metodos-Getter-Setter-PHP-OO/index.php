<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha primeira classe</title>
</head>
<body>
    <pre>
    <?php 

        // incluido a classe no arquivo index...
        include_once 'Caneta.php';

        // criando novo objeto...
        $obj = new Caneta();

        // setando os valores dos atributos através de metodos setters...
        $obj->setTipo('cristal');
        $obj->setPonta('0.5');
        $obj->setCor('vermelha');
        $obj->setTampa(true);
        print_r($obj);

        echo '<br>';

        // usando metodos getters para exiber os valores dos atributos da classe Caneta...
        echo "Minha caneta é do tipo {$obj->getTipo()}, tem uma ponta {$obj->getPonta()}, e, é {$obj->getCor()}";

    ?>
    </pre>
</body>
</html>