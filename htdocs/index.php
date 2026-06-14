<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade PHP</title>
</head>
<body>

    <h1>Testando if ... else com PHP</h1>

    <?php
    $hora = 14;

    if ($hora < 12) {
        echo "<p>Bom dia!</p>";
    } else {
        echo "<p>Boa tarde!</p>";
    }
    ?>

    <h1>Testando switch com PHP</h1>

    <?php
    $dia = "segunda";

    switch ($dia) {
        case "segunda":
            echo "<p>Hoje é dia de programar!</p>";
            break;

        case "terça":
            echo "<p>Dia de banco de dados!</p>";
            break;

        default:
            echo "<p>Dia de estudar novos conceitos.</p>";
    }
    ?>

    <h1>Testando while com PHP</h1>

    <ul>
    <?php
    $contador = 1;

    while ($contador <= 5) {
        echo "<li>Item de teste número $contador</li>";
        $contador++;
    }
    ?>
    </ul>

</body>
</html>