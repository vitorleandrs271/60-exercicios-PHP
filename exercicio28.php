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
Descritivo: Escreva um programa que leia um número real e, se ele for maior do que 20, exiba a
metade deste número.
***************************/
echo "Digite um número real: ";
$numero = (float) readline();
if ($numero > 20) {
    $metade = $numero / 2;
    echo "A metade do número é: $metade\n";
} else {
    echo "O número $numero não é maior do que 20.\n";
}



?>