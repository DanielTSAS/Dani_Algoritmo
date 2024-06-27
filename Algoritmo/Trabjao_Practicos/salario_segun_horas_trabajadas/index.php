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

</selection>
<br>
<form action="index.php" method="post">
    <h1>valor de hora trabajadas si es menor a 40 = $5500 la hora <h1>
        <h1>valor por hora trabajadas si es mayor a 41 = $8250 la hora<h1>
    <input type="number type="num1" placeholder="ingrese las horas trabajadas">
    <input type="submit" value="obtener resultado">

</form>
</section>
<selection class="formato_texto fecha md_style">

<?php

if(!empty($_POST)){
    $num1=$_POST['num1'];
 echo "NÚMERO: " . $num1;
    if($num1<=40){
        echo"usted trabajo " . $num1 . " horas y le corresponde un salario de " . $num1*5500;
    }elseif($num1>40){
        echo"usted trabajo " . $num1 . " horas y le corresponde un salario de " . $num1*8250; 
    }else{
        echo"porfavor ingrese los datos requeridos";
    }
}
?>
<section>
