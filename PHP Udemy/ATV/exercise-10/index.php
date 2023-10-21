<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Calculator</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>

    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">

            <label for="number1">Number:</label>
                <input type="number" name="number1" id="numebr1">

            <label for="number2">Number:</label>
                <input type="number" name="number2" id="number2">

                <input type="submit" value="Calc">

        </form>
    </main>


    <section>

        <?php 
        error_reporting(0);
            $n1 = $_GET['number1'] ?? 0;
            $n2 = $_GET['number2'] ?? 0;
            
               $plus = $n1 + $n2;
               $minus = $n1 - $n2;
               $multiplication = $n2 / $n1;

            
                echo '<p>You chose the numbers '. $n1 . ' and '. $n2 .'.</br></p>';

                echo '<p>Minus: '. $n1 .' - '. $n2 .' = '. $minus .'.<br></p>';

                echo '<p>Plus: '. $n1 .' + '. $n2 .' = '. $plus .'.<br></p>';

                echo '<p>Multiplication: '. $n1 .' / '. $n2 .' = '. $multiplication .'.</p>';
           
        ?>

    </section>

</body>
</html>