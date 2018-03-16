<?php
$mensagem = "";
if (isset($_GET["mensagem"]) && $_GET["mensagem"]=="nao"){
    $mensagem = "Serio que você digitou não?";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste de Conhecimento</title>
    </head>
    <body>
        <div><?= $mensagem ?></div>
        <fieldset>
            <legend>Teste de QI</legend>
            <form action="valida.php" method="post">
                <label>Eu sou bonito?</label>
                <br>
                <label>
                    <input type="radio" name="escolha" value="sim" checked>Sim
                </label>
                <label>
                    <input type="radio" name="escolha" value="nao">Não
                </label>
                <br>
                <input type="submit" value="Responder">
            </form>
        </fieldset>

    </body>
</html>
