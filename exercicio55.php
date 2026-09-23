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
Descritivo: Escreva um programa que leia um número inteiro entre 1 e 12 e exiba o nome do mês
correspondente por extenso.

***************************/

echo "Digite um número inteiro entre 1 e 12: ";
$numero = (int) readline();

$meses = [
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
];

if (isset($meses[$numero])) {
    echo "Mês: {$meses[$numero]}\n";
} else {
    echo "Número inválido. Digite um número entre 1 e 12.\n";
}
