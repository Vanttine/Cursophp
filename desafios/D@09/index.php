<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias Aritimeticas e Ponderadas</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>

        <?php 

                $value1 = $_GET['value1'] ?? 1;
                $value2 = $_GET['value2'] ?? 1;

                $peso1 = $_GET['peso1'] ?? 1;
                $peso2 = $_GET['peso2'] ?? 1;

        ?>

    <main>
        
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        
            <label for="value1">Valor 1</label>
            <input type="number" name="value1" id="#">
            
            <label for="peso1">Peso 1</label>
            <input type="number" name="peso1" id="#">
            
            <label for="value2">Valor 2</label>
            <input type="number" name="value2" id="#">
            
            <label for="peso2">Peso 2</label>
            <input type="number" name="peso2" id="#">
            
                <input type="submit" value="Calcular">
            
        </form>
    </main>

    <section>
        <?php

         //Calculo da media simples 

            $mediaC = $value1 + $value2;

            $mediaS = ($mediaC / 2);
           

         //Calculo da media ponderada

                //Multiplicando o primeiro valor com o primeiro peso.
         $valorpeso1 = $value1 * $peso1;

                //Multiplicando o segundo valor com o segundo peso.
         $valorpeso2 = $value2 * $peso2;

                //Somando as duas $ acima.
         $vpesos = $valorpeso1 + $valorpeso2;

                //Somando os dois pesos para fazer a divisao final.
         $pesos = $peso1 + $peso2;

                //$vtotal valendo a soma dos valores com a divisao dos pesos.
         $vtotal = $vpesos / $pesos;

        
         echo "<h2>Calculo das Medias</h2>";

         echo "<p>Analisando os valores $value1 e $value2:</p>";

            print "<ul><li><p>A <strong>Media Aritimetica Simples</strong> entre os valores e igual a ". number_format($mediaS, 2, ",", ".") ."</p></li>";

            print "<li><p>A <strong>Media Aritimetica Ponderada</strong> com pesos $peso1 e $peso2 e igual a ". number_format($vtotal, 2, ",", ".") ."</p></li></ul>"
        ?>
    </section>

</body>
</html>