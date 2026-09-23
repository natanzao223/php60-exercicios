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

//exercicio14 Leia o nome de um aluno e suas duas notas, calcule a média e exiba o nome seguido da média final.

echo "Digite o nome do aluno: ";
$nome = trim(fgets(STDIN));

echo "Digite a primeira nota: ";
$nota1 = floatval(trim(fgets(STDIN)));

echo "Digite a segunda nota: ";
$nota2 = floatval(trim(fgets(STDIN)));

$media = ($nota1 + $nota2) / 2;

echo "Aluno: $nome" . PHP_EOL;
echo "Média final: $media";

//O programa recebe as duas notas do aluno, soma os valores e divide por 2 para calcular a média final.

?>
