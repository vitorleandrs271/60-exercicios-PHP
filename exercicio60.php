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
Descritivo: Escreva um programa conceitual que leia a quantidade de habitantes de uma cidade de
forma que o programa se prepare para ler a idade de cada morador e calcular a média.
***************************/

$quantidadeHabitantes = (int)readline("Digite a quantidade de habitantes da cidade: ");
$idade_soma = 0;
$media = 0;


$idades = [];
for ($i = 0; $i < $quantidadeHabitantes; $i++) {
    $idades[$i] = (int)readline("Digite a idade do habitante " . ($i + 1) . ": ");
    $idade_soma += $idades[$i];
}

 $media = $idade_soma / $quantidadeHabitantes;

echo "As médias das idades dos habitantes são: " . $media . "\n";


/**
 * Resumindo: Pede a quantidade de habitantes de uma cidade, lê a idade de cada morador e mostra na tela as idades
 */

?>