<?php
//Escreva uma função que verifica se um arquivo existe e retorna uma mensagem apropriada.
$caminhoArquivo = '../01/exemplo.txt';

//verificação com operador ternário
function verificaArquivo($caminhoArquivo) {
    return file_exists($caminhoArquivo) ? "O arquivo '$caminhoArquivo' existe." : "O arquivo '$caminhoArquivo' não existe.";
}

//verificação com 
function verificarArquivo2($caminhoArquivo){

    if(file_exists($caminhoArquivo)){
        echo "O arquivo '$caminhoArquivo' existe.";
    }
    else{
        echo "O arquivo '$caminhoArquivo' não existe.";
    }

}

// Exemplo de uso
echo verificaArquivo('../01/exemplo.txt');
?>
