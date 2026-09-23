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
Descritivo: Escreva um programa que leia um número real e informe se ele é positivo, negativo ou
nulo.
***************************/

echo "Digite um número real: ";
$numero = (float) readline();

if ($numero > 0) {
    echo "O número $numero é positivo.";
} elseif ($numero < 0) {
    echo "O número $numero é negativo.";
} else {
    echo "O número $numero é nulo.";
}

?>