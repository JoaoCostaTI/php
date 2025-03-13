<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="index.php" method="get">
            <h1>Informe um número</h1>
            <label for="num">Número</label>
            <input type="number" name="num" id="num">

            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <?php 
            $num = $_GET["num"] ?? 0;
            $sq = sqrt($num) ?? 0;
            $sc = $num ** (1/3) ?? 0;

            $sqf = number_format($sq, 3,",","");
            $scf = number_format($sc, 3,",","");

            echo"<h1>Resultado Final</h1>";
            echo"
                <p>Analisando o <strong>número $num,</strong> temos:</p>
            <ul>
                <li>A sua raiz quadrada é: <strong>$sqf</strong></li>
                <li>A sua raiz Cúbica é: <strong>$scf</strong></li>
            </ul>";
        ?>
    </section>
</body>
</html>