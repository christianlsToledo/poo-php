<?php
    Class Bolsista extends Aluno{
        private $bolsa;

        public function renovarBolsa(){
            echo "Bolsa renovada.";
        }

        public function pagarMensalidade(){
            echo "<p>O ",$this->getNome()," é bolsista e tem desconto de ",$this->getBolsa(),"%.</p>";
        }

        function __construct($nome,$idade,$sexo,$matricula, $curso,$desc){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setMatricula($matricula);
            $this->setCurso($curso); 
            $this->setBolsa($desc);
        }

        public function setBolsa($desconto){
            $this->bolsa = $desconto;
        }

        public function getBolsa(){
            return $this->bolsa;
        }
    }