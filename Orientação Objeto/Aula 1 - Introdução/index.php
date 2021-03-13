<?php
 Class pessoa{ //Classe do objeto 

    private $nome = "Caique";
    private $altura = "1,80M";
    private $peso = "69KG";

    public function crescer(){
        echo "Estou crescendo<br>";
        $this->comer(); // Usado para chamar um metodo privado para ser executado dentro de um metodo publico
    }
    private function comer(){
        echo "Estou comendo";
    }

}

$pessoa = new pessoa; //chamando a classe criada para ser usada dentro da variavel.

$pessoa->crescer(); //executando um dos metodos da classe.



?>