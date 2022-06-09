<?php 


    // Criando a classe caneta...
    class Caneta {

        // criando os atributos da classe...
        public $tipo;
        public $cor;
        private $ponta;
        protected $tampada;


        // criando metodo construtor para atribuir valores aos atributos...
        public function __construct($tp, $c, $p, $t)
        {
            $this->tipo = $tp;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampada = $t;
        }

    }