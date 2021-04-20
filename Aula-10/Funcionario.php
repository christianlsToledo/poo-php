<?php

    Class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        public function mudarTrabalho($x){
            $this->setTrabalho = $x;
        }

        function __construct($nome,$idade,$sexo,$setor, $trabalhando){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setor = $setor;
            $this->trabalhando = $trabalhando;
        }
        public function setSetor($setor){
            $this->setor = $setor;
        }
        public function getSetor(){
            return $this->setor;
        }
        public function setTrabalhando($status){
            $this->trabalhando = $status;
        }
        public function getTrabalhando(){
            return $this->trabalhando;
        }
    }