<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = intval($_POST['numero']);
    $quadra = intval($_POST['quadra']);

    $enderecoCompleto = ('Cidade: ' . $cidade . ' - Bairro: ' . $bairro . ' - Rua: ' . $rua . ' - Número: ' . $numero . ' - Quadra: ' . $quadra);
    }
?>  

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 06</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Concatenação e Formatação de Endereço Completo</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($enderecoCompleto <> null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> <!--Container interno do resultado-->
                        <h4 class="text-success">Resultado</h4> <!--Titulo tamamnho 4, class para deixar titulo verde (padrão interno)-->
                        <p>Endereco: <strong><?php echo $enderecoCompleto    ?></strong></p>
                    </div>
            <?php else: ?> <!-- Valores incorretos (possui letras) -->
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. Não utilize letras, apenas números e eles devem ser maiores do que zero </p>
                </div>
            <?php endif; ?>
            

            <div class="text-center">
                <a href="atv-06.html" class="btn btn-secondary mt-2" style="background-color: lightskyblue; border-color: black; color: black;">Voltar</a>
            </div> 
        </div>
    </body>
</html>