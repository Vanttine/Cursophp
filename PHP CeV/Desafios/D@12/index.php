<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator of Time</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>

            <?php 
                $seconds = $_REQUEST['seconds'] ?? 0;
            ?>

        <main>
                <h1>Time Calculator</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="seconds">What's the total number of seconds?</label>
                <input type="number" name="seconds" id="seconds">

                <input type="submit" value="Calculate">
        
            </form>

        </main>
    <section>
            <?php 
                $week = $seconds / 604800;
                $weekD = $seconds % 604800;

                $day = $weekD / 86400;
                $dayH = $weekD % 86400;

                $hour = $dayH / 3600;
                $hourM = $dayH % 3600;

                $minutes =  $hourM / 60;
                $minutesS = $hourM % 60;


                echo "<h2>Result</h2>";

                echo "<p>Analyzing the value u entered:<strong> ". number_format($seconds, 0, ".", ".") ." seconds</strong> are equal to: </p>";

                    print "<ul><li>".(int)$week." Week</li><li>".(int)$day." Days</li><li>".(int)$hour." Hours</li><li>".(int)$minutes." Minutes</li><li>".(int)$minutesS." Seconds</li></ul>";
            ?>
    </section>

</body>
</html>