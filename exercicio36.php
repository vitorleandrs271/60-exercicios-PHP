<?php

/**************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2A
Componentes:
 26007377-2 - Bruno Santian
 26004109-2 - Gustavo Souza Rosevics
 26009642-2 - Joao Victor de Souza 
 25004001-4 - Saymon Crespin
 26004199-2 - Vitor Eduardo Soares Silva
 26010196-2 - Vitor Leandro
Data: 23 de Setembro de 2026
Descritivo: Deseja-se calcular a conta de consumo de energia elétrica de um consumidor. Escreva
um programa que leia o código do consumidor, o preço do kWh e a quantidade de kWh
consumida. Exiba o código do consumidor e o total a pagar, sabendo que a taxa mínima
cobrada é de R$ 11,20.
***************************/

echo "Digite o código do consumidor: ";
$codigo = (int) readline();

echo "Digite o preço do kWh: ";
$preco = (float) readline();

echo "Digite a quantidade de kWh consumida: ";
$kwh = (float) readline();

$total = $preco * $kwh;
if ($total < 11.20) {
    $total = 11.20;
}

echo "Código do consumidor: $codigo\n";
echo "Total a pagar: R$ $total\n";

?>