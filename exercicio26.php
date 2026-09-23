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
// Exercício 26: ler A e B e trocar o conteúdo entre eles
// (A passa a valer B, e B passa a valer A).

echo "Digite o valor de A: ";
$a = (int) readline();

echo "Digite o valor de B: ";
$b = (int) readline();

echo "Antes da troca -> A: $a | B: $b" . PHP_EOL;

// Para trocar dois valores sem perder nenhum deles, usamos uma variável
// auxiliar (temporária) que guarda o valor de A antes de sobrescrevê-lo
$auxiliar = $a;
$a = $b;
$b = $auxiliar;

echo "Depois da troca -> A: $a | B: $b" . PHP_EOL;
?>
