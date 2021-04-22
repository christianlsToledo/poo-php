<?php

    Class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        public function pagarMensalidade(){
            echo "<p>Obrigado ",$this->getNome(),", mensalidade paga com sucesso!</p>";
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