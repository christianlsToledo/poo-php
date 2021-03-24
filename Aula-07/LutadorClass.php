<?php
require_once 'InterfaceLutador.php';
class Lutador implements InterfaceLutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;     //   Set via regra de peso
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em) {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->vitorias = $vi;      // Passagem de parametros recebidos pelo usuário direto ao atributo 
        $this->derrotas = $de;
        $this->empates = $em;
    }
    private function getNome(){
        return $this->nome;
    }
    private function  setNome($no){
        $this->nome=$no;
    }
    private function getNacionalidade(){
        return $this->nacionalidade;
    }
    private  function setNacionalidade($na){
        $this->nacionalidade = $na;
    }
    private function getIdade(){
        return $this->idade;
    }
    private function setIdade($idd){
        $this->idade = $idd;
    }
    private function getAltura(){
        return $this->altura;
    }
    private function setAltura($alt){
        $this->altura = $alt;
    }
    private function getPeso(){
        return $this->peso;
    }
    private function setPeso($pes){
        $this->peso = $pes;
        $this->setCategoria();
    }
    private function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria(){
      $cat = "invalida";
      if ($this->getPeso()<52.2){
        $this->categoria = "Invalida";
      }elseif ($this->getPeso()<70.3) {
        $this->categoria = "Peso Pena";
      }elseif($this->getPeso()<83.9){
        $this->categoria = "Peso Médio";
      }elseif($this->getPeso()<120.2){
          $this->categoria = "Peso Pesado";
      }else{
          $this->categoria = "invalida";
      }
    }
    private function getVitorias(){
        return $this->vitorias;
    }
    private function setVitorias(){
        $this->vitorias = $this->getVitorias()+1;
    }
    private function getDerrotas(){
        return $this->derrotas;
    }
    private function setDerrotas(){
        $this->derrotas = $this->getDerrotas()+1;
    }
    private function getEmpates(){
        return $this->empates;
    }
    private function setEmpates(){
        $this->empates = $this->getEmpates()+1;
    }

    public function apresentar(){
        echo "Caracteristicas do Lutador";
        echo "</br>-----------------------------------";
        echo "<p>Nome: ",$this->getNome();
        echo "</p><p>Nacionalidade: ",$this->getNacionalidade();
        echo "</p><p>Idade: ",$this->getIdade();
        echo "</p><p>Altura: ",$this->getAltura();
        echo "</p><p>Peso: ",$this->getPeso();
        echo "</p><p>Categoria de luta: ",$this->getCategoria();
        echo "</p><p>Vitórias: ",$this->getVitorias();
        echo "</p><p>Derrotas: ",$this->getDerrotas();
        echo "</p><p>Empates: ",$this->getEmpates(),"</p>";
    }
    public function status(){
        echo "</br>O lutador ",$this->getNome(),", de categoria ",$this->getCategoria(),", pesando ", $this->getPeso(),"Kg, vem neste capeonato acumulando ",$this->getVitorias()," vitórias, ",$this->getEmpates()," empates e ",$this->getDerrotas()," derrotas.";
    }
    public function ganharLuta(){
        $this->setVitorias();
    }
    public function perderLuta(){
        $this->setDerrotas();
    }
    public function empatarLuta(){
        $this->setEmpates();
    }
}