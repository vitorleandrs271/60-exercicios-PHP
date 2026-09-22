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
Descritivo: Escreva um programa que leia a sigla do estado onde uma
pessoa nasceu e informe se ela é carioca, paulista, mineira ou de
outro estado (outros).
***************************/

echo "Digite a sigla do estado (ex: RJ, SP, MG): ";
$sigla = strtoupper(readline());

if ($sigla == "RJ") {
    echo "A pessoa é carioca.";
} elseif ($sigla == "SP") {
    echo "A pessoa é paulista.";
} elseif ($sigla == "MG") {
    echo "A pessoa é mineira.";
} else {
    echo "A pessoa é de outro estado (outros).";
}

/**
 *  Resumindo: Lê a sigla do estado e informa se a pessoa é carioca, paulista, mineira ou de outro estado
 */
?>
