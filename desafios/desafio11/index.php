<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $produto = $_GET["produto"] ?? 0;
        $reajuste = $_GET["reajuste"] ?? 0;
        
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="index.php" method="get">
            <label for="produto">Preço do produto: (R$)</label>
            <input type="number" name="produto" id="produto" step="0.01" value="<?=$produto?>">

            <label for="reajuste">Qual será o percentual de reajuste? (%)</label>
            <input type="number" name="reajuste" id="reajuste" step="0.01" value="<?=$reajuste?>">

            <input type="submit" value="Reajustar">

        </form>
    </main>
    <section>
    <?php 
        $precoReajustado = ($produto * $reajuste) /100;
        
        $precoFinal = $produto + $precoReajustado;
        $precoFinalF = number_format($precoFinal, 2,",","");

        echo"<h1>Resultado do Reajuste</h1>";
        echo"O produto que custava R$$produto, com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>R$$$precoFinal</strong> a partir de agora.";
    ?>
    </section>
</body>
</html>