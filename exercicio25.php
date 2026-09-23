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
Descritivo: Escreva um programa que leia uma temperatura dada na escala Fahrenheit e exiba o
equivalente convertido em graus Celsius (Fórmula de conversão: C = 5/9 * (F – 32))
***************************/
echo "Digite a temperatura em Fahrenheit: ";
$fahrenheit = (float) readline();
$celsius = 5 / 9 * ($fahrenheit - 32);
echo "A temperatura em Celsius é: $celsius\n";



?>