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

        <h1>Resultado do Processamento</h1>

    </header>

    <main>

        <?php 
           $nome = $_GET["nome"] ?? "-Cade o nome-";
           $snome = $_GET["sobrenome"] ?? "-Cade o sobrenome-";
           $mnome = "Pereira";
                
                print "<p>Prazer em te conhecer, Mas teu nome nao e mais <strong>$nome $snome!</strong> a partir de agora sera $nome $mnome.</p>";

        ?>

    <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
    </main>
</body>
</html>