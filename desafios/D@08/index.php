<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
                <?php 
                        $num = $_GET['num'] ?? 64;

                        $rq = sqrt($num);
                        //$rq = $num ** (1/2)

                        $rc = $num ** (1/3);
                ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">

            <h2>
                Informe um Numero
            </h2>

            <label for="num">Numero</label>
            <input type="number" name="num" id="num">

            <input type="submit" value="Calcular">
        </form>
    </main>

            <section>
                <?php 
                    echo "<h2>Resultado Final</h2>";

                    print "<p>Analisando o numero $num, teremos:</p>";

                        echo "<ul><li>A raiz quadrada de ". number_format($rq, 2, ",", ".") .".</li>";
                        echo "<li>A raiz cubica de ". number_format($rc, 2, ",", ".") .".</li></ul>";
                ?>
            </section>

</body>
</html>