<?php
 //Crie programa em php que escreve os dados de um array associativo em um arquivo CSV chamado dados.csv.
 $dados = [
    ['time' => 'flamengo', 'cor' => 'rubronegro'],
    ['time' => 'botafogo', 'cor' => 'alvinegro'],
 ];

 $arquivo = fopen('dados.csv', 'w');

 foreach($dados as $linha){
    $formcsv = $linha['time'] . "," . $linha['cor'] . PHP_EOL;
    fwrite($arquivo,$formcsv);
    
 }
 fclose($arquivo);
 ?>