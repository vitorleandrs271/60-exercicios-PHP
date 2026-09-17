
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
Descritivo: Escreva um programa que leia um número inteiro e exiba na tela o seu antecessor e o seu
sucessor.
***************************/

echo "Digite um número inteiro: ";
$numero = (int) readline();
$antecessor = $numero - 1;
$sucessor = $numero + 1;
echo "O antecessor de $numero é $antecessor e o sucessor é $sucessor.";

/*
Resumindo: O programa lê um número inteiro do usuário e calcula o seu antecessor e sucessor, exibindo os resultados na tela.
*/

?>