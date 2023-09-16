<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../../Cursophp/CSS/style.css">
</head>
<body>
    <main>
        <?php
                //rand() = 1951 - Linear Congrential Generator
                //mt_rand() = 1997 - Mersenne Twister
                //A partir do PHP 7.1, o rand() e um simples apontamento para o mt_rand()
                // random_int() gera numeros aleatorios criptograficamente seguros([porem e MAIS LENTO, entao usar somente quando realmente necessario])

            $n1 = $_GET["number1"];

            $n2 = $_GET["number2"];

                $rn = rand($n1, $n2);
                
              print "<h1>Aleatorizando...</h1>";
                print "<p>Gerando numero entre $n1 e $n2<p/>";
                    print "<strong>$rn</strong>";
                ?>
    </main>
</body>
</html>