<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asignacion_de_edad</title>
</head>
<body>

</body>
</html>

<selection>

<br>
<form action="index.php" method="post">
    <input type="number" name="num1" placeholder="dugita su edad para verifificar si es mayor o menor">
    <input type="number" name="num2" placeholder="digite su altura en metros">
    <input type="submit" value="obtener resultado">




</form>

</section>
<section class="formato_texto fecha md_style">
    <?php
            if(!empty($_POST)) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            if ($num1 >= 18 && $num2 >=170) { 
            echo "puede ingresar a la montaña rusa";

            }elseif ($num1 < 18 && $num2 > 170) {
            echo "no puedes ingresar a la montaña rusa";
            
            }else{
                echo"porfavor ingrese los datos requeridos";
            }
        }
    ?>
</section>
