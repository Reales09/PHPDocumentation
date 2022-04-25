<?php

if($_POST){
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    //suma
    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $multiplicacion = $valorA * $valorB;
    $division = $valorA / $valorB;

    echo "El resultado de los valores ".$valorA." y ".$valorB."<br/>";
    echo "El resultado de la suma es: ".$suma."<br/>";
    echo " El resultado de la resta es: ".$resta."<br/>";
    echo " El resultado de la multiplicacion es: ".$multiplicacion."<br/>";
    echo " El resultado de la division es: ".$division."<br/>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>

<form action="ejercicio8.php" method="post">

Valor A:
<input type="text" name="valorA" id="">
<br/>
Valor B:
<input type="text" name="valorB" id="">
<br/>
<input type="submit" value="Calcular">

</form>
    
</body>
</html>