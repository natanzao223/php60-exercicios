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
// Exercício 21: ler 4 números inteiros e calcular a média ponderada,
// com pesos 1, 2, 3 e 4 respectivamente.

echo "Digite o 1º número: ";
$n1 = (int) readline();

echo "Digite o 2º número: ";
$n2 = (int) readline();

echo "Digite o 3º número: ";
$n3 = (int) readline();

echo "Digite o 4º número: ";
$n4 = (int) readline();

// Média ponderada = soma de (valor * peso) dividido pela soma dos pesos
$somaPonderada = ($n1 * 1) + ($n2 * 2) + ($n3 * 3) + ($n4 * 4);
$somaPesos = 1 + 2 + 3 + 4; // = 10

$media = $somaPonderada / $somaPesos;

echo "A média ponderada é: $media" . PHP_EOL;

?>
