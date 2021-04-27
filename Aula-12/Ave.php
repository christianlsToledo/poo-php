<?php
    require_once 'Animal.php';
    class Ave extends Animal{               //Classe de especialização de animal
        private $corPenas;

        public function fazerNinho(){           //Metodo Proprietário
            echo "<p>Contruindo um ninho!</P>";
        }
    
        public function setCorPenas($cor){      //Metodos Geters e Seters do atributo proprietário
            $this->corPenas = $cor;
        }
        public function getCorPenas(){
            return $this->corPenas;
        }

        public function locomover(){            //Implementação dos metodos abstratos
            echo "<p>Voando</P>";
        }
        public function alimentar(){
            echo "<p>Comendo frutas e sementes!</P>";
        }
        public function emitirSom(){
            echo "<p>Emitindo som de ave!</P>";
        }
    }