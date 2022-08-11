
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="./css/calculadora.css">
</head>
<body>
    <div class="container flex f-direction-c justify-content-center align-item-center p-5 f-gap-20">
    <h1>Calculadora "Básica"</h1>
        <form action="./index.php" class="box-item w-50 h-50 flex f-direction-c justify-content-center align-item-center f-gap-10 p-20" method="POST">
           <input type="number" name="number_1">
           <select name="accion" id="">
           <option value="">:</i></option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
            <option value="**">**</option>
            <option value="%">%</option>
           </select>
           <input type="number" name="number_2">   
           <input type="submit" value="Calcular" name="calcular">
           <input type="reset" value="Limpiar" name="limpiar">
           <input type="text" name="" id="" value="<?php include("./calcular.php"); ?>"  placeholder="Resultado" disabled>
           </form>
        </div>
</body>
</html>