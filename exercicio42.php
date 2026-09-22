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

$numero = (int) readline("Digite um número inteiro: ");

if ($numero % 3 == 0 && $numero % 7 == 0) {
    echo "O número é divisível por 3 e por 7.";
} else {
    echo "O número não é divisível por 3 e por 7 simultaneamente.";
}


/*

Resumindo: Ele vai ler um número inteiro e vai informar se o número é ou não divisível por 3 e 7 simultaneamente

*/

?>