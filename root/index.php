<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina PHP</title>
</head>
<body>
    <h1>Benvenuto nella mia pagina PHP</h1>
    <p>Oggi è: 
        <?php
            echo date('d/m/Y');
        ?>
    </p>
</body>
</html>