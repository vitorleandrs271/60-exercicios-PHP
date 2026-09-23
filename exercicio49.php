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
Descritivo: Escreva um programa que leia três números e os exiba na tela em ordem crescente e,
posteriormente, em ordem decrescente.

***************************/

echo "Digite o primeiro número: ";
$numero1 = (float) readline();
echo "Digite o segundo número: ";
$numero2 = (float) readline();
echo "Digite o terceiro número: ";
$numero3 = (float) readline();

if ($numero1 <= $numero2 && $numero1 <= $numero3) {
    if ($numero2 <= $numero3) {
        echo "Ordem crescente: $numero1, $numero2, $numero3\n";
        echo "Ordem decrescente: $numero3, $numero2, $numero1\n";
    } else {
        echo "Ordem crescente: $numero1, $numero3, $numero2\n";
        echo "Ordem decrescente: $numero2, $numero3, $numero1\n";
    }
} elseif ($numero2 <= $numero1 && $numero2 <= $numero3) {
    if ($numero1 <= $numero3) {
        echo "Ordem crescente: $numero2, $numero1, $numero3\n";
        echo "Ordem decrescente: $numero3, $numero1, $numero2\n";
    } else {
        echo "Ordem crescente: $numero2, $numero3, $numero1\n";
        echo "Ordem decrescente: $numero1, $numero3, $numero2\n";
    }
} else {
    if ($numero1 <= $numero2) {
        echo "Ordem crescente: $numero3, $numero1, $numero2\n";
        echo "Ordem decrescente: $numero2, $numero1, $numero3\n";
    } else {
        echo "Ordem crescente: $numero3, $numero2, $numero1\n";
        echo "Ordem decrescente: $numero1, $numero2, $numero3\n";
    }
}