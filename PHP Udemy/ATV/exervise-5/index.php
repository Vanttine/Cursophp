<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="name">Name:</label>
                <input type="text" name="name" id="name">

            <label for="age">Age:</label>
                <input type="number" name="age" id="age">

                <input type="submit" value="checar">
        </form>

    </main>

    <section>
         <?php 
         error_reporting(0);

            $name = $_GET['name'];
            $age = $_GET['age'];

            $intage = intval($age);

                if(is_string($name) && is_int($intage)){

                    echo "Your name is $name = String <br> Your age is $age = integer";

                }else{
                    echo "Type your name and age.";
                }
                
         ?>
    </section>
    
</body>
</html>