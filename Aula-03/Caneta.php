<?php

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;     //Estado (Maquina bolean)

    public function rabiscar(){
        echo "Eu sou a caneta ",$this->cor, " e ";
        if($this->tampada == true){
            echo "é impossível! Estou tampada...";
        }else{
            echo "estou rabiscando...";
        }
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
    public function pontaCaneta($x){
        $this->ponta = $x;
    }
    public function quantCarga($x){
        $this->carga = $x;
    }
}