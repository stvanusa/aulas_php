<!--12 - Crie uma variável $temperatura e atribua a ela um valor em Celsius. Use if-else para converter a temperatura para Fahrenheit e imprima o resultado. --->
<?php
$temperatura = 25; // Você pode alterar esse valor para testar diferentes temperaturas

if (is_numeric($temperatura)) {
    $fahrenheit = ($temperatura * 9/5) + 32;
    echo "Temperatura em Celsius: $temperatura °C<br>";
    echo "Temperatura em Fahrenheit: $fahrenheit °F";
} else {
    echo "Por favor, insira um valor numérico válido.";
}
?>
