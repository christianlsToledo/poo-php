<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO PHP - Conceitos de Polimorfismo</title>
</head>
<body>
<pre>
    <?php
    require_once 'Mamifero.php'; require_once 'Reptil.php'; require_once 'Peixe.php'; require_once 'Ave.php';
        // $a = new Animal();      //Classe abstrata não instanciael
        $m = new Mamifero();
        $r = new Reptil();
        $p = new Peixe();
        $a = new Ave();

        $teste = new Ave();

        // Teste de funções
            // Generalização Animais
        $teste->setPeso(2.5);
        $teste->setIdade(2);
        $teste->setMembros(4);
            // Testes de polimorfismo de Sobreposição
        $teste->locomover();
        $teste->alimentar();
        $teste->emitirSom();
            //Mamiferos
        //$teste->setCorPelo("Preto");
            //Repteis
        //$teste->setCorEscamas("Verde");
            //Peixes
        //$teste->setCorEscamas("Prateadas");
        //$teste->soltarBolhas();
            //Aves
        //$teste->setCorPenas("Azul");
        //$teste->fazerNinho();
        print_r($teste);
    ?>
</pre>    
</body>
</html>