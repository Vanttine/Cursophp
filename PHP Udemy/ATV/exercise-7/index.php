<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
        <main>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            
                <label for="name">Type your name:</label>
                    <input type="text" name="name" id="name">

                <label for="age">Type your age:</label>
                    <input type="number" name="age" id="age" min="0" max="99">

                <input type="submit" value="Let's check">

            </form>
        </main>

        <section>

        

            <?php 
                error_reporting(0);

               

               $arrayasso = array(
                "name" => $_GET['name'],
                "age" => $_GET['age'] ?? 0
               );


                    $ArrAge = $arrayasso['age'];
                    $ArrName = $arrayasso['name'];
                
                    if($ArrAge == 0) {
                            print 'Type your name and age.';
                    }
                    else if($ArrAge < 18) {
                        echo "Hello $ArrName, you are minor.";
                    }else {
                        echo "Hello $ArrName, u are of legal age.";
                    }
                   

            ?>

        </section>
</body>
</html>