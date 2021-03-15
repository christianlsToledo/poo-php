<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 POO</title>
</head>
<body>
<pre>
    <?php
        require_once'Caneta.php';   //Importa a classe Caneta para o documento index.php.
       
        $c1 = new Caneta;               //Instanciando um novo objeto Caneta.
       
        print_r($c1);                   //Imprime os atributos e estado do objeto.
        
        
        print ("Eu tenho uma caneta {$c1->getModelo()} com ponta {$c1->getPonta()}.");
        
    ?>
    </pre>
</body>
</html>