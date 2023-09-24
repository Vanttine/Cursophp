<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
    <title>Calc Idade</title>
</head>
<body>

            <?php 
                //$ano = date("Y");
            ?>

    <main>
        
            <form action="" method="get">
                <h2>Calculando a sua idade</h2>
        
                <label for="year">Em qual ano voce nasceu?</label>
                <input type="number" name="year" id="year" min="1650">
        
                <label for="age">Quer saber sua idade em que ano? (Atualmente estamos em <?=/*$ano*/date("Y")?>)</label>
                <input type="number" name="age" id="age" min="1650">

                <input type="submit" value="Calcular">
            </form>
        
    </main>

            <section>

                <?php 
                    $YEAR = $_GET['year'] ?? 2000;
                    $AGE = $_GET['age'] ?? 2023;
                    

                    $ageclc = $YEAR - $AGE;

                        //Este if serve para que caso o numero seja negativo ele fique positivo.
                    if ($ageclc < 0) $ageclc = - $ageclc;

                        //Este if, por exemplo caso seja escolhido o ano nascimento como 2023 e a idade desejada em 2004. 
                    if ($YEAR >= $AGE) {
                        
                        $ageclc = "ERROR[405]= '<strong><em>O ANO DE NASCIMENTO NAO PODE SER MAIOR QUE O ANO DESEJADO</em></strong>'";

                        echo "<h2>ERROR</h2>";

                            print "$ageclc";
                            
                    } 
                        //Este if e para caso o clinte escolha por exemplo ao nasci 2004 e idade desejada em 2017, assim apresentara uma resposta conjugada no passado.
                    elseif ($AGE < date("Y")){

                        echo "<h2>Resultado</h2>";

                            print "<p>Quem nasceu em $YEAR tinha <strong>$ageclc anos</strong> em $AGE.</p>";
                            

                    } 
                        //Por fim, este apresenta o resultado final esperado corretamente.
                    else {
                        echo "<h2>Resultado</h2>";

                            print "<p>Quem nasceu em ". number_format($YEAR, 0, ",", ".") ." vai ter <strong>". number_format($ageclc, 0 ,",", ".") ." anos</strong> em ". number_format($AGE, 0, ",", ".") .".</p>";
                    }
       
                ?>

            </section>
</body>
</html>