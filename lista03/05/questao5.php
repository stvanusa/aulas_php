<?php
//5 - Crie programa em php que exclui o arquivo exemplo.txt. Certifique-se de que o arquivo existe antes de tentar excluí-lo.

$nomeArquivo = '../01/exemplo2.txt';

// Verificando se o arquivo existe
if (file_exists($nomeArquivo)) {
    // Excluindo arquivo
    $return = unlink($nomeArquivo);
    if ($return) {
        echo "Arquivo excluído!";
    } else {
        echo "Erro ao excluir o arquivo.";
    }
} else {
    echo "O arquivo não existe.";
}
?>


