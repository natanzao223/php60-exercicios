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
Escreva um programa que leia um número inteiro entre 1 e 7 e mostre
o dia da semana correspondente.

Explicação:
O programa solicita um número inteiro entre 1 e 7.
A estrutura switch compara o número digitado com cada possibilidade
e exibe o dia da semana correspondente. Caso o valor esteja fora
do intervalo, o programa informa que o número é inválido.
******************************************************************************/

$dia = (int) readline("Digite um número de 1 a 7: ");

switch ($dia) {

    case 1:
        echo "Domingo\n";
        break;

    case 2:
        echo "Segunda-feira\n";
        break;

    case 3:
        echo "Terça-feira\n";
        break;

    case 4:
        echo "Quarta-feira\n";
        break;

    case 5:
        echo "Quinta-feira\n";
        break;

    case 6:
        echo "Sexta-feira\n";
        break;

    case 7:
        echo "Sábado\n";
        break;

    default:
        echo "Número inválido.\n";
}

?>