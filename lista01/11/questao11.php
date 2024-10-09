<!--11 - Crie uma variável $nota. Use if-else para classificar a nota em "A", "B", "C", "D" ou "F" com base na seguinte escala: A (9-10), B (7-8.9), C (5-6.9), D (3-4.9), F (0-2.9). -->
<?php
$nota = 8.5; 

if ($nota >= 9 && $nota <= 10) {
    echo "Classificação: A";
} elseif ($nota >= 7 && $nota < 9) {
    echo "Classificação: B";
} elseif ($nota >= 5 && $nota < 7) {
    echo "Classificação: C";
} elseif ($nota >= 3 && $nota < 5) {
    echo "Classificação: D";
} elseif ($nota >= 0 && $nota < 3) {
    echo "Classificação: F";
} else {
    echo "Nota inválida.";
}
?>
