<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
    $saque = $_REQUEST['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
        <label for="saque">Qual valor você deseja sacar? (R$)</label>
        <input type="number" name="saque" id="saque" value="<?=$saque?>" step="5">
        <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5</p>
        <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
    $resto = $saque;
    //Saque de R$100
    $tot100 = floor($resto / 100);
    $resto %= 100;
    // Saque de R$ 50
    $tot50 = floor($resto / 50);
    $resto %= 50;
    // Saque de R$10
    $tot10 = floor($resto / 10);
    $resto %= 10;
    // Saque de R$5
    $tot5 = floor($resto / 5);
    $resto %= 5;
    ?>
    <section>
    <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa Eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="100-reais.jpg" alt="" class="nota"> x<?=$tot100?></li>
            <li><img src="50-reais.jpg" alt="" class="nota"> x<?=$tot50?> </li>
            <li><img src="10-reais.jpg" alt="" class="nota"> x<?=$tot10?> </li>
            <li><img src="5-reais.jpg" alt="" class="nota"> x<?=$tot5?> </li>
        </ul>
    </section>
</body>
</html>