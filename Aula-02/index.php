<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 POO</title>
</head>
<body>
    <?php
        require_once'Caneta.php';

        $c1 = new Caneta;
        $c1->modelo = "bic";
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->carga = 90;
        $c1->tampada = false;
     
        $c1->destampar();
        $c1->rabiscar();

echo"</br>";
        $c2 = new Caneta;
        $c2->modelo = "HostNet";
        $c2->cor = "Preta";
        $c2->ponta = 1.0;
        $c2->carga = 80;
        $c2->tampada = false;

        $c2->tampar();
        $c2->rabiscar();
echo"</br>";
        print_r($c1);
echo"</br>";
        print_r($c2);
    ?>
</body>
</html>