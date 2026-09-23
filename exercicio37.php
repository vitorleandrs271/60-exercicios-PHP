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
Descritivo: Escreva um programa que leia três notas de um aluno, calcule a média aritmética simples
e exiba a média e o conceito correspondente, conforme a tabela:
- Média >= 8.0: Conceito A
- Média >= 5.0 e < 8.0: Conceito B
- Média < 5.0: Conceito C

***************************/

echo "Digite a primeira nota: ";
$nota1 = (float) readline();
echo "Digite a segunda nota: ";
$nota2 = (float) readline();
echo "Digite a terceira nota: ";
$nota3 = (float) readline();
$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 8.0) {
    $conceito = "A";
} elseif ($media >= 5.0) {
    $conceito = "B";
} else {
    $conceito = "C";
}

echo "Média: $media\n";
echo "Conceito: $conceito\n";

?>