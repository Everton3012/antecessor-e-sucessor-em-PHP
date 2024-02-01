<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
                $num = $_POST["numero"] ?? 0;

                echo "O número escolhido foi $num";

                echo "<br/>O numero antecessor de $num é " . ($num - 1) . "\n";

                echo "<br/>O numero sucessor de $num é " . ($num + 1) . "\n";
            ?>
    </p>
    <button onclick="javascript:history.go(-1);">&#x2B05; Voltar</button>
    </main>
</body>
</html>