<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comprimento = str_replace(',', '.', $_POST['comprimento']);
    $largura = str_replace(',', '.', $_POST['largura']); // Como estamos trabalhando com dinheiro
    $altura = str_replace(',', '.', $_POST['altura']); // Será reconhecido como letra(só aceita pontos), por conta das vírgulas;

    // Validar se os dois valores são numéricos antes de converter e calcular
    if (is_numeric($largura) && is_numeric($altura) && floatval($altura) != 0 && floatval($largura) != 0) { // não deixa altura ser zero
        $volume = $comprimento * $largura * $altura;
    } else {
        $volume = null; // utilizar para validação ao apresentarna
    }
}
?>  

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 10</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Cálculo de Volume de uma Caixa Retangular</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($volume <> null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> <!--Container interno do resultado-->
                        <h4 class="text-success">Resultado</h4> <!--Titulo tamamnho 4, class para deixar titulo verde (padrão interno)-->
                        <p>Comprimento: <strong><?php echo number_format($comprimento, 2, ',', '.'); ?></strong></p>
                        <p>Largura: <strong><?php echo number_format($largura, 2, ',', '.'); ?></strong></p> <!--Sempre abrir tag do php para utilizar os valores e formatação dos valores-->
                        <p>Altura: <strong><?php echo number_format($altura, 2, ',', '.'); ?></strong></p>
                        <p><strong>Volume da caixa: <?php echo number_format($volume, 2, ',', '.'); ?> M³</strong></p> <!--Strong no lugar do <b> para boas práticas-->
                    </div>
            <?php else: ?> <!-- Valores incorretos (possui letras) -->
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. Não utilize letras, apenas números e eles devem ser maiores do que zero </p>
                </div>
            <?php endif; ?>
            

            <div class="text-center">
                <a href="atv-10.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-02/Lista-02/Atv-11/atv-11.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>