<?php
//10 - Escreva programa em php que lê o arquivo dados.csv e exibe os dados em uma tabela HTML

$arquivo_csv = 'dados.csv';

// Verifica se o arquivo existe
if (!file_exists($arquivo_csv)) {
    echo 'Erro: O arquivo não foi encontrado.';
    exit;
}

// Abre o arquivo CSV
$handle = fopen($arquivo_csv, 'r');

// Inicia a tabela HTML
echo '<table border="1">';

// Lê e exibe o cabeçalho
$cabecalho = fgetcsv($handle);
echo '<tr>';
foreach ($cabecalho as $coluna) {
    echo '<th>' . $coluna . '</th>';
}
echo '</tr>';

// Lê e exibe as linhas
while ($linha = fgetcsv($handle)) {
    echo '<tr>';
    foreach ($linha as $coluna) {
        echo '<td>' . $coluna . '</td>';
    }
    echo '</tr>';
}

// Fecha a tabela e o arquivo
echo '</table>';
fclose($handle);
?>