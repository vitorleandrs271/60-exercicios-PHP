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
Descritivo: Escreva um programa que leia um número inteiro de três algarismos (de 100 a 999) e
exiba o algarismo correspondente à casa das dezenas.
***************************/

echo "Digite um número inteiro de três algarismos (de 100 a 999): ";
$numero = (int) readline();
$dezena = (int) ($numero / 10);
echo "O algarismo correspondente à casa das dezenas é: $dezena";

/**
 *  Resumindo: Pede um número de três algarismos e exibe ele na casa das dezenas
 */

?>