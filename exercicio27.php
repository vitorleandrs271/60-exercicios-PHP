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
Descritivo: Escreva um programa que leia um número inteiro e informe
se ele é estritamente maior que zero.
***************************/

echo "Digite um número inteiro: ";
$numero = (int) readline();

if ($numero > 0) {
    echo "O número $numero é estritamente maior que zero.";
} else {
    echo "O número $numero não é estritamente maior que zero.";
}

/**
 *  Resumindo: Lê um número inteiro e informa se ele é estritamente maior que zero
 */
?>
