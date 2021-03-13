<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = 5;
    $n2 = 12;
    $resultado = $n1 * $n2 ;

    switch ($resultado){
        case 45:
            echo "o resultado é igual a $resultado";
            break;
        case 55: 
            echo "o resultado é igual a $resultado";
            break;
        default; // o valor default é para quando nenhum dos casos atendam o que se faz necessario.
            echo "Escolha um numero valido";
            break;

    }


    
    
    ?>
</body>
</html>