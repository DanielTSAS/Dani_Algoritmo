<?php
    $peso = 90.89;
    $altura = 1.70;

    if ($peso >= 50 && $altura<= 1.60) {
        echo 'Eres petizo';
    }else {
        echo 'Eres de gran estatura';
    }
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
<form action="imc.php"method="post>
<input type="number" name="peso" step="o.1" placholder="ingresa tu peso en kg"><br><br>
<input type="number" name="peso" step="o.1" placholder="ingresa tu altura en metros"><br><br>
<input type="submit" value="calcular IMC"> 
</div>
</form>


</body>
</html>