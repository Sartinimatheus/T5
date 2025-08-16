<?php
// Criar um array
$frutas = array("Maçã", "Banana", "Laranja");

// Exibir o array antes da modificação
echo "Array antes da modificação: ";
print_r($frutas);

// Modificar um elemento do array
$frutas[2] = "Churros";
echo "<br>";
echo "Trocando Banana por Churros";
echo "<br>";

// Exibir o array após a modificação
echo "Array após a modificação: ";
print_r($frutas);