<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos = $_GET["segundos"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="index.php" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?= $segundos?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            $semanas = floor($segundos / (60*60*24*7));
            $dias = floor(($segundos % (60*60*24*7)) / (60*60*24));
            $horas = floor(($segundos % (60*60*24)) / (60*60));
            $minutos = floor(($segundos % (60*60))/60);
            $segundosf = floor($segundos % 60);

            echo"
            <h1>Totalizando tudo</h1>
            <p>Analisando o valor que você digitou, <strong>$segundos segundos</strong> equivalem a um total de: </p>
            <ul>
                <li>$semanas semanas</li>
                <li>$dias dias</li>
                <li>$horas horas</li>
                <li>$minutos minutos</li>
                <li>$segundosf segundos</li>
            </ul>";
        ?>
    </section>
</body>
</html>