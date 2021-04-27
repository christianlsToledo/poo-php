<?php
    require_once 'Animal.php';
    class Peixe extends Animal{                     //Classe de especialização de animal
        private $corEscamas;

        public function __construct()
        {
             $this->setMembros(0);
        }

        public function soltarBolhas(){                 //Metodo Proprietário
            echo "<p>Soltou uma bolha!</P>";
        }

        public function setCorEscamas($cor){            //Metodos Geters e Seters do atributo proprietário
            $this->corEscamas = $cor;
        }
        public function getCorEscamas(){
            return $this->corEscamas;
        }

        public function locomover(){                    //Implementação dos metodos abstratos
            echo "<p>Nadando</P>";
        }
        public function alimentar(){
            echo "<p>Comendo substâncias</P>";
        }
        public function emitirSom(){
            echo "<p>Peixe não faz som!</P>";
        }

        public function setMembros ($membros){     //Sobreposição do metodo membros pois peixes não tem membros
            $this->membros = 0;
        }
    }
