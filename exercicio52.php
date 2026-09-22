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
Descritivo: 
***************************/

$reais =
floatval(readline("Digite o valor em reais (R$): "));
$cotacao = 
floatval(readline("Digite a cotação do dólar (UDS): "));

$dolares = $reais / $cotacao

echo "Valor em dólares: US$" . number_format($dolares, 2, '.', '');

/*

Resumindo: Ele vai pegar um valor em reais, pegar a cotação em dólar e vai exibir o valor em dólar

*/

?>