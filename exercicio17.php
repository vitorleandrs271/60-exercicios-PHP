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
Descritivo: Escreva um programa que leia dois números inteiros (dividendo e divisor) e exiba na tela
uma saída detalhada contendo: Dividendo, Divisor, Quociente (inteiro) e Resto da divisão.

***************************/

echo "Digite o número que você quer dividir: ";
$dividendo = (int) readline();

echo "Digite por quanto você quer dividir: ";
$divisor = (int) readline();

if ($divisor == 0) {
    echo "Erro: O divisor não pode ser zero.\n";
} else {
    $quociente = (int) ($dividendo / $divisor);
    $resto = $dividendo % $divisor;

    echo "Dividendo: $dividendo\n";
    echo "Divisor: $divisor\n";
    echo "Quociente: $quociente\n";
    echo "Resto: $resto\n";
}
?>