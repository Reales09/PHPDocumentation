<?php

if($_POST){

    $boton=$_POST['btnValor'];

    switch ($boton) {
            case 1:
            echo "presionó el valor 1";
            break;

            case 2:
            echo "presionó el valor 2";
            break;        
            case 3:
            echo "presionó el valor 3";
            break;    
        default:
            # code...
            break;
    }



}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>

<form action="ejercicio13.php" method="post">

<input type="submit" name="btnValor" value="1">
<br/>
<input type="submit" name="btnValor" value="2">
<br/>
<input type="submit" name="btnValor" value="3">

</form>
    
</body>
</html>