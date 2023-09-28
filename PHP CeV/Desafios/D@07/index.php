<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link rel="stylesheet" href="../../CSS/style.css">
    
</head>
<body>
    <?php 

           $salario = $_GET['salario'] ?? 1350;
           $salariomin = 1350;

            $xsalario = intdiv($salario, $salariomin);
            $ysalario = $salario % $salariomin;

    ?>
    <main>
        
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="salario">Qual o seu salario?</label>
                <input type="number" name="salario" id="salario" min="1350" placeholder="ex: '1350'" step="0.01">
                <p>Constando o salario minimo de <?=number_format($salariomin, 2, ",", ".")?>.</p>
                <input type="submit" value="Confirmar">
        </form>
    </main>

    <section>
        <?php 
                   

                print "<h2>Resultado Final</h2>";

                print "<p>Quem recebe R$" . number_format($salario, 2, ",", ".") . " recebe $xsalario salario(s) minimo(s) + R$". number_format($ysalario, 2, ",", ".").".</p>";
        ?>
    </section>


</body>
</html>