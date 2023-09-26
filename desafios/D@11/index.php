<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readjusting Prices</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>

        <?php 

                $price = $_GET['price'] ?? '0';

                $percentage = $_GET['readjust'] ?? '0';

                $percent = 100;
        ?>

        <main>
                    <h2>Readjust of Prices</h2>

            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">

                <label for="price">Price of the product (US$)</label>

                <input type="number" name="price" id="price" min="0.10" step="0.01" value="<?=$price?>">

                <label for="readjust">How much will be the readjustment? (<strong><span id="p">?</span>%</strong>)</label>
                <input type="range" name="readjust" id="readjust" min="0" max="100" step="1" oninput="valuechange()" value="<?=$percentage?>">

                <input type="submit" value="Readjust">
            </form>
        </main>

            <section>

                <?php 

                        $newpercent = $price * $percentage / $percent;  

                        $newprice = $price + $newpercent;

                        echo "<h2>Result of the readjustment</h2>";

                    print "<p>The product was costing <strong>US$". number_format($price, 2, ".", ",") ."</strong>, with the readjustment of <strong>$percentage% increase</strong> it will cost <strong>US$". number_format($newprice, 2, ".", ",") ."</strong> by now</p>";

                ?>

            </section>

            <script>

                    valuechange();

                function valuechange() {
                        p.innerText = readjust.value;
                }

            </script>
</body>
</html>