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
        $divisor = $_GET["divisor"]?? 1; 
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="index.php" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <?php
            $resultado = floor($dividendo / $divisor);
            $resto = $dividendo % $divisor;
            echo"<h2>Estrutura da divisão</h2>";
        
            //echo"
           //     <ul>
            //        <li>Dividendo: $dividendo</li>
             //       <li>Divisor: $divisor</li>
              //      <li>Quociente: $resultado</li>
           //         <li>Resto: $resto</li>
            //    </ul>
           // ";


            //echo"Dividendo = $dividendo<br>";
            //echo"Divisor = $divisor <br>";
            //echo"Resultado = $resultado<br>";
            //echo"Resto = $resto";
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
        </table>
    </section>
</body>
</html>