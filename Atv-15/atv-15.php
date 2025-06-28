<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $valorVenda = str_replace(',', '.', ($_POST['valorVenda']));

        if (is_numeric($valorVenda) && floatval($valorVenda) != 0) {
            $valorVenda = floatval($valorVenda);
        } 
        else 
        {
            $valorVenda = null; // utilizar para validação ao apresentarna
        }
}
    else {
        $nome = null;
        $valorVenda = null;
    }
?>  

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 15</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Apresentação de um Produto com Formatação de Preço</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($nome <> null && $valorVenda <> null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> <!--Container interno do resultado-->
                        <h4 class="text-success">Resultado</h4> <!--Titulo tamamnho 4, class para deixar titulo verde (padrão interno)-->
                        <p>Nome do protudo: <strong><?php echo $nome ?></strong></p>
                        <p>Valor de venda: <strong>R$<?php echo number_format($valorVenda, 2, ',', '.'); ?></strong></p> <!-- já foi formatado ao receber a variável do html -->
                        <p><strong>Resposta: <?php echo $nome . ', R$' . $valorVenda ?></strong></p>
                    </div>
            <?php else: ?> <!-- Valores incorretos (possui letras) -->
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. É necessário informar ao menos uma letra.</p>
                </div>
            <?php endif; ?>
            

            <div class="text-center">
                <a href="atv-15.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-02/Lista-02/Atv-01/atv-01.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>