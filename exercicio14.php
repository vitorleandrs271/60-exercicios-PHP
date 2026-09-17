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
Descritivo: Escreva um programa que leia o nome de um aluno e suas duas notas em avaliações
(AVs), calcule a média aritmética simples e exiba o nome do aluno seguido de sua média
final
***************************/



$nome = readline("Digite o nome do aluno: ");
$nota1 = (float)readline("Digite a primeira nota: ");
$nota2 = (float)readline("Digite a segunda nota: ");

$media = ($nota1 + $nota2) / 2;

echo "O aluno $nome tem média final de $media\n";


/** 
 * Resumindo: pede o nome do aluno e suas duas notas, calcula a média e mostra na tela o nome do aluno e sua média
 * 
*/

?>