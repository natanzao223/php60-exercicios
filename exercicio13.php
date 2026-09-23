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

//exercicio13 Leia dois números inteiros e exiba a média aritmética simples entre eles.

echo "Digite o primeiro número: ";
$numero1 = intval(trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$numero2 = intval(trim(fgets(STDIN)));

$media = ($numero1 + $numero2) / 2;

echo "Média: $media";

//O programa soma os dois números e divide o resultado por 2 para calcular a média aritmética.

?>
