<?php
/*******************
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
Descritivo: Escreva um programa que leia separadamente o dia, o mês e o ano de uma data e
informe se ela é uma data válida ou não. Considere a ocorrência de anos bissextos.

***************************/

$dia = (int)readline("Digite o dia: ");
$mes = (int)readline("Digite o mês: ");
$ano = (int)readline("Digite o ano: ");

$anoBissexto = ($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0);

if ($mes < 1 || $mes > 12) {
    echo "Data inválida: mês fora do intervalo permitido.\n";
} elseif ($dia < 1 || $dia > 31) {
    echo "Data inválida: dia fora do intervalo permitido.\n";
} elseif (($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) && $dia > 30) {
    echo "Data inválida: mês com apenas 30 dias.\n";
} elseif ($mes == 2 && $anoBissexto && $dia > 29) {
    echo "Data inválida: fevereiro em ano bissexto tem apenas 29 dias.\n";
} elseif ($mes == 2 && !$anoBissexto && $dia > 28) {
    echo "Data inválida: fevereiro em ano não bissexto tem apenas 28 dias.\n";
} else {
    echo "Data válida: $dia/$mes/$ano\n";
}



/**
 * Resumindo: Pede o dia, mês e ano de uma data, verifica se é válida considerando anos bissextos e mostra na tela
 */

?>