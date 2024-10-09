<!--9 - Crie uma variável $valorCompra e atribua a ela um valor. Se o valor for maior que 100, aplique um desconto de 10% e imprima o valor final. Caso contrário, imprima o valor original. Número Positivo ou Negativo -->
<?php
$valorCompra = 80;
$desconto = ($valorCompra > 100) ? $valorCompra * 0.10 : 0;
$valorFinal = $valorCompra - $desconto;

echo "Valor original: R$ " . $valorCompra . "\n";
if ($desconto > 0) {
    echo "Desconto: R$ " . $desconto . "\n";
}
echo "Valor final" . ($desconto > 0 ? " com desconto" : "") . ": R$ " . $valorFinal;
?>
?>
