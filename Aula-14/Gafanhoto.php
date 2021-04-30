<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    private $login, $totAssistido;

    public function viuMaisUm(){
        $this->setTotAssistido($this->getTotAssistido()+1);
    }

    function __construct($login,$nome, $idade, $sexo){
        parent::__construct($nome,$idade,$sexo);
        $this->setLogin($login);
        $this->setTotAssistido(0);
    }

    public function setLogin($log){
        $this->login = $log;
    }
    public function getLogin(){
        return $this->login;
    }
    public function setTotAssistido($tt){
        $this->totAssistido = $tt;
    }
    public function getTotAssistido(){
        return $this->totAssistido;
    }
}