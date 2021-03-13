<?php

include("interface.php");


class testarei implements Teste{ // para chamar a interface é como chamamos uma classe herdeira, porem ao inves de usarmos o extendes usamos o implements
    public function testando($var1){ // quando chamamos a interface declaramos o metodo e o que ele fará.
        if($var1>=0){
            $TesteFinal = $var1+=5;
            echo "$TesteFinal";
        }
    }
}
$final = new testarei;
$final->testando(5);

?>