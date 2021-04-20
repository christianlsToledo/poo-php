<?php

    Class Professor extends Pessoa{
        private $especialidade;
        private $salario;

        public function receberAumento($aumento){
            $this->setSalario($this->getSalario() + $aumento);
        }

        function __construct($nome,$idade,$sexo,$especialidade, $salario){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setEspecialidade($especialidade);
            $this->setSalario($salario);
        }
        public function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }
        public function getEspecialidade(){
            return $this->especialidade;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }
        public function getSalario(){
            return $this->salario;
        }
    }