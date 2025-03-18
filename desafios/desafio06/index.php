<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"]?? 0; 
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="index.php" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <?php
            $resultado = floor($dividendo / $divisor);
            $resto = $dividendo % $divisor;
            echo"Estrutura da divisão<br>";
            echo"Dividendo = $dividendo<br>";
            echo"Divisor = $divisor <br>";
            echo"Resultado = $resultado<br>";
            echo"Resto = $resto";
        ?>
    </section>
</body>
</html>