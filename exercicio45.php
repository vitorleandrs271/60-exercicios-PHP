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
Descritivo: Escreva um programa que implemente uma calculadora básica. O programa deve obter
dois números reais do teclado e um operador caractere representando a operação
matemática desejada ('+', '-', '*' e '/'). Efetue o cálculo e exiba o resultado.
***************************/

echo "Digite o primeiro número: ";
$numero1 = (float) readline();

echo "Digite o segundo número: ";
$numero2 = (float) readline();

echo "Digite o operador (+ Para soma, - Para subtração, * Para multiplicação, / Para divisão): ";
$operador = readline();

switch ($operador) {
    case '+':
        $resultado = $numero1 + $numero2;
        break;
    case '-':
        $resultado = $numero1 - $numero2;
        break;
    case '*':
        $resultado = $numero1 * $numero2;
        break;
    case '/':
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
        } else {
            echo "Erro: Divisão por zero não é permitida.\n";
            exit(1);
        }
        break;
    default:
        echo "Erro: Operador inválido.\n";
        exit(1);
}

echo "O resultado da operação é: $resultado\n";
/*
Resumindo: O programa cria uma calculadora que usa os simbolos da programação matematica para realizar calculos básicos, onde a divisão por 0 não é permitida.
*/
?>