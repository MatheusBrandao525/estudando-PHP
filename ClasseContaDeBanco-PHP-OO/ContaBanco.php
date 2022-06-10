<?php

    class ContaBanco {

        public $numConta;
        protected $tipoConta;
        private $donoConta;
        private $saldo;
        private $status;

        public function __construct()
        {
            $this->getSaldo(0);
            $this->getStatus(false);

        }

        public function abirConta($t){
            $this->setTipoConta($t);
            $this->setStatus(true);

            if($t == 'CC'){
                $this->saldo = 50;
            }else if($t == 'CP'){
                $this->saldo = 150;
            }
        }

        public function fecharConta(){
            if($this->getSaldo() >0){
                echo 'Conta tem dinheiro!';
            } else if($this->getSaldo() <0){
                echo 'Conta em debito';
            }else {
                $this->status = false;
            }
        }

        public function depositar($vd){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $vd);
            }else {
                echo 'Impossivel depositar';
            }
        }

        public function sacar($vs){
            if($this->getStatus()){
                if($this->getSaldo() > $vs){
                    $this->getSaldo() - $vs;
                }
            }else {
                echo 'saldo inssuficiente';
            }
        }

        public function pagarMensal(){
            $vm = 0;
            if($this->tipo == "CC"){
                $vm =12;
            }else if($this->tipo == "CP"){
                $vm = 20;
            }

            if($this->getStatus()){
                if($this->saldo > $vm){
                    $this->setSaldo($this->getSaldo() - $vm);
                }else {
                    echo 'saldo inssuficiente';
                }
            }else {
                echo 'impossivel pagar';
            }
        }

        // metodos especiais Getters

            public function geNumConta(){
                return $this->numConta;
            }

            public function getTipoConta(){
                return $this->tipoConta;
            }

            public function getDonoConta(){
                return $this->numConta;
            }

            public function getSaldo(){
                return $this->saldo;
            }

            public function getStatus(){
                return $this->status;
            }


        // metodos especiais Setters

            public function setNumConta($n){
                $this->numConta = $n;
            }

            public function setTipoConta($t){
                $this->tipoConta = $t;
            }

            public function setDonoConta($d){
                $this->donoConta = $d;
            }

            public function setSaldo($s){
                $this->saldo = $s;
            }

            public function setStatus($st){
                $this->status = $st;
            }

    }