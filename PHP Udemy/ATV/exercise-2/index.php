<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>

    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>

                <?php 
                error_reporting(0);
                   $name = $_GET['name'];

                   $age = $_GET['age'];

                   $career = $_GET['career'];

                ?>      
        <main>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">

                    <label for="name">Type ur name</label>
                        <input type="text" name="name" id="name">

                    <label for="age">Type ur age</label>
                        <input type="number" name="age" id="age" min="12" max="120">

                    <label for="career">What's your dream career?</label>
                        <input type="text" name="career" id="career">

                        <input type="submit" value="Check">
            </form>
        </main>
                <section>
    
                    <?php

                    if($name == null || $age == null || $career == null) {
    
                        print "please type your name, age and job.";
                        
                    }else {

                        print "Hello, $name! you are $age years old and want to do $career's job, thats awesome!!";
                    }
    
                    ?>
    
                </section>
</body>
</html>