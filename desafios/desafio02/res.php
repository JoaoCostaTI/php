<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        
        <?php 

            $valor = random_int(0,100);

            echo"
                Gerando um número aleatório entre 0 a 100...
                <br>
                O número gerado foi: <strong>$valor</strong>
            ";

        ?>

        <form action="res.php" method="get">    
            <input type="submit" value="Gerar Valor">
        </form>
        
    </main>
</body>
</html>