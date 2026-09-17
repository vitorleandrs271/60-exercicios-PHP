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
Descritivo: Escreva um programa para calcular a conta final de um hóspede de um hotel. Devem ser
lidos: nome, tipo do apartamento (A, B, C ou D), quantidade de diárias e valor do consumo
interno do hóspede.
O valor unitário da diária é determinado pela tabela:
- Apartamento A: R$ 150.00 | Apartamento B: R$ 100.00
- Apartamento C: R$ 75.00 | Apartamento D: R$ 50.00
O programa deve calcular:
- Valor total das diárias (dias * valor_diaria);
- Subtotal (diárias + consumo interno);
- Taxa de serviço (10% sobre o subtotal);
- Total geral (subtotal + taxa de serviço).
Exiba a fatura completa e detalhada.

***************************/
echo "Digite o nome do hóspede: ";
$nome = readline();
echo "Digite o tipo do apartamento (A, B, C ou D): ";
$tipo_apartamento = readline();
echo "Digite a quantidade de diárias: ";
$quantidade_diarias = (int) readline();
echo "Digite o valor do consumo interno: ";
$consumo_interno = (float) readline();

// Determinar o valor unitário da diária com base no tipo do apartamento
switch ($tipo_apartamento) {
    case 'A':
        $valor_diaria = 150.00;
        break;
    case 'B':
        $valor_diaria = 100.00;
        break;
    case 'C':
        $valor_diaria = 75.00;
        break;
    case 'D':
        $valor_diaria = 50.00;
        break;
    default:
        echo "Tipo de apartamento inválido.";
        exit;
}

// Calcular os valores
$valor_total_diarias = $quantidade_diarias * $valor_diaria;
$subtotal = $valor_total_diarias + $consumo_interno;
$taxa_servico = $subtotal * 0.10;
$total_geral = $subtotal + $taxa_servico;

// Exibir a fatura completa e detalhada
echo "\n=== Fatura do Hóspede ===\n";
echo "Nome: $nome\n";
echo "Tipo do Apartamento: $tipo_apartamento\n";
echo "Quantidade de Diárias: $quantidade_diarias\n";
echo "Valor Unitário da Diária: R$ " . number_format($valor_diaria, 2, ',', '.') . "\n";
echo "Valor Total das Diárias: R$ " . number_format($valor_total_diarias, 2, ',', '.') . "\n";
echo "Consumo Interno: R$ " . number_format($consumo_interno, 2, ',', '.') . "\n";
echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "\n";
echo "Taxa de Serviço (10%): R$ " . number_format($taxa_servico, 2, ',', '.') . "\n";
echo "Total Geral: R$ " . number_format($total_geral, 2, ',', '.') . "\n";

/**
 *  Resumindo: Pede o nome, tipo do apartamento, quantidade de diárias e valor do consumo interno e calcula a fatura completa do hóspede
 */

?>