<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma numeros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php   
            $n1 = $_GET["n1"] ?? 0;
            $n2 = $_GET["n2"] ?? 0;
            $res = $n1 + $n2; 

            
        ?>

    <main>
        <h1>Somador de Valores</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            

                <label for="n1">Numero 1</label>
                <input type="number" name="n1" id="n1" value="<?= $n1?>">

                <label for="n2">Numero 2</label>
                <input type="number" name="n2" id="n2" value="<?= $n2?>">

                <input type="submit" value="Calcular">

        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>

        <?php 
            $soma = $n1 + $n2;

            echo"<p>O resultado é: $soma</p>";
        ?>
    </section>

    
</body>
</html>