<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if's</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
    
        <main>

            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

                <label for="n1">Number1</label>
                    <input type="number" name="n1" id="n1">

                <label for="n2">Number 2</label>
                    <input type="number" name="n2" id="n2">

                    <input type="submit" value="Result">

            </form>

        </main>

        <section>
            <?php 

            error_reporting(0);
                $number1 = $_GET['n1'] ?? 0;
                $number2 = $_GET['n2'] ?? 0;


                //i know it'd be better if i had used 'switch'
                    if ($number1 == null || $number2 == null) {

                        print 'Choose two numbers.';

                     } else if ($number1 < $number2) { 

                        print $number1 . ' has less value than ' . $number2;

                     } else if ($number1 > $number2) { 

                        print $number1 . ' has more value than ' . $number2;


                     } else {
                        print 'The numbers are the same.';
                     }
            ?>
        </section>

</body>
</html>


