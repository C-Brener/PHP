<?php


class informacoes{

private $nome; // criando objetos 
private $idade; // Criando Objetos

    public function __construct($nome, $idade){ // criando metodo magico construct
        $this->nome=$nome; // chamando os objetos privados para dentro do metodo
        $this->idade=$idade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getNome(){
        return $this->nome;
    }
   
}





?>