<!--Soma dos números de 1 a 100: Crie um loop for que some todos os números de 1 a 100 e imprima o resultado.-->
<?php
$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}

echo "A soma dos números de 1 a 100 é: " . $soma;
?>
