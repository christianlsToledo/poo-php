<?php

    Class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniversario(){     //Metodo proprietário
            $this->idade++;
        }

        function __construct($n, $i, $x){       //Construct
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $x;
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