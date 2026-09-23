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
// Exercício 23: ler base e altura de um triângulo e calcular sua área.
// Fórmula: Área = (Base * Altura) / 2

echo "Digite a base do triângulo: ";
$base = (float) readline();

echo "Digite a altura do triângulo: ";
$altura = (float) readline();

$area = ($base * $altura) / 2;

echo "A área do triângulo é: $area" . PHP_EOL;
?>
