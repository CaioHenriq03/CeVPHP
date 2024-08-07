<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1</h1>
        <?php 
         $cotação = 5.17;
         $real = $_REQUEST["din"] ?? 0;
         $dolar = $real / $cotação;
         $padrao = numfmt_create("pt-br",NumberFormatter::CURRENCY);
         
         echo "Seus ". numfmt_format_currency($padrao, $real, "BRL"). " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD</strong>");
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
    
</body>
</html>