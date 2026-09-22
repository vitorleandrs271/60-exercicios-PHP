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
Descritivo: Escreva um programa que leia dois nomes e os exiba na
tela em ordem alfabética.
***************************/

echo "Digite o 1º nome: ";
$nome1 = readline();

echo "Digite o 2º nome: ";
$nome2 = readline();

if (strcasecmp($nome1, $nome2) <= 0) {
    echo "Ordem alfabética: $nome1, $nome2";
} else {
    echo "Ordem alfabética: $nome2, $nome1";
}

/**
 *  Resumindo: Lê dois nomes e os exibe na tela em ordem alfabética
 */
?>
