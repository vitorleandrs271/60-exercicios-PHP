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
Descritivo:  Escreva um programa que leia dois números reais e exiba o maior deles
***************************/
echo "Digite o primeiro número real: ";
$numero1 = (float) readline();
echo "Digite o segundo número real: ";
$numero2 = (float) readline();
if ($numero1 > $numero2) {
    echo "O maior número é: $numero1\n";
} elseif ($numero2 > $numero1) {
    echo "O maior número é: $numero2\n";
} else {
    echo "Os dois números são iguais: $numero1\n";
}


?>