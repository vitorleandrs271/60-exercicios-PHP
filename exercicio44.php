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
Descritivo: Escreva um programa que leia o ano de nascimento de uma pessoa e o ano atual.
Verifique se o ano de nascimento é um ano válido (maior que 1900 e menor ou igual ao ano
atual) e exiba a idade calculada.
***************************/

$anoNascimento = (int)readline("Digite o ano de nascimento: ");
$anoAtual = (int)readline("Digite o ano atual: ");

if ($anoNascimento > 1900 && $anoNascimento <= $anoAtual) {
    $idade = $anoAtual - $anoNascimento;
    echo "A idade da pessoa é: $idade anos\n";
} else {
    echo "Ano de nascimento inválido. Por favor, insira um ano válido.\n";
}


/*
    * Resumindo: Pergunta na tela o ano de nascimento e o ano atual, se for valido mostra a idade
    se não for valido mostra uma mensagem de erro
    * 
    */



?>