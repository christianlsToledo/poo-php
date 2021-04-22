<?php
    Class Tecnico extends Aluno{
        private $registroProficional;
        
        public function praticar(){
            $this->setRegistroProficional($this->getRegistroProficional()+1);
            echo "<p>O aluno ",$this->getNome()," posui ",$this->getRegistroProficional()," horas de prática proficional.</p>";
        }

        function __construct($nome,$idade,$sexo,$matricula, $curso){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setMatricula($matricula);
            $this->setCurso($curso);
            $this->setRegistroProficional(0);           
        }

        public function setRegistroProficional($registro){
            $this->registroProficional = $registro;
        }

        public function getRegistroProficional(){
            return $this->registroProficional;
        }
    }