<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de numeros reais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        
        <?php 
          $numeroReal = $_GET["numeroReal"] ?? 0; 
          $inteira = floor($numeroReal);
          $fracionaria = $numeroReal - $inteira;
          $fracionariaF = number_format($fracionaria, 3, ',', '.');
          echo"
            Analisando o número " . number_format($numeroReal, 3 , ",", ".") . " informado pelo usuário: ";

          echo"
          <ul> 
            <li>
            A Parte inteira do número é: ".number_format($inteira, 0, ",",".")."
            </li>
            <li>
            A Parte fracionária é: ". number_format($fracionaria, 3, ",", ".")."
            </li>
          </ul>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        
    </main>
</body>
</html>