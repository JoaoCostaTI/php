<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET["valor1"] ?? 0;
        $peso1 = $_GET["peso1"] ?? 0;
        $valor2 = $_GET["valor2"] ?? 0;
        $peso2 = $_GET["peso2"] ?? 0;
    ?>


    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">

            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">

            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">

            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h1>Calculo das médias</h1>
        <?php 
            $mediaSimples = ($valor1 + $valor2) / 2;
            $mediaSimplesF = number_format($mediaSimples, 2,",","");
    
            $mediaPonderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2) ;
            $mediaPonderadaF = number_format($mediaPonderada, 2,",","");

            echo"Analisando os números $valor1 e $valor2: <br>";
            echo"<ul>
            <li>
                A <strong>média aritmética simples</strong> entre os valores é igual a: $mediaSimplesF. 
            </li>
            <li>
                A <strong>média aritmética ponderada</strong> com pesos $peso1 e $peso2 é igual a: $mediaPonderadaF.
            </li>
            </ul>";

        ?>
    </section>
</body>
</html>