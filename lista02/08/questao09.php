<!--  Lista de frutas: Crie um array com diferentes frutas e use foreach para criar uma lista numerada.-->
<?php
$frutas = ["Maçã", "Banana", "Laranja", "Manga", "Uva"];

echo "Lista de Frutas:\n";

foreach ($frutas as $indice => $fruta) {
    // O índice começa em 0, então adicionamos 1 para numerar a lista
    echo ($indice + 1) . ". " . $fruta . "\n";
}
?>
