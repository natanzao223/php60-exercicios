<?php
/*
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2A
Componentes:
26013158-2-Jackson Rodrigues
26013927-2-Natan da Silva
26014123-2-Gustavo Tristão
26014469-2-Rafael Baliski
Data: 17 de Setembro de 2026
Descritivo: Escreva um programa que leia um número inteiro e exiba se ele é PAR ou ÍMPAR
*/
// exercicio 31 Escreva um programa que leia um número inteiro e exiba se ele é PAR ou ÍMPAR

$numero = (int) readline("Digite um número inteiro: ");

if ($numero % 2 == 0) {
    echo "O número $numero é par";
} else {
    echo "O número $numero é ímpar";
}

?>