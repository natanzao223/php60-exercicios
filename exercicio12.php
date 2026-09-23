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

//exercicio12 Leia um número real e exiba a terça parte deste número.

echo "Digite um número: ";
$numero = floatval(trim(fgets(STDIN)));

$tercaParte = $numero / 3;

echo "Terça parte: $tercaParte";

//O programa divide o número informado por 3 para encontrar a terça parte do valor.

?>
