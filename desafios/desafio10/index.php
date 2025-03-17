<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nascimento = $_GET["nascimento"] ?? 0;
        $anoReferencia = $_GET["anoReferencia"] ?? 0;
        $anoResultado = ($anoReferencia - $nascimento);
    ?>


    <main>
        <h1>Calculando a sua idade</h1>
        <form action="index.php" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" value="<?= $nascimento?>">

            <label for="anoReferencia">Quer saber sua idade em que ano?</label>
            <input type="number" name="anoReferencia" id="anoReferencia" value="<?= $anoReferencia?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <?php 
           echo"Quem nasceu em $nascimento vai ter <strong>$anoResultado anos</strong> de idade em $anoReferencia!";
        ?>
    </section>
</body>
</html>