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
    $salario = $_REQUEST['s1'] ?? $min;
    $min =  1_412.00;
    ?>
    <main>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
        <label for="s1">Salário (R$)</label>
        <input type="number" name="s1" id="s1" value="<?=$s1?>" step="0.01">
        <p>Considerando o salário mínimo de <strong>R$<?=number_format($min, 2, ",", ".")?></strong></p>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        $tot = intdiv($salario, $min);
        $dif = $salario % $min;
        echo "<p>Quem recebe um salário de R\$". number_format($salario, 2,",", ".").", Ganha <strong> $tot salários mínimos</strong> + R\$ ". number_format($dif, 2, ",", ".").".</p>";
         ?>
    </section>
</body>
</html>