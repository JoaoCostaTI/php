<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        
        <?php 
            $min = 0;
            $max = 100;

            $valor = mt_rand($min,$max);

            echo"
                Gerando um número aleatório entre $min a $max...
                <br>
                O número gerado foi: <strong>$valor</strong>
            ";

        ?>

        <button onclick="javascript:document.location.reload()"> Gerar Outro</button>
        
    </main>
</body>
</html>