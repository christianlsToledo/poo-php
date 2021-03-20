<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco.</title>
</head>
<body>
    <pre><pre>
        <?php
            require_once'Conta.php';

            echo "<h1>Informações da conta.</h1>";
            $p1 = new Conta(111, "Jubileu");       //Abertura de contas com passagem de parametros ao __construct
            $p2 = new Conta(222, "Creusa");
           
            $p1->abrirConta("cc");                 //Bateria de testes
            $p2->abrirConta("cp");
            $p1->depositar(300);
            $p2->depositar(500);

            $p2->sacar(100);

            $p1->pgMensal();
            $p2->pgMensal();

            $p1->sacar(338);
            $p2->sacar(530);

            $p1->fecharConta();
            $p2->fecharConta();
            
            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>