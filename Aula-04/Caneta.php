<?php

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;     //Estado (Maquina bolean)

    function __construct() //Metodo construtor 
    {
        $this->modelo = "Bic Cristal";      //Metodo construtor inicializado com os parametros
        $this->cor = "Azul";
        $this->ponta = 0.5;
        $this->carga = 100;
        $this->tampada = true;
    }
    function getModelo(){
        return $this->modelo;
    }
    function setModelo($m){
        $this->modelo = $m;
    }
    function getCor(){
        return $this->cor;
    }
    function setCor($c){
        $this->cor = $c;
    }
    function   getPonta(){
        return $this->ponta;
    }
    function setPonta($p){
        $this->ponta = $p;
    }
    function getCarga(){
        return $this->carga;
    }
    function setCarga($cg){
        $this->carga = $cg;
    }
    function getTampada(){
        return $this->tampada;
    }
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
}