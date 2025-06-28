<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salario = str_replace(',', '.', $_POST['salario']); // Como estamos trabalhando com dinheiro, troca virgula por ponto.
    $percentual = str_replace(',', '.', $_POST['percentual']); // Será reconhecido como letra(só aceita pontos), por conta das vírgulas;

    // Validar se os dois valores são numéricos antes de converter e calcular
    if (is_numeric($salario) && is_numeric($percentual) && floatval($percentual) != 0 && floatval($salario != 0)) { // não permite valores zerados
        $salario = floatval($salario);
        $percentual = floatval($percentual);
        $novoSalario = $salario + ($salario * $percentual / 100);
    } else {
        $novoSalario = null; // utilizar para validação ao apresentarna
    }
}
?>  

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 07</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Cálculo de Preço novoSalario com Acréscimo de percentual</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($novoSalario <> null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> <!--Container interno do resultado-->
                        <h4 class="text-success">Resultado</h4> <!--Titulo tamamnho 4, class para deixar titulo verde (padrão interno)-->
                        <p>Salário atual: <strong>R$<?php echo number_format($salario, 2, ',', '.'); ?></strong></p> <!--Sempre abrir tag do php para utilizar os valores e formatação dos valores-->
                        <p>Percentual de reajuste: <strong><?php echo number_format($percentual, 2, ',', '.'); ?>%</strong></p>
                        <p><strong>Novo salário : R$<?php echo number_format($novoSalario, 2, ',', '.'); ?></strong></p> <!--Strong no lugar do <b> para boas práticas-->
                    </div>
            <?php else: ?> <!-- Valores incorretos (possui letras) -->
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. Não utilize letras, apenas números e eles devem ser maiores do que zero </p>
                </div>
            <?php endif; ?>
            

            <div class="text-center">
                <a href="atv-07.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-02/Lista-02/Atv-08/atv-08.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>