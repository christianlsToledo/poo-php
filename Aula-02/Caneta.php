<?php

class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada; //Estado (Maquina bolean)

    function rabiscar(){
        echo "Eu sou a caneta ",$this->cor, " e ";
        if($this->tampada == true){
            echo "é impossível! Estou tampada...";
        }else{
            echo "estou rabiscando...";
        }
    }
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
}