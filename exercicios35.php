<?php 
/* 
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas 
Disciplina: Linguagem e Técnicas de Programação 
Professor: Flores 
Turma: ADS2A 
Componentes: 
26013158-2-Jackson Rodrigues 
26013927-2-Natan da Silva 
26014123-2-Gustavo Tristão 
26014469-2-Rafael Baliski 
Data: 23 de Setembro de 2026 
*/ 

//exercicio35 Escreva um programa que leia dois números reais e os exiba primeiro em ordem crescente e depois em ordem decrescente.

$numero1 = 6;
$numero2 = 8;

if ($numero1 <= $numero2) {
    echo "Ordem crescente: $numero1, $numero2" . PHP_EOL;
    echo "Ordem decrescente: $numero2, $numero1";
} else {
    echo "Ordem crescente: $numero2, $numero1" . PHP_EOL;
    echo "Ordem decrescente: $numero1, $numero2";
}

//O programa compara os dois números para descobrir qual é o menor e depois mostra os valores em ordem crescente e decrescente.

?>
