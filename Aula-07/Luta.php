<?php
require_once 'Lutador.php';
Class Luta{
    private  $desafiado;
    private  $desafiante;
    private  $rounds;
    private  $aprovada;

    public function marcarLuta($l1,$l2,$r){
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
    }
    public function lutar(){
        if($this->getAprovada()){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);
            echo $vencedor;
            switch($vencedor){
                case 0:
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    echo "</br></br>Empate!</br></br>";
                    break;
                case 1:
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                   echo "</br></br>O ganhador é ", $this->desafiante->getNome(),".</br></br>";
                    break;
                case 2:
                    $this->getDesafiante()->perderLuta();
                    $this->getDesafiado()->ganharLuta();
                    echo "</br></br>O ganhador é ", $this->desafiado->getNome(),".</br></br>";
                    break;
            }
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
        } else {
            echo "Luta proibida por infringir regras de autenticação!</br></br>";
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
}