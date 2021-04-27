<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero{        //Especialização da classe Mamifero
    
    public function enterrarOsso(){
        echo "Enterrando Osso";
    }

    public function abanarRabo(){
        echo "Abanando o rabo.";
    }
}