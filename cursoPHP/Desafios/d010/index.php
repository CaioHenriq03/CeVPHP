<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $atual = date("Y");
    $nasc = $_REQUEST['d1'] ?? '2000';
    $ano = $_REQUEST['d2'] ?? $atual;
    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
        <label for="d1">Em que ano você nasceu?</label>
        <input type="number" name="d1" id="d1" value="<?=$d1?>" min="1900" max="<?=$atual?>">
        <label for="d2">Quer saber sua idade em qual ano?(atualmente estamos em <strong><?=$atual?></strong>)</label>
        <input type="number" name="d2" id="d2" value="<?=$d2?>" min="1900">
        <input type="submit" value="Qual será sua idade?">
        </form>
    </main>
    <section>
    <?php
        $idade = $ano - $nasc;
         ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai  ter <strong><?=$idade?> anos</strong> em <?=$ano?>!</p>
    </section>
</body>
</html>