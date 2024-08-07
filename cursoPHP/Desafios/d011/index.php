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
    $preco = $_REQUEST['preco'] ?? 0;
    $reaj = $_REQUEST['reaj'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
        <label for="preco">Preço do Produto</label>
        <input type="number" name="preco" id="preco" value="<?=$preco?>" min="0.10" step="0.01">

        <label for="reaj">Qual será o percentual de reajuste?( <strong><span id="p">?</span>%</strong> )</label>
        <input type="range" name="reaj" id="reaj" min="0" max="100" step="1"  value="<?=$reaj?>" onclick="mudaValor()">
        <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
    <?php
    $aumento = $preco * $reaj / 100;
    $novo = $preco + $aumento;
    ?>

    <h2>Reajuste Abaixo</h2>
        <p>O produto que custava R$ <?=number_format($preco, 2, ",", ".")?>, com <strong><?=$reaj?>% de aumento</strong> vai passar a custar <strong><?=number_format($novo, 2, ",", ".")?></strong> a partir de agora. </p>

    
    </section>
    <script>
        mudaValor()
        function mudaValor(){
            p.innerText =   reaj.value;
        }
    </script>
</body>
</html>