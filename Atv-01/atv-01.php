<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $valorhora = floatval($_POST['valorhora']);
            $horassemanais = floatval($_POST['horassemanais']);

            $salario = $valorhora * $horassemanais * 4.5;
        }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 01</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Salário Bruto Mensal</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> <!--Container-->
            <?php 
                if ($salario !== null): ?> <!--Previnir que o salário seja null, -->
                    <div class="mt-2 p-3 border bg-light rounded text-center"> <!--Container interno do resultado-->
                        <h4 class="text-success">Resultado</h4> <!--Titulo tamamnho 4, class para deixar titulo verde (padrão interno)-->
                        <p>Valor da hora: <strong>R$<?php echo number_format($valorhora, 2, ',', '.'); ?></strong></p> <!--Sempre abrir tag do php para utilizar os valores e formatação dos valores-->
                        <p>Horas semanais: <strong><?php echo $horassemanais; ?></strong></p> 
                        <p><strong>Salário bruto mensal: R$<?php echo number_format($salario, 2, ',', '.'); ?></strong></p> <!--Strong no lugar do <b> para boas práticas-->
                    </div>
            <?php endif; ?> <!--Caso houvesse uma forma de passar sem informar um valor, por o else para tratamento-->
            <div class="text-center"> <!--Alinhar botão no meio da tela. Botão para voltar a tela inicial-->
                <a href="atv-01.html" class="btn btn-secondary mt-2" style="background-color: lightskyblue; border-color: black; color: black;">Voltar</a>
            </div> 
        </div>
    </body>
</html>