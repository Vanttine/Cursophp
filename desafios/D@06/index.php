<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma Divisao</h1>
        <?php 
            $dividendo = $_GET['dividendo']?? 0;
            $divisor = $_GET['divisor'] ?? 1;
        ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">


            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="0">

            <label for="d2">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="1">

                <input type="submit" value="Dividir">
        </form>

    </main>

        <section id="result">
            <h2>Resultado</h2>

            <?php 

                $resto = $dividendo % $divisor;
                $quociente = (int)($dividendo / $divisor);

                    print "<p>Valores: $dividendo  / $divisor.</p>";

                print "<p>Quociente = $quociente</p>";

                print "<p>Resto = $resto</p>"

            ?>


        </section>
</body>
</html>