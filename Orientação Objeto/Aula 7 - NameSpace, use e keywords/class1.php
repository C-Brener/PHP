<?php

    namespace sessao1; // chamando a pasta que sera usada
    use sessao2\classe2; // usando  o use para poder chamar a classe dentro da "pasta"

    class sessao{
        public function __construct(){
            new classe2(); // chamando a classe final
            echo "<br>";
            echo "Caique testando namespace";
        }

    }






?>