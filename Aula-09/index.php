<DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Projeto Livro'</title>
    </head>
    <body>
    <pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';


        $p[0] = new Pessoa("Christian",37,"M");
        $p[1] = new Pessoa("Maria", 31, "F");

        $l[0] = new Livro("Php Basica", "José da Silva", 300, $p[0]);
        $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
        $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);

        $l[0]->detalhes(); 
        echo "</br> </br>";
        $l[0]->abrir();
        $l[0]->folhear(200);
        $l[0]->detalhes();
        
    ?>
    </pre>
    </body>

</html>