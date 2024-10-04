<!-- 15 - Crie uma variável $dia com um número de 1 a 7. Use if-else para imprimir o dia da semana correspondente (1 - Domingo, 2 - Segunda, etc.). -->
<?php
$dia = 3; 

if ($dia == 1) {
    echo "Domingo";
} elseif ($dia == 2) {
    echo "Segunda-feira";
} elseif ($dia == 3) {
    echo "Terça-feira";
} elseif ($dia == 4) {
    echo "Quarta-feira";
} elseif ($dia == 5) {
    echo "Quinta-feira";
} elseif ($dia == 6) {
    echo "Sexta-feira";
} elseif ($dia == 7) {
    echo "Sábado";
} else {
    echo "Número inválido! Escolha um número de 1 a 7.";
}
?>
