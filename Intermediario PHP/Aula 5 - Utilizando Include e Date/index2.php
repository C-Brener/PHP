<?php
    
    date_default_timezone_set("America/Bahia"); // definição do fuso horário no qual o programa será executado, pois deta forma configura para o horario local 
    $data = date("d/m/Y H:i:s", time()+(60*20)); // A funçao date é uma função definida pelo proprio php para declarar a data e hora  do local onde esta sendo executado;
    
    echo "$data";


    
?>