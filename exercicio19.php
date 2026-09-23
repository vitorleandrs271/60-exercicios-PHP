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
Descritivo:  Escreva um programa que leia uma string correspondente a uma data no formato
ddmmaa (6 dígitos, ex: 250826) e exiba o dia, mês e ano de forma separada.
***************************/

echo "Digite uma data no formato ddmmaa: ";
$data = (string) readline();

$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

echo "Dia: $dia\n";
echo "Mês: $mes\n";
echo "Ano: $ano\n";

/**
 * Resumindo: lê uma data no formato ddmmaa e exibe o dia, o mês e o ano separadamente.
 */

?>
