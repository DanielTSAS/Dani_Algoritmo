<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<section>

<br>
<form action="index.php" method="post">
    <input type="text"  name="nombre" placeholder="digite nombre del empleado">
    <input type="number" name="num1" placeholder="digite el sueldo para saver si corresponde un aumento">
    <input type="number" name="num2" placeholder="digite años trabajados para saver si corresponde a vacaciones pagas">
    <input type="submit" value="obtener resultado">

</form>
</section>

<section class="formato_texto fecha md_style">

<?php

if(!empty($_POST)) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    if($num1 >= 320000 && $num1 <= 500.000 ){
        if($num2 >= 10){
        echo "su nuevo sueldo con aumento del 5% es de: " . $num1*0.05;
        echo "se merece vacaciones pagas";
    }
}elseif($num1<320000 && $num2<10){
        
        echo"no merece vacaciones pagas";
        echo"su nuevo sueldo con aumento del 8% es de: " . $num1*0.08; 
    }else {
    echo"porfavos ingrese los datos requeridos";
    } 
    }    
?>
</section>



        
