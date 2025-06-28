<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total = str_replace(',', '.', $_POST['total']); // Como estamos trabalhando com dinheiro
    $amigos = $_POST['amigos']; // Será reconhecido como letra(só aceita pontos), por conta das vírgulas;

    // Validar se os dois valores são numéricos antes de converter e calcular
    if (is_numeric($total) && is_numeric($amigos) && $amigos != 0 && floatval($total) != 0) {
        $total = floatval($total);
        $amigos = intval($amigos);
        $valorPorPessoa = $total / $amigos;
    } else {
        $valorPorPessoa = null; // utilizar para validação ao apresentarna
    }
}
?>  

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 14</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Divisão do Valor de Conta entre Amigos</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> <!--Container-->
            <?php 
                if ($valorPorPessoa <> null): ?> <!--Previnir que o salário seja null, -->
                    <div class="mt-2 p-3 border bg-light rounded text-center"> <!--Container interno do resultado-->
                        <h4 class="text-success">Resultado</h4> <!--Titulo tamamnho 4, class para deixar titulo verde (padrão interno)-->
                        <p>Valor em total: <strong>R$<?php echo number_format($total, 2, ',', '.'); ?></strong></p> <!--Sempre abrir tag do php para utilizar os valores e formatação dos valores-->
                        <p>Quantidade pessoas:  <strong><?php echo $amigos; ?></strong></p>
                        <p><strong>Valor individual: R$<?php echo number_format($valorPorPessoa, 2, ',', '.'); ?></strong></p> <!--Strong no lugar do <b> para boas práticas-->
                    </div>
            <?php else: ?> <!-- Valores incorretos (possui letras) -->
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. Não utilize letras, apenas números.</p>
                </div>
            <?php endif; ?>
            

            <div class="text-center">
                <a href="atv-14.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-02/Lista-02/Atv-15/atv-15.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>