<?php

Class Pessoa{
    private String $nome;
    private int $idade;
    private String $sexo;

    public function __construct($n, $i, $x){     //_Construct
        $this->nome = $n;
        $this->idade = $i;
        $this->sexo = $x;
    }
    public function fazerAniersario(){      //Metod Proprietário
        $this->setIdade($this->getIdade()+1);
    }

    public function getNome(){ 
        return $this->nome;
    }
    public function setNome($n){ 
        $this->nome = $n;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function getSexo(){ 
        return $this->sexo;
    }
    public function setSexo($x){ 
        $this->sexo = $x;
    }
}