<?php

    class Conta{
        public $numConta;
        protected $tipo;
        private $cliente; 
        private $saldo;
        private $status;

        public function __construct($num, $cli)
        {                                       //Metodo Construtor
            $this->setNumConta($num);
            $this->setCliente($cli);
            $this->setStatus(false);
            $this->setSaldo(0);
        }
        
        public function setNumConta ($n){
            $this->numConta = $n;
        }
        public function getNumConta (){
            return $this->numConta;
        }

        public function setTipo($tp){
            $this->tipo = $tp;
        }
        public function getTipo(){
            return $this->tipo;
        }

        public function setCliente($c){
            $this->cliente = $c;
        }
        public function getCliente(){
            return $this->cliente;
        }

        public function setSaldo($v){
            $this->saldo = $v;
        }
        public function getSaldo(){
            return $this->saldo;
        }

        public function setStatus($v){
            $this->status = $v;
        }
        public function getStatus(){
            return $this->status;
        }

        public function abrirConta($tp){
            $this->setTipo($tp);
            if($tp == "cc"){
                $this->setStatus(true);
                $this->setSaldo($this->getSaldo()+50);
            }else{
                if($tp == "cp"){
                    $this->setStatus(true);
                    $this->setSaldo($this->getSaldo()+150);
                }else{
                    echo "Tipo de conta invalido! Informe Conta Corrente (cc) ou Poupança (cp).</br></br>";
                }
            }
        }

        public function fecharConta(){
            if($this->getStatus()){
                if($this->getSaldo()==0){
                    $this->setStatus(false);
                    echo "Encerramento de conta realizado com sucesso! </br></br>";
                }else{
                    if($this->getSaldo()<0){
                        echo "Existem pendencias nesta conta, Impocivel feichá-la! </br></br>";
                    }else{
                        echo "Retire o saldo disponivel em conta para feichá-la!</br></br>";
                    }
                }
            }else{
                echo "Conta inativa!</br>";
            }
        }

        public function depositar($v){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo()+$v);
                echo "Deposito de R$ $v realizado com sucesso.</br>";
            }else{
                echo "Impossível depositar, esta conta está inativa!</br>";
            }

        }

        public function sacar($v){
            if($this->getStatus()){
                if($this->getSaldo()>=$v){
                    $this->setSaldo($this->getSaldo()-$v);
                    echo "Saque de R$$v realizado com sucesso, seu saldo é de R$",$this->getSaldo(),".</br>";
                }else{
                    echo "Saldo insuficiente para esta operação!</br>";
                }
            }else{
                echo "Conta inativa, impossível realizar operações!</br>";
            }
        }

        public function pgMensal(){
            if($this->getStatus()){
                if($this->getTipo()=="cc"){
                    $this->setSaldo($this->getSaldo()-12);
                    echo "Debito de mensalidade Conta Corrente R$12,00. </br>";
                }else{
                    $this->setSaldo($this->getSaldo()-20);
                    echo "Debito de mensalidade Conta Poupaça R$20,00. </br>";
                }
            }else{
                echo "Esta conta encontra-se inativa! </br>";
            }
        }
    }