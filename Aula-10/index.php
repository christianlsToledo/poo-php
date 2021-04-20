<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas!</title>
</head>
    <body>
       <pre> 
       <?php              //Classes e subclasses(filhas)
                require_once 'Pessoa.php';
                require_once 'Aluno.php';
                require_once 'Professor.php';
                require_once 'Funcionario.php';

                $pessoa         = new Pessoa("Christian",37,"M");
                $aluno          = new Aluno("Juliana",37,"F",1,"POO PHP");
                $professor      = new Professor("Professor 1",55,"M","Prof Matematica",1500);
                $funcionario    = new Funcionario("Funcionario 1 ",42,"F","Limpesa",true);

                print_r($pessoa);
                print_r($aluno);
                print_r($professor);
                print_r($funcionario);

                $aluno->
                
                print_r($pessoa);
                print_r($aluno);
                print_r($professor);
                print_r($funcionario); 
        ?></pre>
    </body>
</html>