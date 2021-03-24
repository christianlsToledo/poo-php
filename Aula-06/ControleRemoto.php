<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    private $ligado;
    private $volume;
    private $tocando;
    
    function __construct() {
        $this->ligado = FALSE;
        $this->tocando = FALSE;
        $this->volume = 50;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function getVolume() {
        return $this->volume;
    }
    private function getTocando() {
        return $this->tocando;
    }
    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
    }
    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
        $this->setTocando(false);
    }

    public function abrirMenu() {
        echo "</br>------ MENU ------";
        echo "<p>Status: ",($this->getLigado())? "Ligado</p>":"Desligado</p>";
        echo "<p></br>Midia: ",($this->getTocando())?"Play </p>":"Pause ||</p>";
        echo"<p></br>Volume: ",$this->getVolume()," ";
            for ($i=0; $i<$this->getVolume(); $i+=10){
                echo"|";
            }
    }
    public function fecharMenu() {
        echo "</br>Menu fechado.";
    }

    public function maisVolume() {
        if($this->getLigado() && $this->getVolume()<100){
            $this->setVolume($this->getVolume()+10);
        }else{
            echo "<p>Volume Maximo!</p>";
        }
    }

    public function menosVolume() {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume($this->getVolume()-10);
        }else{
            $this->onMudo();
        }
    }

    public function offMudo() {
        if($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(50);
        }else{
            echo "<p>Tocando</p>";
        }
    }

    public function onMudo() {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }

    public function pause() {
        if($this->getLigado()&& $this->getTocando()){
            $this->setTocando(false);
        }else{
            echo "</br>Em PAUSE||";
        }
    }

    public function play() {
        if ($this->getLigado()&& !($this->getTocando())) {
            $this->setTocando(true);
        }else{
            echo"<p>Dispositivo desligado!</p>";
        }
    }
}
