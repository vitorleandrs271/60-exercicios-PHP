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
Descritivo:  Escreva um programa que leia duas variáveis inteiras (A e B) e efetue a troca de conteúdo
entre elas de forma que A passe a valer B, e B passe a valer A. Exiba os valores antes e
depois da troca.
***************************/

echo "Digite o valor de A: ";
$A = (int) readline();
echo "Digite o valor de B: ";
$B = (int) readline();

echo "Antes da troca - A: $A, B: $B\n";

// Troca de conteúdo
$C = $A;
$A = $B;
$B = $C;

echo "Depois da troca - A: $A, B: $B\n";

/**
 * Resumindo: Pede dois números inteiros e troca o valor entre eles
 */

?>