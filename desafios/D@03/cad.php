<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
            <main>
                <?php 

            $real = $_GET["valor"];
            $dolar = $real / 4.94;

            echo "Seus R$" . number_format($real, 2, ",", ".") . " equivalem a U\$D" . number_format($dolar, 2, ",", ".");

            echo "<p>Codigo feito no dia 22/08/23 com a cotacao atual de 4.94</p>";
                 ?>
                <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>

            </main>
</body>
</html>