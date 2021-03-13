<?php

include("construct.php");

$infos = new informacoes("Caique", 20);

echo $infos->getIdade();
echo "<br>";
echo $infos->getNome();




?>