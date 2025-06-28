<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = str_replace(',', '.', $_POST['base']); // Como estamos trabalhando com dinheiro
    $taxa = str_replace(',', '.', $_POST['taxa']); // Será reconhecido como letra(só aceita pontos), por conta das vírgulas;

    // Validar se os dois valores são numéricos antes de converter e calcular
    if (is_numeric($base) && is_numeric($taxa) && floatval($taxa) != 0) { // não deixa taxa ser zero
        $base = floatval($base);
        $taxa = floatval($taxa);
        $final = $base + ($base * $taxa / 100);
    } else {
        $final = null; // utilizar para validação ao apresentarna
    }
}
?>  

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 05</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Cálculo de Preço Final com Acréscimo de Taxa</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($final <> null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> <!--Container interno do resultado-->
                        <h4 class="text-success">Resultado</h4> <!--Titulo tamamnho 4, class para deixar titulo verde (padrão interno)-->
                        <p>Valor base: <strong>R$<?php echo number_format($base, 2, ',', '.'); ?></strong></p> <!--Sempre abrir tag do php para utilizar os valores e formatação dos valores-->
                        <p>Taxa: <strong><?php echo number_format($taxa, 2, ',', '.'); ?>%</strong></p>
                        <p><strong>Valor final: R$<?php echo number_format($final, 2, ',', '.'); ?></strong></p> <!--Strong no lugar do <b> para boas práticas-->
                    </div>
            <?php else: ?> <!-- Valores incorretos (possui letras) -->
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. Não utilize letras, apenas números e eles devem ser maiores do que zero </p>
                </div>
            <?php endif; ?>
            

            <div class="text-center">
                <a href="atv-05.html" class="btn btn-secondary mt-2" style="background-color: lightskyblue; border-color: black; color: black;">Voltar</a>
            </div> 
        </div>
    </body>
</html>