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
// Exercício 24: calcular o comprimento de uma circunferência a partir
// do raio. Fórmula: C = 2 * PI * Raio

// define() cria uma constante: um valor que não pode ser alterado depois
define('PI', 3.1415);

echo "Digite o raio da circunferência: ";
$raio = (float) readline();

$comprimento = 2 * PI * $raio;

echo "O comprimento da circunferência é: $comprimento" . PHP_EOL;

?>
