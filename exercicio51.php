<?php
/*******************
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
Descritivo: Escreva um programa que leia as três notas obtidas por um aluno. Calcule e exiba a
média aritmética simples baseada apenas nas duas maiores notas obtidas.

***************************/

$nota1 = (float)readline("Digite a primeira nota: ");
$nota2 = (float)readline("Digite a segunda nota: ");
$nota3 = (float)readline("Digite a terceira nota: ");

if ($nota1 <= $nota2 && $nota1 <= $nota3) {
    $media = ($nota2 + $nota3) / 2;

    echo "A média das duas maiores notas é: $media\n";

} elseif ($nota2 <= $nota1 && $nota2 <= $nota3) {
    $media = ($nota1 + $nota3) / 2;

    echo "A média das duas maiores notas é: $media\n";

} else {
    $media = ($nota1 + $nota2) / 2;

    echo "A média das duas maiores notas é: $media\n";

}

/**
 * Resumindo: Pede as três notas do aluno, calcula a média das duas maiores e mostra na tela
 */

?>