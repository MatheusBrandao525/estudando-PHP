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

        // criando novo objeto para a classe e atribuindo os valores utilizando o metodo construtor...
        $obj = new Caneta("cristal","verde","0.8", true);
        print_r($obj);
    ?>
    </pre>
</body>
</html>