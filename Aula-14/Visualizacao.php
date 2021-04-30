<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
    private $espectador;
    private $filme;

    public function avaliar(){
        $this->filme->setAvaliacao(10);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorcento($porc){
        $nota = 0;
        if ($porc<=20){
            $nota = 3;
        }else if($porc <=50){
            $nota = 5;
        }else if($porc <= 90){
            $nota = 8;
        }else{
            $nota = 10;
        }
        $this->filme->setAvaliacao($nota);
    }

    public function __construct($espec, $filme){
        $this->setEspectador($espec);
        $this->setFilme($filme);
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->viuMaisUm();
    }
    public function setEspectador($espec){
        $this->espectador = $espec;
    }
    public function getEspectador(){
        return $this->espectador;
    }
    public function setFilme($filme){
        $this->filme = $filme;
    }
    public function getFilme(){
        return $this->filme;
    }
}