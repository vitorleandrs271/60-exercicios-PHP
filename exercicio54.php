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
Descritivo: Escreva um programa que leia um número inteiro entre 1 e 7
e mostre o dia da semana correspondente (exemplo: 1 -> 'Domingo',
4 -> 'Quarta-feira', etc.).
***************************/

echo "Digite um número inteiro entre 1 e 7: ";
$numero = (int) readline();

switch ($numero) {
    case 1:
        $dia = "Domingo";
        break;
    case 2:
        $dia = "Segunda-feira";
        break;
    case 3:
        $dia = "Terça-feira";
        break;
    case 4:
        $dia = "Quarta-feira";
        break;
    case 5:
        $dia = "Quinta-feira";
        break;
    case 6:
        $dia = "Sexta-feira";
        break;
    case 7:
        $dia = "Sábado";
        break;
    default:
        $dia = "Número inválido";
        break;
}

echo "O dia correspondente é: $dia";

/**
 *  Resumindo: Lê um número entre 1 e 7 e mostra o dia da semana correspondente
 */
?>
