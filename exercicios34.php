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

//exercicio34 Escreva um programa que leia dois números reais e exiba o maior de forma clara.

$numero1 = 15;
$numero2 = 8;

if ($numero1 > $numero2) {
    echo "O maior número é $numero1";
} else {
    if ($numero2 > $numero1) {
        echo "O maior número é $numero2";
    } else {
        echo "Os números são iguais";
    }
}

//O programa utiliza uma decisão composta para comparar os dois valores e mostrar qual deles é o maior.

?>
