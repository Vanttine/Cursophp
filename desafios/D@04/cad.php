<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
            <h2>Conversor de Moedas</h2>
    <?php  

            //Configuracao para que o codigo continue funcionando com o dia atual
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            //Url capturado no bcb
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $real = $_GET["number"] ?? 0;
            $valoratual = $real / $cotacao;

            echo "<p>Seus <strong>" . numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $valoratual, "USD") . "</strong></p>";

            echo "<p>Calculo feito com a cotacao de <strong>$cotacao</strong>.</p>";
            

?>
                            <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>       
    </main>
</body>
</html>


