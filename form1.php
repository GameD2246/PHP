<?php //
$a = 0;
$b = 0;
if(isset($_POST["valor1"]) && isset($_POST["valor2"])){
    $a = $_POST["valor1"];
    $b = $_POST["valor2"];
}
$resultado = $a + $b;
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário 1</title>
    </head>
    <body>
        <form method="post">
            Valor 1: <input type="text" name="valor1">
            Valor 2: <input type="text" name="valor2">
            <input type="submit" value="Calcular">
        </form>
        <p style="font-weight: bold"> <?= "A soma $a com $b é $resultado"?></p>
        
    </body>
    
</html>