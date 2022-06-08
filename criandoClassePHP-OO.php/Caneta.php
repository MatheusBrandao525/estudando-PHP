<?php 


    // Criando a classe caneta...
    class Caneta {

        // criando os atributos da classe...
        var $tipo;
        var $cor;
        var $ponta;
        var $tampada;


        // criando métodos para a classe...
        function tampar(){
            echo 'está tampada!';
        }

        function escrever(){
            // validando atributo da classe...
            if($this->tampada == false){
                echo 'Escrevendo...';
            } else{
                echo 'erro..';
            }
        }

        // criando métodos para a classe...
        function destampar(){
            echo 'está destampada!';
        }
    }