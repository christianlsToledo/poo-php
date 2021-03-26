<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
<pre>
    <h1>UEC Ultra Emoji Combat</h1>
    <?php   
    $r = 1; //Numero de rounds
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $l[0] = new Lutador("Pretty Boy","França",31,1.75,68.9,11,2,1);
        $l[1] = new Lutador("Putscript","Brasil",29,1.68,57.8,14,2,3);
        $l[2] = new Lutador("Snapshadow","EUA", 35,1.65,80.9,12,2,1);
        $l[3] = new Lutador("Dead Code", "Austrália",28,1.93,81.6,13,0,2);
        $l[4] = new Lutador("Ufocobol","Brasil",37,1.70,119.3,5,4,3);
        $l[5] = new Lutador("Nerdaart","EUA",30,1.81,105.7,12,2,4);

      //  $l[0]->status();
      //  $l[1]->status();
      //  $l[2]->status();
      //  $l[3]->status();
      //  $l[4]->status();
      //  $l[5]->status();
       
        $lt1 = new Luta();
        $lt1->marcarLuta($l[2],$l[3],$r);
        $lt1->lutar();
        $lt1->lutar();
        $lt1->lutar();
        
    ?>
</pre>
</body>
</html>