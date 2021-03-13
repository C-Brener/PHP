<?php

abstract class filha{ // o abstract é uum classe que só pode ser herdada e nao tem nenhuma outra função diferente dessa mesma.

    public $var1 = "Caique";

    public function testeUm($var1){
        if ($var1 = "Caique"){
            for($cont = 0; $cont!=10 ;$cont++){
                echo "$var1 vai ser o melhor programador do mundo";
                echo "<br>";
            }
        }
    }
}
class pai extends filha{
    public $var2 = "Brener";
}

$var1 = new pai;
$var1->testeUm("Caique");


?>