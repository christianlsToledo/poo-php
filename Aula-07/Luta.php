<?php
require_once 'Lutador.php';
Class Luta{
    private  $desafiado;
    private  $desafiante;
    private  $rounds;
    private  $aprovada;
    private  $ganhador;

    public function marcarLuta($l1,$l2,$r){
        $this->setRounds($r);
        if  ($l1!=$l2){
            $this->setDesafiante($l1);
            $this->setDesafiado($l2);
           if($l1->getCategoria() == $l2->getCategoria()){
               $this->setRounds($r);
               $this->setAprovada(true);
           }else{
               $this->setRounds("Proibida");
               $this->setAprovada(false);
               echo "Luta NÃO pode acontecer, Lutadores com categoris diferentes!</br></br>";
           }
        } else {
            $this->setAprovada(false);
            echo "</br>Luta não pode acontecer, DESAFIANTE e DESAFIADO não podem ser o mesmo!</br></br>";
        }
        echo "<fieldset><legend>Luta Marcada com sucesso!</legend>
        <table><tr><td>",$this->getDesafiante()->Status(),"</td><td>",$this->getDesafiado()->status(),"</td></tr></table></fieldset>";
    }
    public function lutar(){
        if($this->getAprovada()){
            $vencedor = $this->lutarRounds();
            switch($vencedor){
                case 0:
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    $this->setGanhador("LUTA EMPATADA!");
                    break;
                case 1:
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                    $this->setGanhador($this->getDesafiante()->getNome());
                    break;
                case 2:
                    $this->getDesafiante()->perderLuta();
                    $this->getDesafiado()->ganharLuta();
                    $this->setGanhador($this->getDesafiado()->getNome());
                    break;
            }
            echo "<fieldset><legend>Atualização dos placares:</legend>",
            "Resultado ganhador: ",$this->getGanhador(),"</br>",
            "Desafiante: ",$this->getDesafiante()->apresentar(),
            "</br>Desafiado : ",$this->getDesafiado()->apresentar(),
                  "</br></fieldset>";
        } else {
            echo "Luta proibida por infringir regras de autenticação!</br></br>";
        }
    }
    public function lutarRounds(){
        $l1=0;$l2=0;
        for($i=1; $i<=$this->getRounds(); $i++){
           $orte = rand(0,2);
           switch($orte){
            case 0:
                $this->setGanhador("LUTA EMPATADA!");
                break;
            case 1:
                $l1++;
                $this->setGanhador($this->getDesafiante()->getNome());
                break;
            case 2:
                $l2++;
                $this->setGanhador($this->getDesafiado()->getNome());
                break;
            }
            echo "<fieldset></br> $i ° ROUND ";
            echo $this->getGanhador(),"</fieldset>"; 
        }
        if ($l1==$l2){
            return 0;
        }else if($l1>$l2){
            return 1;
        }else if($l1<$l2){
            return 2;
        }
    }
    public function setDesafiado($d){
        $this->desafiado = $d;
    }
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function setDesafiante($d){
        $this->desafiante = $d;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function setRounds($r){
        $this->rounds = $r;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function setAprovada($ap){
        $this->aprovada = $ap;
    }
    public function getAprovada(){
        return $this->aprovada;
    }
    public function setGanhador($g){
        $this->ganhador = $g;
    }
    public function getGanhador(){
        return $this->ganhador;
    }
}