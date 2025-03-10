<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 

        //0x = hexadecimal
        //0b = binário
        //0 = octal
        //$num = 010;
        // echo "O valor da variavel é $num";

        // $v = "joao";
        // var_dump($v);

        // $num = 3e2; // é igual a 3 x 10 ELEVADO a 2
        // // echo "O valor é $num";
        // var_dump($num);

        // $num = (float)"950";
        // var_dump($num);

        // $c = true;
        // var_dump($c);
        // print "$c";

        // $vet = [6,2,9,5];
        // var_dump($vet);

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;

        var_dump($p);
        
    ?>
</body>
</html>