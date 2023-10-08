<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>  
        <?php 
            $name = $_GET['name'] ?? 'Unknown';
        ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="name">Type ur name:</label>
                <input type="text" name="name" id="name">
                <input type="submit" value="Send">
        </form>
    </main>

        <section>
            <?php 
                print "<p>Nice to meet u $name!!</p>";
            ?>
        </section>
</body>
</html>