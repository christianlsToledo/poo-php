<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - Exercicio de aplicação de lições aprendidas.</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    require_once 'Visualizacao.php';
        //Programa principal
        echo "<h1>Integração de classes</h1>";
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $p[0] = new Gafanhoto("Entra","Christian", 37,"M");
        $p[1] = new Gafanhoto("Senha", "Juliana", 38, "F");

        $v[0]->play();
        $v[0]->pause();
        $v[0]->like();
        
        
        
        $vis[0] = new Visualizacao($p[0],$v[0]);        //Christian Assiste Aula 1 de POO
        $vis[1] = new Visualizacao($p[0],$v[1]);        //Christian Assiste Aula 12 de PHP
        $vis[2] = new Visualizacao($p[1],$v[0]);        //Juliana Assiste Aila 1 de POO
        $vis[0]->avaliarPorcento(100);
        $vis[1]->avaliarNota(6);
        print_r($vis);
        
    ?>
    </pre>
</body>
</html>