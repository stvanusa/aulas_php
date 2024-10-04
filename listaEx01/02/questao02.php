<!-- 2 Declare duas variáveis $a e $b, atribua a elas números inteiros. Calcule e imprima a soma, subtração, multiplicação e divisão. Verificação de Par ou Ímpar -->
<?php
$a = 20; 
$b = 6;

$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $b != 0 ? $a / $b : 'Divisão por zero não é permitida';

echo "soma: $soma, subtracao: $subtracao, multiplicacao: $multiplicacao, divisao: $divisao";
?>

