<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $idade = intval($_POST['idade']);
        $dias = $idade * 365;
    } else {
        $idade = null; // utilizar para validação ao apresentarna
    }    
?>  

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 04</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Cálculo de Tempo de Vida em Dias</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;">
            <?php 
                if ($idade <> null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center">
                        <h4 class="text-success">Resultado</h4>
                        <p>Idade: <strong><?php echo $idade ?></strong></p> 
                        <p><strong>Dias vivo: <?php echo $dias ?></strong></p>
                    </div>
            <?php else: ?> <!-- Valores incorretos (possui letras) -->
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. Não utilize letras, apenas números.</p>
                </div>
            <?php endif; ?>
            

            <div class="text-center">
                <a href="atv-04.html" class="btn btn-secondary mt-2" style="background-color: lightskyblue; border-color: black; color: black;">Voltar</a>
            </div> 
        </div>
    </body>
</html>