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
Descritivo: Escreva um programa que leia o ano de nascimento de um nadador e o ano atual, calcule
a sua idade e classifique-o em uma categoria de acordo com a seguinte tabela:
- 0 a 4 anos: Não aceito
- 5 a 7 anos: Infantil A
- 8 a 10 anos: Infantil B
- 11 a 13 anos: Juvenil A
- 14 a 17 anos: Juvenil B
- Maiores de 17 anos: Sênior
***************************/

echo "Digite o ano de nascimento do nadador: ";
$anoNascimento = (int) readline();  
echo "Digite o ano atual: ";
$anoAtual = (int) readline();
$idade = $anoAtual - $anoNascimento;

switch (true) {
    case ($idade >= 0 && $idade <= 4):
        echo "Categoria: Não aceito\n";
        break;
    case ($idade >= 5 && $idade <= 7):
        echo "Categoria: Infantil A\n";
        break;
    case ($idade >= 8 && $idade <= 10):
        echo "Categoria: Infantil B\n";
        break;
    case ($idade >= 11 && $idade <= 13):
        echo "Categoria: Juvenil A\n";
        break;
    case ($idade >= 14 && $idade <= 17):
        echo "Categoria: Juvenil B\n";
        break;
    default:
        echo "Categoria: Sênior\n";
}

?>