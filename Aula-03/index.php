<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 POO</title>
</head>
<body>
<pre>
    <?php
        require_once'Caneta.php';   //Importa a classe Caneta para o documento index.php.
       
        $n = 0.5;           //Parametros a ser passado via metodo de acesso para alterar a ponta da caneta.
        $carga = 99;        //Parametros a ser passado via metodo de acesso para alterar a carga da caneta.

        $c1 = new Caneta;               //Instanciando um novo objeto Caneta.
        $c1-> modelo= "Bic Cristal";    //Acesso direto ao atributo pois é publico.
        $c1-> cor="Azul";               //Acesso direto ao atributo pois é publico.

        $c1->quantCarga($carga);        //Metodo de acesso ao atributo privado carga do objeto caneta.
        $c1->pontaCaneta($n);           //Metodo de acesso ao atributo privado ponta do objeto caneta.

        $c1->tampar();                  //Metodos de usabilidade do objeto.
        $c1->rabiscar();
        
        echo "</br>";
        print_r($c1);                   //Imprime os atributos e estado do objeto.
    ?>
    </pre>
</body>
</html>