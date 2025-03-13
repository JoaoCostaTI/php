<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Informe seu Salário</h1>
        <form action="./index.php" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h1>Resultado Final</h1>

        <?php 
            $sal = $_GET["sal"] ?? 0;
            $salminimo = 1380;
            $quantSalM = floor($sal / $salminimo);
            $resto = $sal % $salminimo;

            echo"Quem recebe um salário de R$$sal ganha <strong>$quantSalM salários mínimos</strong> + R$$resto.";
        ?>
    </section>
</body>
</html>