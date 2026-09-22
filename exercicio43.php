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

$num = intval(readline("Digite um número de 100 a 999: "));

$centena = intdiv($num, 100);

if ($centena % 2 == 0 ) {
    echo "O algarismo das centenas é par. ";
} else {
    echo "O algarismo das centenas é impar. ";
}

/*

Resumindo: Ele vai ler um número de 3 casas decimais e vai dizer se o algarismo na casa das centenas é IMPAR ou PAR

*/

?>