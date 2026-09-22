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
Leia dois nomes e exiba-os em ordem alfabética.

Explicação:
O programa recebe dois nomes e utiliza strcasecmp para comparar
os textos sem diferenciar letras maiúsculas de minúsculas.
******************************************************************************/

$nome1 = readline("Digite o primeiro nome: ");
$nome2 = readline("Digite o segundo nome: ");

if (strcasecmp($nome1, $nome2) <= 0) {
    echo $nome1 . "\n";
    echo $nome2 . "\n";
    
} else {
    echo $nome2 . "\n";
    echo $nome1 . "\n";
}

?>