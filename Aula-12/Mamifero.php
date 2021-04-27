<?php
    require_once 'Animal.php';
class Mamifero extends Animal{                  //Classe de especialização de animal
    private $corPelo;

    public function setCorPelo($cor){               //Metodos Geters e Seters do atributo proprietário
        $this->corPelo = $cor;
    }
    public function getCorPelo(){
        return $this->corPelo;
    }

    Public function locomover(){                    //Implementação dos metodos abstratos
        echo "<p>Correndo</P>";
    }
    Public function alimentar(){
        echo "<p>Mamando</P>";
    }
    Public function emitirSom(){
        echo "<p>Som de Mamifero</P>";
    }

}
