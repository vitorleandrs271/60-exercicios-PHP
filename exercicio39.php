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
Descritivo: 
***************************/

$nome = readline("Digite o nome do funcionário: ");
$salario = (float) readline("Digite o salário atual: ");

if ($salario <= 1000) {
    $novoSalario = $salario * 1.20;
} elseif ($salario <= 5000) {
    $novoSalario = $salario * 1.10;
} else {
    $novoSalario = $salario;
}

echo "Funcionário: " . $nome . "\n";
echo "Novo salário: R$ " . $novoSalario;

/*

Resumindo: Ele vai ler o nome e salário atual de um funcionario e vai fazer um reajuste

*/

?>