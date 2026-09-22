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
Descritivo: Escreva um programa que leia quatro números inteiros e
calcule a média ponderada deles, considerando que os pesos associados
a cada número são, respectivamente, 1, 2, 3 e 4.
***************************/

echo "Digite o 1º número inteiro: ";
$numero1 = (int) readline();

echo "Digite o 2º número inteiro: ";
$numero2 = (int) readline();

echo "Digite o 3º número inteiro: ";
$numero3 = (int) readline();

echo "Digite o 4º número inteiro: ";
$numero4 = (int) readline();

$peso1 = 1;
$peso2 = 2;
$peso3 = 3;
$peso4 = 4;

$somaPesos = $peso1 + $peso2 + $peso3 + $peso4;
$mediaPonderada = (($numero1 * $peso1) + ($numero2 * $peso2) + ($numero3 * $peso3) + ($numero4 * $peso4)) / $somaPesos;

echo "A média ponderada dos números informados é: $mediaPonderada";

/**
 *  Resumindo: Lê quatro números inteiros e calcula a média ponderada com pesos 1, 2, 3 e 4
 */
?>
