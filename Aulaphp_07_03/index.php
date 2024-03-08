<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VariavesPhP</title>
</head>
<body>
    <?php
    //iniciando variaveis
     if(isset($_GET['operacao']) && isset($_GET['x']) && isset($_GET['y'])){
     //iniciando calculos
     if($_GET['operacao']=="adicao"){
        echo $_GET['x']+$_GET['y'];
     }
     if($_GET['operacao']=="subtracao"){
        echo $_GET['x']-$_GET['y'];
     }
     if($_GET['operacao']=="multiplicacao"){
        echo $_GET['x']*$_GET['y'];
     }
     if($_GET['operacao']=="divisao"){
        echo $_GET['x']/$_GET['y'];
     }
   }
    ?>
</body>
</html>