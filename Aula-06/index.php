<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Controle Remoto</title>
    </head>
    <h1>Projeto controle remoto</h1>
    <pre>
        <?php
          require_once 'ControleRemoto.php';
         
          $c = new ControleRemoto();
          
//          $c->ligar();
//          $c->play();
//          $c->desligar();
          $c->menosVolume();
//          $c->menosVolume();
//          $c->menosVolume();
//          $c->menosVolume();
//          $c->menosVolume();
//          $c->menosVolume();
          $c->onMudo();
//          $c->offMudo();
//          $c->pause();
//          $c->play();
          $c->abrirMenu();
          $c->fecharMenu();
        ?>
    </pre>
</html>
