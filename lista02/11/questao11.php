<!-- 11 - Soma até um limite: Crie um loop while que some números inteiros até que a soma ultrapasse 100
  e imprima quantos números foram somados.-->
  <?php
$soma = 0;       // Inicializa a variável soma em 0
$contador = 0;   // Inicializa o contador em 0

while ($soma <= 100) {
    $numero = (int)readline("Digite um número inteiro: "); // Solicita um número ao usuário
    $soma += $numero; // Adiciona o número à soma
    $contador++;      // Incrementa o contador
}

echo "A soma ultrapassou 100 após somar $contador números.\n"; // Imprime o resultado
?>
