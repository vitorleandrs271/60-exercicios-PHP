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
Descritivo: Escreva um programa que determine o grau de obesidade de
uma pessoa a partir de seu peso (kg) e altura (m), calculando o IMC
(Massa = Peso / Altura²) e classificando de acordo com a tabela:
- IMC < 26: Normal
- IMC >= 26 e < 30: Obeso
- IMC >= 30: Obeso Mórbido
***************************/

echo "Digite o peso (kg): ";
$peso = (float) readline();

echo "Digite a altura (m): ";
$altura = (float) readline();

$imc = $peso / ($altura * $altura);

if ($imc < 26) {
    $classificacao = "Normal";
} elseif ($imc < 30) {
    $classificacao = "Obeso";
} else {
    $classificacao = "Obeso Mórbido";
}

echo "IMC calculado: " . round($imc, 2) . "\n";
echo "Classificação: $classificacao";

/**
 *  Resumindo: Calcula o IMC a partir do peso e altura e classifica o grau de obesidade
 */
?>
