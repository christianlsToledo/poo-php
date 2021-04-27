<?php
    require_once 'Animal.php';
    class Reptil extends Animal{                    //Classe de especialização de animal
        private $corEscamas;

        public function setCorEscamas($cor){                //Metodos Geters e Seters do atributo proprietário
            $this->corEscamas = $cor;
        }
        public function getCorEscamas(){
            return $this->corEscamas;
        }

        public function locomover(){                        //Implementação dos metodos abstratos
            echo "<p>Rastejando</P>";
        }
        public function alimentar(){
            echo "<p>Comendo vegetais</P>";
        }
        public function emitirSom(){
            echo "<p>Som de Réptil</P>";
        }
    }