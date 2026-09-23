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
// Exercício 25: ler uma temperatura em Fahrenheit e exibir o
// equivalente em Celsius. Fórmula: C = 5/9 * (F - 32)

echo "Digite a temperatura em Fahrenheit: ";
$fahrenheit = (float) readline();

$celsius = (5 / 9) * ($fahrenheit - 32);

echo "$fahrenheit °F equivalem a $celsius °C." . PHP_EOL;
?>
