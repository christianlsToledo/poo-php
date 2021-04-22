<?php
    abstract Class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniversario(){     //Metodo proprietário
            $this->setIdade($this->getIdade()+1);
        }

        function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setSexo($exo){
            $this->sexo = $exo;
        }
        public function getSexo(){
            return $this->sexo;
        }
    }