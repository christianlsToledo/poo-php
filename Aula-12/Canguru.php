<?php
require_once 'Mamifero.php';
class Canguru extends Mamifero{                 //Especialização da classe Mamifero
    
    public function usarBolsa(){                //Método proprietário      
        echo "Usando Bolça";
    }

    Public function locomover(){                 //Sobrescrição do metodo abstrato sobreescrito em Mamifero
        echo "<p>Saltando...</P>";
    }
}