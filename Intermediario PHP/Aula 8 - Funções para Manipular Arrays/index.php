<?php

$ar = array("Caique", "21 anos", "Programador");
$ar2 = array("Lorena", "22 anos", "Nutricionista");
$art = array_merge($ar, $ar2); // Tem a funçao de juntar os arrays que forma declarados dentro do parentese

print_r($art);
echo "<br>";




?>

<?php

$arr = array("azul", "amarelo");
$arr2 = array("amarelo", "azul");
$resultado = array_intersect_key($arr, $arr2); // FUnciona como uma junção matematica, pois pegara a interceição das duas variaves delcaradas e printara na tela

print_r($resultado);
echo"<br>";


?>

<?php

$ar3 = array("Caique", "21 anos", "Programador");

print_r(array_map("strtoupper", $ar3));


?>