<?php
// Crie programa em php que copia exemplo.txt para um novo arquivo chamado exemplo_copia.txt.
// Caminho do arquivo original e do arquivo de destino
$arquivoOriginal = '../01/exemplo.txt';
$arquivoCopia = '../01/exemplo_copia.txt';

// Função para copiar o arquivo
function copiaArquivo($arquivoOriginal, $arquivoCopia) {
    if (file_exists($arquivoOriginal)) {
        if (copy($arquivoOriginal, $arquivoCopia)) {
            return "Arquivo copiado com sucesso para '$arquivoCopia'.";
        } else {
            return "Erro ao copiar o arquivo.";
        }
    } else {
        return "O arquivo '$arquivoOriginal' não existe.";
    }
}

// Exemplo de uso
echo copiaArquivo($arquivoOriginal, $arquivoCopia);
?>


?>