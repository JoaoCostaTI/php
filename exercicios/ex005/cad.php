<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado no PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
           $nome = $_GET["nome"] ?? "desconhecido";
           $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
           
           echo "<p>Bem vindo(a) $nome $sobrenome!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar p/ Anterior</a></p>
    </main>
</body>
</html>