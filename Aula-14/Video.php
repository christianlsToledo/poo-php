<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;
    
    public function play(){
        $this->setReproduzindo(true);
    }
    public function pause(){
        $this->setReproduzindo(false);
    }
    public function like(){
        $this->setCurtidas($this->getCurtidas()+1);
    }

    public function __construct($titulo) {
        $this->setTitulo($titulo);
        $this->avaliacao = 10;
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }
    Public function setTitulo ($titulo){
        $this->titulo = $titulo;
    }
    Public function getTitulo (){
        return $this->titulo;
    }
    public function setAvaliacao($avaliacao){
        $media = ($this->getAvaliacao() + $avaliacao) /2;
        $this->avaliacao = $media;
    }
    public function getAvaliacao(){
        return $this->avaliacao;
    }
    public function setViews($views){
        $this->views = $views;
    }
    public function getViews(){
        return $this->views;
    }
    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }
    public function getCurtidas(){
        return $this->curtidas;
    }
    public function setReproduzindo($reprod){
        $this->reproduzindo = $reprod;
    }
    public function getReproduzindo(){
        return $this->reproduzindo;
    }
}