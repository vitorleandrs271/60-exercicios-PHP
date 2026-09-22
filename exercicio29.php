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

$numero = (float) readline("Digite um número: ");

if ($numero > 0) {
    $inverso = 1 / $numero;
    echo "O inverso é: " . $inverso;
} else {
    $absoluto = $numero * -1;
    echo "O valor absoluto é: " . $absoluto;
}

/*

Resumindo: Ele vai ler um numero real e, se for positivo, vai exibir o seu inverso caso contrário, exibirá seu valor absoluto

*/

?>