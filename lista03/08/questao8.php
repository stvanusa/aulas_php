<?php
// Arquivo: Faça programa em php que renomeia exemplo_copia.txt para exemplo_renomeado.txt.

$arquivoOriginal = '../01/exemplo_copia.txt';
$novoNome = '../01/exemplo_renomeado.txt';

// Função para renomear o arquivo
function renomeiaArquivo($arquivoOriginal, $novoNome) {
    if (file_exists($arquivoOriginal)) {
        if (rename($arquivoOriginal, $novoNome)) {
            return "Arquivo renomeado com sucesso para '$novoNome'.";
        } else {
            return "Erro ao renomear o arquivo.";
        }
    } else {
        return "O arquivo '$arquivoOriginal' não existe.";
    }
}

// Exemplo de uso
echo renomeiaArquivo($arquivoOriginal, $novoNome);
?>