
<?php require_once 'server.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    

    <style>
        .upper {
            text-transform: uppercase
        }
    </style>
</head>
<body>
    
    <form method="post" autocomplete="off">
        <h3>Funcionários</h3>
        <label for="contratado">Contratado</label>
        <input type="text" class="upper" id="contratado" name="contratado">

        <label for="demitido">Demitido</label>
        <input type="text" class="upper" id="demitido" name="demitido">

        <button>Enviar</button>

    </form>

    <p><em>Visualize as alterações na Home</em></p>


</body>
</html>
