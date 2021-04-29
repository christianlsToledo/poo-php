<?php
require_once 'Lobo.php';
class Cachorro extends Lobo{        //Especialização da classe Mamifero
    
    public function enterrarOsso(){
        echo "Enterrando Osso";
    }

    public function abanarRabo(){
        echo "Abanando o rabo.";
    }

    public function emitirSom() {
        echo "Au! Au! Au! ";
    }
    /*
        O PHP não suporta sbrecarga, por tanto serão utilizados nomes de metodos que reflitam a função e os parametros, cada metodo que seria chamado por sobrecarga deverá ser chamado por deu nome e não pela diferenciação de assinatura.
    */

    public function reagirFrase($frase){
        if ($frase==("Bom garoto")||$frase==("Ola")){
            echo "<p>Abanar e latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }
    public function reagirHora($h,$m){
        if ($h<12){
            echo "<p> Abanar (<12)</p>";
        }else if ($h>=18){
            echo "<p> Ignorar (>18)</p>";
        }else{
            echo "<p>Abanar e latir (entre 12/18) </p>";
        }
    }
    public function reagirDono($dono){
        if ($dono) {
            echo "<p> Abanar (É o dono)</p>";
        } else {
            echo "<p> Rosnar e latir (Não é o dono)</p>";
        }
        
    }
    public function reagirIdadePeso($idade, $peso){
        if ($idade<5) {
            if ($peso<10) {
                echo "<p> Abanar  (idade<5 peso<10)</p>";
            } else {
                echo "<p> Latir  (idade<5 peso >10)</p>";
            }
        } else if($peso<10){
            echo "<p> Rosnar (idade > 5 peso <10)</p>";
            } else{
                echo "<p> Ignorar (idade > 5 peso >10)</p>";
        }
    }
}