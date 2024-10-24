<?php
// - Escreva programa em php PHP que cria um arquivo chamado exemplo.txt e escreve "Olá, Mundo!" dentro dele.
$arquivo = 'exemplo.txt';

$arquivoOpen = fopen($arquivo, 'w');
fwrite($arquivoOpen, "Ola, mundo!!!!");
fclose($arquivoOpen);
?>
                               