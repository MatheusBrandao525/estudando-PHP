<?php 


    // Criando a classe caneta...
    class Caneta {

        // criando os atributos da classe...
        public $tipo;
        public $cor;
        private $ponta;
        protected $tampada;


        public function escrever(){
            // validando atributo da classe...
            if($this->tampada = true){
                echo 'Erro não posso escrever...';
            } else{
                echo 'Escrevendo... ';
            }
        }

        // criando métodos para a classe...
        // alterando o valor do atributo protegido através de um medoto publico...
        public function tampar(){
            $this->tampada == true;

        }



        // criando métodos para a classe...
        public function destampar(){
            echo 'está destampada!';
        }
    }