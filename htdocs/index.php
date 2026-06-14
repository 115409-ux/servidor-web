<h1>Testando if ... else com PHP</h1>

<?php
$hora = 10;

if ($hora < 12) {
    echo "<p>Bom dia!</p>";
} else {
    echo "<p>Boa tarde!</p>";
}
?>
<h1>Testando switch com PHP</h1>

<?php
$dia = "terça";"terça";

switch ($dia) {
    case "terça";
        echo "<p>Hoje é dia de programar!</p>";
        break;

    case "terça":
        echo "<p>Dia de banco de dados!</p>";
        break;

    default:
        echo "<p>Dia de estudar novos conceitos.</p>";
}
?>
