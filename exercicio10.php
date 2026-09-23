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

//exercicio10 Leia dois números inteiros, calcule a soma deles e exiba o resultado.

echo "Digite o primeiro número: ";
$numero1 = intval(trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$numero2 = intval(trim(fgets(STDIN)));

$soma = $numero1 + $numero2;

echo "Soma: $soma";

//O programa recebe dois números, soma os valores e exibe o resultado da soma.

?>
