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
Descritivo: 
***************************/

define("PI", 3.1415);

$raio = (float) readline("Digite o raio: ");

$comprimento = 2 * PI * $raio;

echo "O comprimento da circunferência é: " . $comprimento;

/* 

Resumindo: ele vai calcular e exibir o comprimento de uma circunferência com base em seu raio fornecido pelo usuário

*/

?>