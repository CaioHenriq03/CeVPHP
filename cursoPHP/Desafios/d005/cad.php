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
        <h1>Analisador de Números Reais</h1>
        <?php 
        $num = $_REQUEST["n"] ?? 0;

        echo"<p>Analisando o número <strong>" . number_format( $num,3, ".",".") ."</strong> informado pelo usuário:</p>";
        $int = (int) $num;
        $fra = $num - $int;
        
        echo "<ul><li> A parte inteira do número é <strong>". number_format($int, 0, ",", "."). "</strong></li>";
        echo"<li> A parte fracionária do número é <strong>". number_format($fra,3, ",",".");
        ?>
        
        
       
          <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
          </main>
          </body>
</html>