<?php
// Criar um array
$estoque = array("Caneta", "Lapis", "Boracha");

// Exibir o array antes da modificação
echo "Array antes da modificação: ";
print_r($estoque);
echo "<br>";

// Modificar um elemento do array
$estoque[1] = "Marcador";
echo "Trocando lapis por marcador<br>";

// Exibir o array após a modificação
echo "Array após a modificação: ";
print_r($estoque);
echo "<br>";

// Inserir um novo elemento no final do array
$estoque[] = "grampeador";
echo "Array após inserir Morango: ";
print_r($estoque);
echo "<br>";

// Inserir um novo elemento em uma posição específica
array_splice($estoque, 1, 0, "clips");
echo "Array após inserir Uva na posição 2: ";
print_r($estoque);
echo "<br>";

// Remover um elemento do array usando unset
unset($estoque[2]);
echo "Array após remover o elemento na posição 2 (Laranja): ";
print_r($estoque);
echo "<br>";

// Reindexar o array (opcional, se quiser que as chaves fiquem sequenciais)
$frutas = array_values($estoque);
echo "Array após reindexação: ";
print_r($estoque);