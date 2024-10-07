<!-- 9- Soma de elementos: Crie um array com 10 números e use foreach para calcular a soma de todos os elementos.-->
<?php
$numeros = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero; // Adiciona o número atual à soma
}

echo "A soma de todos os elementos é: $soma\n";
?>
