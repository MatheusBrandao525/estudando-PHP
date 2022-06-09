<?php 


    // Criando a classe caneta...
    class Caneta {

        // criando os atributos da classe...
        public $tipo;
        public $cor;
        private $ponta;
        protected $tampada;


        // criando metodo getter...

        public function getTipo(){
            return $this->tipo;
        }

        public function getCor(){
            return $this->cor;
        }

        public function getPonta(){
            return $this->ponta;
        }

        public function getTampa(){
            return $this->tampada;
        }


        // criando metodo setter...
        public function setTipo($tp){
            $this->tipo = $tp;
        }

        public function setCor($c){
            $this->cor = $c;
        }

        public function setPonta($p){
            $this->ponta = $p;
        }
        
        public function setTampa($t){
            $this->tampada = $t;
        }



    }