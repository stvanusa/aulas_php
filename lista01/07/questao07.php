<!--Crie três variáveis $nota1, $nota2, $nota3 com valores entre 0 e 10. Calcule a média e imprima se o aluno foi aprovado (média >= 7) ou reprovado. -->
<?php
$nota1 = 10;
$nota2 = 6;
$nota3 = 5;

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 7) {
    echo "Aprovado! Média: " . $media; 
} else {
    echo "Reprovado! Média: " . $media; //(.)ponto para cocatenar
}
?>
