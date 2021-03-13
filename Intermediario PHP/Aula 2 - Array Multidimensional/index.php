<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $test = array(
         array("Volvo", "99"),
         array("Ferrari")
     );
     //     echo $test[1][0];
     
     foreach($test[0] as $key => $value){
         echo "$key";
         echo " ";
         echo "$value";
         echo"</br>";

     }
    ?>
</body>
</html>