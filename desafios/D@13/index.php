<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Machine</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>

    <?php 
        $cash = $_GET['cash'] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    
        <h1>Cash Machine</h1>

        
        <label for="cash">What amount would you like to withdraw?</label>
            <input type="number" name="cash" id="cash" value="<?=$cash?>" step="5">

            <input type="submit" value="Withdraw">

        </form>
    </main>

    <section>
        <?php 

            $hundred = floor($cash / 100);
            $hundredF = $hundred % 100;

            $fifty = floor($hundredF / 50);
            $fiftyT = $hundredF % 50;

            $ten = floor($fiftyT / 10);
            $tenF = $fiftyT % 10;

            $five = floor($tenF / 5);


        ?>

        <ul>
            <li>How many 100 = <?=$hundred?></li>
            <li>How many 50 = <?=$fifty?></li>
            <li>How many 10 = <?=$ten?></li>
            <li>How many 5 = <?=$five?></li>
        </ul>

    </section>


</body>
</html>