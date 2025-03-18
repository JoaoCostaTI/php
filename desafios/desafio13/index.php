<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $saque = $_GET['saque']??0;
    ?>
    <main>
        <form action="index.php" method="get">
            <h1>Caixa Eletronico</h1>
            <label for="saque">Qual o valor deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" step="5.0" value="<?=$saque?>">

            <h5>*Notas disponiveis: R$100, R$50, R$10 e R$5</h5>

            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            $n100 = 100;
            $n50 = 50;
            $n10 = 10;
            $n5 = 5;

            $vSaque100 = floor($saque / $n100);
            $vSaque50 = floor($saque / $n50);
            $vSaque10 = floor($saque / $n10);
            $vSaque5 = floor($saque / $n5);

            echo"<h1>Saque de R$$saque realizado</h1>";
            echo"O Caixa eletrônico vai te entregar as seguintes notas: ";
            echo"
            <ul>
                <li>$vSaque100</li>
                <li>$vSaque50</li>
                <li>$vSaque10</li>
                <li>$vSaque5</li>
            </ul>";
        ?>
    </section>
</body>
</html>