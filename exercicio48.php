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
Escreva um programa que leia três números reais e exiba o maior deles.

Explicação:
O programa solicita ao usuário três números reais.
Inicialmente, considera o primeiro número como o maior.
Depois, compara o segundo e o terceiro número com o maior valor atual.
Ao final, exibe o maior número encontrado.
******************************************************************************/

$num1 = (float) readline("Digite o primeiro número: ");
$num2 = (float) readline("Digite o segundo número: ");
$num3 = (float) readline("Digite o terceiro número: ");

$maior = $num1;

if ($num2 > $maior) {
    $maior = $num2;
}

if ($num3 > $maior) {
    $maior = $num3;
}

echo "O maior número é: $maior\n";

?>