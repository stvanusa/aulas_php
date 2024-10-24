<?php
// Escreva uma função que recebe o nome de um arquivo e retorna o número de linhas que ele contém.
$arquivo = file('../01/exemplo.txt');
$quantidade_linhas = count($arquivo);
echo 'A quantidade de linhas é:'. $quantidade_linhas;

?>