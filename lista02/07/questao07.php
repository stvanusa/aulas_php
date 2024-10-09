
<?php
//7 - Contagem de elementos: Dado um array com 10 números, use foreach para contar quantos números são maiores que 5.
$numeros = [1, 3, 5, 7, 9, 2, 6, 4, 8, 10];
$contador = 0; 

foreach ($numeros as $elemento) {
    if ($elemento > 5) {
        $contador++;
    }
}

echo "A quantidade de números maiores que 5 é: $contador\n";
?>
