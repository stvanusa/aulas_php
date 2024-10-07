<!-- Valores de um array: Crie um array associativo com 3 produtos e seus preços. 
 Utilize foreach para imprimir o nome de cada produto e seu preço.-->
<?php
$produtos = [
    "Produto A" => 9.50,
    "Produto B" => 5.50,
    "Produto C" => 6.00
];

foreach ($produtos as $produto => $preco) {
    echo "O preço de $produto é R$ $preco\n";
}
?>
