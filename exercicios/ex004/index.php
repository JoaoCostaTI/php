<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings em PHP</title>
</head>
<body>
    <h1>Testando tipos de strings</h1>

    <?php 
        // $nome = "Joao";
        // $apelido = "Fulero";
        // $sobrenome = "Costa";

        // echo "$nome \t\n \"$apelido\" \t\t $sobrenome";

        // const ESTADO = "MG";
        // echo "Moro no " . ESTADO;

        // echo "Estamos no ano: " . date('Y');

        $curso = "PHP";
        $ano = 2025;

        echo <<< 'TESTE'

            ESTOU ESTUDANDO $curso 

            no ano de $ano

            dEVERIA SER ACEITO TUDO conforme o formato aqui

        TESTE;

        
    ?>
</body>
</html>