<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salminimo = 1509.00;
        $sal = $_GET["sal"] ?? $salminimo;
        
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$sal?>">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($salminimo, 2, ",", ".")?></strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>

        <?php 
            
            
            $quantSalM = floor($sal / $salminimo);
            $resto = $sal % $salminimo;

            echo"Quem recebe um salário de R$$sal ganha <strong>$quantSalM salários mínimos</strong> + R$$resto.";

            
        ?>
    </section>
</body>
</html>