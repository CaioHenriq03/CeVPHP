<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        $n = $_GET["nome"] ?? "sem nome" ;
        $s = $_GET["sobrenome"] ?? "desconhecido";
        echo "<p>É um prazer,! <strong>$n $s</strong> ter você no meu site!";
           // var_dump($_REQUEST); // Junção de $_GET $_POST $_COOKIE
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
    
</body>
</html>