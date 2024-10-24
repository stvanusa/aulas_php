<?php
// Modifique o script anterior para adicionar a linha "Bem-vindo ao PHP!" ao final do arquivo exemplo.txt.
$arquivo = '../01/exemplo.txt';

$arquivoOpen = fopen($arquivo, 'a');

// add linha ao arquivo
fwrite($arquivoOpen, "Bem-vindo ao PHP!!!" . PHP_EOL);

fclose($arquivoOpen);

// Imprimir as modificacoes
$arquivoOpen = fopen($arquivo, 'r');
// Percorre o arquivo
while (!feof($arquivoOpen)) {
    // Seleciona as linhas do arquivo
    $line = fgets($arquivoOpen);
    echo "<p>$line</p>";
}
fclose($arquivoOpen);
?>



