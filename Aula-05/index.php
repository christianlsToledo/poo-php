<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco.</title>
</head>
<body>
    <pre>
        <?php
            require_once'Conta.php';

            echo "<h1>Informações da conta.</h1>";
            $c1 = new Conta(002, "Juliana");
            $c1->abrirConta("cp");
            $c1->sacar(150);
            $c1->pgMensal();
            $c1->fecharConta();
            $c1->depositar(100);
            $c1->pgMensal();
            
            print_r($c1);
        ?>
    </pre>
</body>
</html>