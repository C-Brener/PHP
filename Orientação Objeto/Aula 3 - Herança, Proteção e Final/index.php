<?php

class pai{ // criando a classe
    public $name0 = "Caique"; // Criando o primeiro objeto

    public function classeHerdada($var){ // criando o metodo para ser usado
        switch ($var){
            case "Caique":
                echo "$var vai fazer o jogo virar";
                break;
            default:
            echo "Por favor não desista de si mesmo";
        }
            
    }
}
class filha extends pai{
 public function metodo2($name){
 }
}

$nome = new filha;
$nome->classeHerdada("Caique");




?>