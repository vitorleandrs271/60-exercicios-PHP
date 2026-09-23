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
Descritivo: Escreva um programa que leia cinco números e exiba na tela o maior e o menor valor
digitado.
***************************/

$maior = null;
$menor = null;

for ($i = 1; $i <= 5; $i++) {
    $numero = (float) readline("Digite o número $i: ");

    if ($maior === null || $numero > $maior) {
        $maior = $numero;
    }

    if ($menor === null || $numero < $menor) {
        $menor = $numero;
    }
}

echo "Maior valor: $maior\n";
echo "Menor valor: $menor\n";

/**
 * Resumindo: lê cinco números digitados pelo usuário e exibe o maior e o menor valor entre eles.
 */

?>
