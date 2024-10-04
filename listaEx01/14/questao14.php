<!-- 14 - Crie uma variável $media e atribua a ela uma média de notas. Use if-else para verificar se o aluno está em risco (média < 5) e imprima uma mensagem apropriada.-->
<?php
$media = 4.5;

if ($media < 5) {
    echo "O aluno está em risco. Média: $media";
} else {
    echo "O aluno não está em risco. Média: $media";
}
?>
