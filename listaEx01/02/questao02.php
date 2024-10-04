<!-- 2 Declare duas variáveis $a e $b, atribua a elas números inteiros. Calcule e imprima a soma, subtração, multiplicação e divisão. Verificação de Par ou Ímpar -->
<?php
// Declarando as variáveis
$a = 10; // Você pode alterar esses valores
$b = 3;

// Calculando as operações
$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $b != 0 ? $a / $b : 'Divisão por zero não é permitida';

// Imprimindo os resultados
echo "Soma: $soma\n";
echo "Subtração: $subtracao\n";
echo "Multiplicação: $multiplicacao\n";
echo "Divisão: $divisao\n";

// Função para verificar se um número é par ou ímpar
function verificarParOuImpar($numero) {
    return $numero % 2 == 0 ? 'Par' : 'Ímpar';
}

// Verificando se os resultados são pares ou ímpares
echo "Soma é " . verificarParOuImpar($soma) . "\n";
echo "Subtração é " . verificarParOuImpar($subtracao) . "\n";
echo "Multiplicação é " . verificarParOuImpar($multiplicacao) . "\n";

if ($b != 0) {
    echo "Divisão é " . verificarParOuImpar($divisao) . "\n";
}
?>
