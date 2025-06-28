<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $sobrenome = htmlspecialchars($_POST['sobrenome']);
    }
    else {
        $nome = null;
        $sobrenome = null;
    }
?>  

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 13</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Reorganização de Nome (Sobrenome, Nome)</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($nome <> null && $sobrenome <> null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> <!--Container interno do resultado-->
                        <h4 class="text-success">Resultado</h4> <!--Titulo tamamnho 4, class para deixar titulo verde (padrão interno)-->
                        <p>Nome: <strong><?php echo $nome ?></strong></p>
                        <p>Sobrenome: <strong><?php echo $sobrenome ?></strong></p>
                        <p><strong>Reorganizado: <?php echo $sobrenome . ', ' . $nome ?></strong></p>
                    </div>
            <?php else: ?> <!-- Valores incorretos (possui letras) -->
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. É necessário informar ao menos uma letra.</p>
                </div>
            <?php endif; ?>
            

            <div class="text-center">
                <a href="atv-13.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-02/Lista-02/Atv-14/atv-14.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>