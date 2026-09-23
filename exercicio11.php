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
Descritivo: Escreva um programa que leia dois números inteiros e exiba o produto (multiplicação)
entre eles
***************************/

echo "Digite o primeiro número: ";
$numero1 = (int) readline();

echo "Digite o segundo número: ";
$numero2 = (int) readline();

$produto = $numero1 * $numero2;

echo "O produto entre $numero1 e $numero2 é: $produto";

?>