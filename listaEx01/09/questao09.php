<!--9 - Crie uma variável $valorCompra e atribua a ela um valor. Se o valor for maior que 100, aplique um desconto de 10% e imprima o valor final. Caso contrário, imprima o valor original. Número Positivo ou Negativo -->
<?php

$valorCompra = 120;

if ($valorCompra > 100) {
    $desconto = $valorCompra * 0.10; // Calcula 10% de desconto
    $valorFinal = $valorCompra - $desconto; // Aplica o desconto
    echo "Valor original: R$ " . number_format($valorCompra, 2, ',', '.') . "\n";
    echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . "\n";
    echo "Valor final com desconto: R$ " . number_format($valorFinal, 2, ',', '.');
} else {
    echo "Valor original: R$ " . number_format($valorCompra, 2, ',', '.');
}
?>