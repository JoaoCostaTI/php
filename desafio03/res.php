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
        <h1>Conversor de Moedas V1.0</h1>
    </header>
    <main>
        <?php 
            $url = "https://api.exchangerate-api.com/v4/latest/USD";
            $response = file_get_contents($url);
            $data = json_decode($response, true);


            $rs = $_GET["rs"];
            $cotacao = $data['rates']['BRL'];

            $dol = $rs / $cotacao;

            $dolares_formatado = number_format($dol, 2, '.','');
            echo"
                Os seus R$$rs equivalem a <strong>US$$dolares_formatado</strong>
                <br>
                Cotação fixa de R$$cotacao informada diretamente no código.
            ";

        ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        
    </main>
</body>
</html>