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
                require_once 'Pessoa.php'; require_once 'Aluno.php'; require_once 'Professor.php';
                require_once 'Visitante.php'; require_once 'Bolsista.php'; require_once 'Tecnico.php';

        // $pessoa = new Pessoa("alguem",15,"x"); ### Não instanciavel pois Pessoa é uma classe abstrata
                $aluno          = new Aluno("Juliana",37,"F",1,"POO PHP");
                $professor      = new Professor("Gustavo G",55,"M","Prof Matematica",1500.00);
                $visitante      = new Visitante("Clotilde C ",42,"F");
                $bolsista       = new Bolsista("Bruno Cavalcante",16,"M",003,"Ciencias",50);
                $tecnico        = new Tecnico("Eduardo P", 22, "M", 004,"Tecnicas de Programação");

                
                $visitante->fazerAniversario();
                $professor->receberAumento(25.50);
                $aluno->pagarMensalidade();
                $bolsista->pagarMensalidade();
                $bolsista->renovarBolsa();
                $tecnico->praticar();

                echo "<table> <tr>  <td>";
                
                print_r($aluno);
                print_r($professor);
                print_r($visitante);
                print_r($bolsista);
                print_r($tecnico);

                echo "</td> <td>";        
                
                print_r($aluno);
                print_r($professor);
                print_r($visitante);
                print_r($bolsista); 
                print_r($tecnico);

                echo "</td> </tr>   </table>"
        ?></pre>
    </body>
</html>