<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $dia = intval($_POST['dia']);
        $mes = intval($_POST['mes']);
        $ano = intval($_POST['ano']);
        

        if (checkdate($mes, $dia, $ano)) { // Verifica se a data é válida
            $data = $mes . '/' . $dia . '/' . $ano; // colocar no padrão inglês, para depois formatar
            $data = date('d/m/Y', strtotime($data)); // Formata a data para o padrão brasileiro. Ex: 01/01/2023 e não 1/1/2023
        } else {
            $data = null; 
        }
    } else {
        $data = null; // utilizar para validação ao apresentarna
    }    
?>  

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 12</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Formatar Data Completa</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;">
            <?php 
                if ($data <> null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center">
                        <h4 class="text-success">Resultado</h4>
                        <p><strong>Data: <?php echo $data ?></strong></p>
                    </div>
            <?php else: ?> <!-- Valores incorretos (possui letras) -->
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. Não utilize letras, apenas números.</p>
                </div>
            <?php endif; ?>
            

            <div class="text-center">
                <a href="atv-12.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-02/Lista-02/Atv-13/atv-13.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>