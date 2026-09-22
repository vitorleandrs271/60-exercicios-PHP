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
Descritivo: Escreva um programa que leia uma letra do teclado e
informe se ela é uma vogal maiúscula, uma vogal minúscula ou uma
consoante.
***************************/

echo "Digite uma letra: ";
$letra = readline();

$vogaisMaiusculas = ["A", "E", "I", "O", "U"];
$vogaisMinusculas = ["a", "e", "i", "o", "u"];

if (in_array($letra, $vogaisMaiusculas)) {
    echo "A letra '$letra' é uma vogal maiúscula.";
} elseif (in_array($letra, $vogaisMinusculas)) {
    echo "A letra '$letra' é uma vogal minúscula.";
} else {
    echo "A letra '$letra' é uma consoante.";
}

/**
 *  Resumindo: Lê uma letra e informa se é vogal maiúscula, vogal minúscula ou consoante
 */
?>
