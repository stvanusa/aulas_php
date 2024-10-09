<!--Crie duas variáveis $num1 e $num2. Use uma estrutura if-else para determinar qual dos dois números é o maior e imprima o resultado. -->
<?php

$num1 = 15; 
$num2 = 10; 

if ($num1 > $num2) {
    echo "$num1 é o maior número.";
} elseif ($num2 > $num1) {
    echo "$num2 é o maior número.";
} else {
    echo "Os dois números são iguais.";
}
?>