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
Descritivo: Escreva um programa para calcular o imposto de renda anual de um contribuinte. O
programa deve ler: CPF, Nome, Rendimento Anual, Imposto Retido na Fonte, Contribuição
Previdenciária, Despesas Médicas e Número de Dependentes.
Considere as seguintes regras:
- Deduzir R$ 1.080,00 por dependente;
- Total das Deduções = Contribuição Previdenciária + Despesas Médicas + Dedução por
dependentes;
- Base de Cálculo = Rendimento Anual - Total das Deduções;
- Imposto Devido = (Base de Cálculo * Alíquota) - Parcela a Deduzir (conforme tabela abaixo):
 * Base até R$ 10.800,00: Isento (Alíquota 0%)
 * Base de R$ 10.800,01 até R$ 21.600,00: Alíquota 15%, Parcela a deduzir R$ 1.620,00
 * Base acima de R$ 21.600,00: Alíquota 25%, Parcela a deduzir R$ 3.780,00
- Se a diferença (Imposto Devido - Imposto Retido na Fonte) for positiva, há imposto a
PAGAR; se for negativa, há imposto a RESTITUIR.
***************************/
echo "Digite o CPF do contribuinte: ";
$cpf = readline();
echo "Digite o nome do contribuinte: ";
$nome = readline();
echo "Digite o rendimento anual: ";
$rendimento_anual = (float) readline();
echo "Digite o imposto retido na fonte: ";
$imposto_retido = (float) readline();
echo "Digite a contribuição previdenciária: ";
$contribuicao_previdenciaria = (float) readline();
echo "Digite as despesas médicas: ";
$despesas_medicas = (float) readline();
echo "Digite o número de dependentes: ";
$numero_dependentes = (int) readline();

$deducao_dependentes = $numero_dependentes * 1080.00;
$total_deducoes = $contribuicao_previdenciaria + $despesas_medicas + $deducao_dependentes;
$base_calculo = $rendimento_anual - $total_deducoes;    
if ($base_calculo <= 10800.00) {
    $aliquota = 0;
    $parcela_deduzir = 0;
} elseif ($base_calculo <= 21600.00) {
    $aliquota = 0.15;
    $parcela_deduzir = 1620.00;
} else {
    $aliquota = 0.25;
    $parcela_deduzir = 3780.00;
}
$imposto_devido = ($base_calculo * $aliquota) - $parcela_deduzir;
$diferenca = $imposto_devido - $imposto_retido;
 
if ($diferenca > 0) {
    $situacao = "PAGAR";
} elseif ($diferenca < 0) {
    $situacao = "RESTITUIR";
} else {
    $situacao = "NENHUM";
}

echo "\n=== Resultado do Cálculo do Imposto de Renda ===\n";
echo "CPF: $cpf\n";
echo "Nome: $nome\n";
echo "Rendimento Anual: R$ " . number_format($rendimento_anual, 2, ',', '.') . "\n";
echo "Imposto Retido na Fonte: R$ " . number_format($imposto_retido, 2, ',', '.') . "\n";
echo "Contribuição Previdenciária: R$ " . number_format($contribuicao_previdenciaria, 2, ',', '.') . "\n";
echo "Despesas Médicas: R$ " . number_format($despesas_medicas, 2, ',', '.') . "\n";
echo "Número de Dependentes: $numero_dependentes\n";
echo "Dedução por Dependentes: R$ " . number_format($deducao_dependentes, 2, ',', '.') . "\n";
echo "Total de Deduções: R$ " . number_format($total_deducoes, 2, ',', '.') . "\n";
echo "Base de Cálculo: R$ " . number_format($base_calculo, 2, ',', '.') . "\n";
echo "Imposto Devido: R$ " . number_format($imposto_devido, 2, ',', '.') . "\n";
echo "Diferença: R$ " . number_format($diferenca, 2, ',', '.') . "\n";
echo "Situação: $situacao\n";

/*
Resumindo: O programa lê os dados do contribuinte, calcula o imposto de renda anual com base nas regras fornecidas e exibe o resultado detalhado, incluindo a situação de pagamento ou restituição.
*/
?>