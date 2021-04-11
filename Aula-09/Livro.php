<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';

    Class Livro implements Publicacao {
        private  $titulo;
        private  $autor;
        private  $totPaginas;
        private  $pagAtual;
        private  $aberto;
        private Pessoa $leitor;

    public function detalhes(){     ///Metodo Proprietário 
            echo "</br> Livro " . $this->getTitulo();
            echo "</br> Paginas " . $this->getTotPaginas();
            echo "</br> Pag. Atual " . $this->getPagAtual();
            echo "</br> Leitor " . $this->leitor->getNome();
    }
    function __construct($tit, $aut, $ttp, $leit){
        $this->titulo = $tit;
        $this->autor = $aut;
        $this->totPaginas = $ttp;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leit;
    }
                                    //Metodos de interface
    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folhear($pg){
        if ($this->getAberto()){
            if ($this->getTotPaginas()>=$pg){
            $this->setPagAtual($pg);
            } else {
                echo "O livro não tem $pg paginas!";
            }
        } else {
            echo "O livro está fechado!";
        }
    }
    public function avancarPag(){
        if ($this->getAberto()){
            $this->setPagAtual($this->getPagAtual()+1);
        } else {
            echo "O livro está fechado!";
        }
    }
    public function voltarPag(){
        if ($this->getAberto()){
        $this->setPagAtual($this->getPagAtual()-1);
        } else {
            echo "O livro está fechado!";
        }
    }

                     //  MEtodos geters e seters
    public function setTitulo($tit){
        $this->titulo = $tit;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function getAutor(){
        return $this->autor;;
    }
    public function setTotPaginas($ttp){
        $this->totPaginas = $ttp;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setPagAtual($pagn){
        $this->pagAtual = $pagn;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setAberto($aberto){
        $this->aberto = $aberto;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }
}