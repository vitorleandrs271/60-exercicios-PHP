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
Descritivo: Escreva um programa que leia um número inteiro positivo e exiba o dobro dele. Se o
número for negativo, informe o erro.
***************************/
echo "Digite um número inteiro positivo: ";
$numero = (int) readline();

if ($numero < 0) {
    echo "Erro: O número deve ser positivo.";
} else {
    $dobro = $numero * 2;
    echo "O dobro de $numero é: $dobro";
}
?>