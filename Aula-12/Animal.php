<?php

abstract class Animal{
    private $peso;
    private $idade;
    private $membros;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    public function setPeso ($peso){
        $this->peso = $peso;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setIdade ($idade){
        $this->idade = $idade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setMembros ($membros){
        $this->membros = $membros;
    }
    public function getMembros(){
        return $this->membros;
    }
}