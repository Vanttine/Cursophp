<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Cursophp/CSS/style.css">
</head>
<body>
    <main>
        <h1>Analisador de Numero Real</h1>

        <?php 

            $num = $_GET["number"] ?? 0;
        
            echo "<p>Analisando o numero <strong>". number_format($num, 3, ",", ".") ." </strong>enviado pelo usuario.</p>";

            $int = (int)$num;
            $fra = $num - $int;

            echo "<ul><li>A parte inteira e ". number_format($int, 0, ",", ".") ."</li><li>A parte fracionaria e ". number_format($fra, 3, ",", ".") ."</li></ul>";
        ?>

        <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a> 

    </main>
</body>
</html>