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
Descritivo:  Segundo uma tabela médica, o peso ideal de uma pessoa está relacionado com a altura e
o sexo. Escreva um programa que leia a altura e o sexo ('M' ou 'F') de uma pessoa, e calcule
e exiba o seu peso ideal utilizando as seguintes fórmulas:
- Para homens: (72.7 * H) – 58
- Para mulheres: (62.1 * H) – 44.7
***************************/

echo "Digite a altura em metros: ";
$altura = (float) readline();

echo "Digite o sexo ('M' ou 'F'): ";
$sexo = readline();

if ($sexo === 'M') {
    $pesoIdeal = (72.7 * $altura) - 58;
} elseif ($sexo === 'F') {
    $pesoIdeal = (62.1 * $altura) - 44.7;
} else {
    echo "Erro: Sexo inválido.\n";
    exit(1);
}

echo "O peso ideal é: $pesoIdeal kg\n";

/**
 * Resumindo: Pede a altura e o sexo e calcula o peso ideal e mostra na tela
 */

?>
