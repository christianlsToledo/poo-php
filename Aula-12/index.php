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
    require_once 'Mamifero.php'; require_once 'Reptil.php'; require_once 'Peixe.php'; require_once 'Ave.php'; require_once 'Lobo.php'; require_once 'Cachorro.php';
        // $a = new Animal();      //Classe abstrata não instanciael
        $m = new Mamifero();                //OK
        $r = new Reptil();                  //OK
        $p = new Peixe();                   //OK
        $a = new Ave();                     //OK

        $teste = new Cachorro();

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
        
        //Teste de reações classe Cachorro
        //  $teste->reagirFrase("Bom garoto");  //Abanar e latir        OK
        //  $teste->reagirFrase("Sai");         //Rosnar                OK
        //  $teste->reagirHora(11,45);          //Abanar                OK
        //  $teste->reagirHora(15,25);          //Abanar e latir        OK
        //  $teste->reagirHora(19,30);          //Ignorar               OK
        //  $teste->reagirDono(false);           //Rosnar e latir       OK
        //  $teste->reagirDono(true);              //Abanar             OK
        //  $teste->reagirIdadePeso(2,12.5);     //Latir                OK
        //  $teste->reagirIdadePeso(4,9);        //Abanar               OK
        //  $teste->reagirIdadePeso(17,4.5);      //Rosnar              OK
        //  $teste->reagirIdadePeso(7,12);       //Ignorar              OK


        print_r($teste);
    ?>
</pre>    
</body>
</html>