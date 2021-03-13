<?php
    include("teste.php");

  // echo teste::$name = "Caique";
   // echo "<br>";
    
    $nome = new teste();
    $nome->crescer("Caique");
    echo"<br>";
    $nome2 = new teste();
    $nome2->crescer("Lorena");


?>