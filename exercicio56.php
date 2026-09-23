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
Descritivo: Escreva um programa que leia o tipo de um veículo ('A', 'B', 'C', 'D' ou 'E') e a distância em
Km que ele deseja percorrer. Baseando-se na tabela abaixo de consumo, calcule e exiba o
total de litros de combustível estimados para o trajeto:
- Tipo A: 13.5 Km/l | Tipo B: 12.0 Km/l
- Tipo C: 10.5 Km/l | Tipo D: 9.0 Km/l
- Tipo E: 7.5 Km/l

***************************/

echo "Digite o tipo do veículo (A, B, C, D ou E): ";
$tipoVeiculo = (string) readline();
echo "Digite a distância em Km que deseja percorrer: ";
$distancia = (float) readline();

switch ($tipoVeiculo) {
    case 'A':
        $consumo = 13.5;
        break;
    case 'B':
        $consumo = 12.0;
        break;
    case 'C':
        $consumo = 10.5;
        break;
    case 'D':
        $consumo = 9.0;
        break;
    case 'E':
        $consumo = 7.5;
        break;
    default:
        echo "Tipo de veículo inválido.\n";
        exit(1);
}

$litrosNecessarios = $distancia / $consumo;

echo "Total de litros de combustível estimados: $litrosNecessarios";

?>