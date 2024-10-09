<!--13 - Crie três variáveis $lado1, $lado2 e $lado3. Use if-else para verificar se os lados formam um triângulo e imprima uma mensagem correspondente.-->
<?php
$lado1 = 3; 
$lado2 = 4;
$lado3 = 5;

if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
    echo "Os lados formam um triângulo.";
} else {
    echo "Os lados não formam um triângulo.";
}
?>
