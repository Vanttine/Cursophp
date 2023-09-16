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

            $real = $_GET["valor"] ?? 0;
            $dolar = $real / 4.94;
            $padrao = numfmt_create("us", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

            echo "<p>Codigo feito no dia 22/08/23 com a cotacao atual de 4.94</p>";
                 ?>
                <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
                
            </main>
        </body>
</html>