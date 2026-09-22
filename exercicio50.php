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
Escreva um programa que leia cinco números e exiba na tela o maior
e o menor valor digitado.

Explicação:
O programa solicita cinco números ao usuário e armazena os valores em um vetor.
A função max identifica o maior valor presente no vetor e a função min
identifica o menor. Em seguida, os dois resultados são exibidos.
******************************************************************************/

$n1 = (float) readline("Digite o 1º número: ");
$n2 = (float) readline("Digite o 2º número: ");
$n3 = (float) readline("Digite o 3º número: ");
$n4 = (float) readline("Digite o 4º número: ");
$n5 = (float) readline("Digite o 5º número: ");

$numeros = [$n1, $n2, $n3, $n4, $n5];

$maior = max($numeros);
$menor = min($numeros);

echo "\nMaior valor: $maior\n";
echo "Menor valor: $menor\n";

?>