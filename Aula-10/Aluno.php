<?php

    Class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        public function cancelarMatr(){
            $this->setMatricula(null);
        }

        public function status(){
            echo "Nome: ". $this->getNome();
        }
        function __construct($nome,$idade,$sexo,$matricula, $curso){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setMatricula($matricula);
            $this->setCurso($curso);            
        }
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }
        public function getMatricula(){
            return $this->matricula;
        }
        public function setCurso($curso){
            $this->curso = $curso;
        }
        public function getCurso(){
            return $this->curso;
        }
    }