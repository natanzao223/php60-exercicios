<?php

/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2A

Componentes:
RA-26013158-2-Jackson Rodrigues
RA-26013927-2-Natan da Silva
RA-26014123-2-Gustavo Tristão
RA-26014469-2-Rafael Baliski

Data: 17 de Setembro de 2026

Descritivo:
Escreva um programa que leia três números e os exiba na tela em ordem
crescente e, posteriormente, em ordem decrescente.

Explicação:
O programa solicita três números ao usuário e armazena os valores em um vetor.
A função sort organiza os números em ordem crescente e a função rsort
organiza os mesmos valores em ordem decrescente.
Depois, as duas ordenações são exibidas na tela.
******************************************************************************/

$num1 = (float) readline("Digite o primeiro número: ");
$num2 = (float) readline("Digite o segundo número: ");
$num3 = (float) readline("Digite o terceiro número: ");

$numeros = [$num1, $num2, $num3];

sort($numeros);

echo "\nOrdem crescente:\n";
echo $numeros[0] . " - " . $numeros[1] . " - " . $numeros[2] . "\n";

rsort($numeros);

echo "\nOrdem decrescente:\n";
echo $numeros[0] . " - " . $numeros[1] . " - " . $numeros[2] . "\n";

?>