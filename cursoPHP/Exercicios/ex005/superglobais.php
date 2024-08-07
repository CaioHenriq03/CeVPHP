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
        <pre>
        <?php 
       echo"<h1>SuperGlobal GET</h1>";
       var_dump($_GET);

       echo "<h1>SuperGlobal POST</h1>";
       var_dump($_POST);

       echo "<h1>SuperGlobal REQUEST</h1>";
       var_dump($_REQUEST);

       echo "<h1>SuperGlobal COOKIE</h1>";
       var_dump($_COOKIE);

       echo "<h1>SuperGlobal SESSION</h1>";
       var_dump($_SESSION);

       echo "<h1>SuperGlobal ENV</h1>";
       var_dump($_ENV);
       //foreach (getenv()as $c => $v) {
       // echo "$c - $v<br>";
      // }
      echo "<h1>SuperGlobal SERVER</h1>";
       var_dump($_SERVER);

       echo "<h1>SuperGlobal GLOBALS</h1>";
       var_dump($GLOBALS);
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </pre>
    </main>
    
</body>
</html>