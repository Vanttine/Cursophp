<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Tipos Primitivos em Php</title>
</head>
<body>
    <h1>Testando os Tipos Primitivos</h1>

        <?php 
// 0x = Hexadecimal
// 0b = Binario
// 0 = Octal
// $num = 0x1A
// echo "O valor e de $num";

        $v = 300;
        var_dump($v); //throws all inf about the variable 

        $num = (integer)3e2; //3x10(2)
        echo "O valor e $num";
        var_dump($num);

        $num2x2 = (integer) "950";
        echo "String? or integer?"; //in this case would be a STRING, but i did the coercion to a int number

        $vet = [3.6, 5, true, 2, "Gabriel"];
        var_dump($vet);

        class pessoa {
            private string $name;
        }

        $p = new Pessoa;
        var_dump($p);
        ?>
        
</body>
</html>