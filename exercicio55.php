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
Escreva um programa que leia um número inteiro entre 1 e 12 e exiba
o nome do mês correspondente por extenso.

Explicação:
O programa solicita ao usuário um número entre 1 e 12.
Por meio da estrutura switch, cada número é associado ao nome
do respectivo mês. Caso seja informado um número fora do intervalo,
o programa informa que o valor é inválido.
******************************************************************************/

$mes = (int) readline("Digite um número de 1 a 12: ");

switch ($mes) {

    case 1:
        echo "Janeiro\n";
        break;

    case 2:
        echo "Fevereiro\n";
        break;

    case 3:
        echo "Março\n";
        break;

    case 4:
        echo "Abril\n";
        break;

    case 5:
        echo "Maio\n";
        break;

    case 6:
        echo "Junho\n";
        break;

    case 7:
        echo "Julho\n";
        break;

    case 8:
        echo "Agosto\n";
        break;

    case 9:
        echo "Setembro\n";
        break;

    case 10:
        echo "Outubro\n";
        break;

    case 11:
        echo "Novembro\n";
        break;

    case 12:
        echo "Dezembro\n";
        break;

    default:
        echo "Número inválido.\n";
}

?>