<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

        $V1 = $_GET['v1'] ?? 00;
        $V2 = $_GET['v2'] ?? 1;
    ?>
        <main>
            
        <h1>Somando Valores</h1>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

                <label for="v1">Valor 1</label>
                <input type="number" name="v1" id="v1" value="<?=$V1?>">

                <label for="v2">Valor 2</label>
                <input type="number" name="v2" id="v2" value="<?=$V2?>">

                <input type="submit" value="Somar">
            </form>

        </main>

        <section>
            <h2>Resultado</h2>

            <?php 

                    $Vs = $V1 + $V2;

                echo "<p>O resultado da soma entre $V1 e $V2 sera $Vs</p>";
            
            ?>

        </section>

</body>
</html>