<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //usando metodo GET, o metodo get retona os valores enviados na barra de endereçamento, sendo assim se torna perigoso para o uso de desenvolvimento
        /*$nome = @$_GET["nome"];
        $email = @$_GET["email"];
        echo "$nome <br> $email";
        */

        if(isset($_POST['acao'])){ //Serve para setar a ação desejada dentro do metodo, ação essa que fopi definida no html
            $nome = @$_POST["nome"]; // O metoodo post é o mais seguro pois nao retorna valores algum na barra de endereçamento do site, o que o torna bem mais dinamico e seguro de trabalhar
            $email = @$_POST["email"];
            echo "$nome <br> $email";
        }

    ?>
    <form method="post"> <!-- O metodo é de exctrema importância na hora de ser definido, pois sem ele o codigo nao funcionara corretamente por conta do seu parametro definido seja ele get ou post-->
    <input type="text" name="nome"/>
    <input type="text" name="email"/>
    <input type="submit" name="acao" value="Autenticar"/>

    
    </form>
</body>
</html>