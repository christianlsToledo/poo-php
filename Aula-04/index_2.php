<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 Construtor com parametros</title>
</head>
    <body>
        <pre>
            <?php
                require_once'Caneta_02.php';
                
                $c2 = new Caneta_02("Bic","Azul",0.5);
                print_r($c2);
                $c2->rabiscar();

                $c2->setModelo("Macia");
                $c2->setCor("Laranja");
                $c2->destampar();
                print_r($c2);
                $c2->rabiscar();
            ?>
        </pre>
    </body>
</html>