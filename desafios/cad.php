<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Resultado Final</h1>
    </header>

    <main>
        
            <?php
                        $number = $_GET["number_php"];
                        print "<p>Voce escolheu o numero $number..</p>";
                        print "<p>O Antecessor " . $number - 1 . ".</p>";
                        print "<p>O Sucessor ". $number + 1 . ".</p>";   
            ?>

                    <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
    </main>


</body>
</html>