<?php

class Caneta_02{
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    function __construct($m,$c,$p){  //  Metodo Construtor recebendo valor dos atributos passados por parametros
        $this->modelo=$m;           // vindos do index
        $this->cor=$c;
        $this->ponta=$p;
        $this->tampada = true;
    }

    public function rabiscar(){
        if($this->tampada){
            echo"Impossível! Eu estou tampada...</br>";
        }else{
            echo"Estou rabiscando...<br>";
        }
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
    public function getTampada(){
        return $this->tampada;
    }
    public function destampar(){
        $this->tampada = false;
    }
}