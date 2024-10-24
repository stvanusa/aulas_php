<?php
//2 - Crie programa em php que lê o conteúdo do arquivo exemplo.txt e exibe na tela.
$arquivo = '../01/exemplo.txt';

$arquivoOpen = fopen($arquivo, 'r');

// Percorre o arquivo
while (!feof($arquivoOpen)) {
    // Seleciona as linhas do arquivo
    $line = fgets($arquivoOpen);
    echo $line;
}

fclose($arquivoOpen);

