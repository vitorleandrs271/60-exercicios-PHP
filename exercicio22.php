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
Descritivo: Escreva um programa que leia o valor do saldo de uma aplicação bancária e exiba o novo
saldo reajustado com um acréscimo de 2%.

***************************/
echo "Digite o valor do saldo da aplicação bancária: ";
$saldo = (float) readline();
$novoSaldo = $saldo * 1.02;
echo "O novo saldo reajustado é: $novoSaldo\n";

?>