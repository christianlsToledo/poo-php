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

               
                $aluno          = new Aluno("Juliana",37,"F",1,"POO PHP");
                $professor      = new Professor("Gustavo G",55,"M","Prof Matematica",1500.00);
                $funcionario    = new Funcionario("Clotilde C ",42,"F","Limpesa",true);

                echo "<table> <tr>  <td>";
                
                print_r($aluno);
                print_r($professor);
                print_r($funcionario);

                echo "</td> <td>";        
                
                print_r($aluno);
                print_r($professor);
                print_r($funcionario); 

                echo "</td> </tr>   </table>"
        ?></pre>
    </body>
</html>