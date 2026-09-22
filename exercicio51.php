<?php

/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2A

Componentes:
RA-26013158-2-Jackson Rodrigues
RA-26013927-2-Natan da Silva
RA-26014123-2-Gustavo Tristão
RA-26014469-2-Rafael Baliski

Data: 17 de Setembro de 2026

Descritivo:
Escreva um programa que leia as três notas obtidas por um aluno.
Calcule e exiba a média aritmética simples baseada apenas nas duas
maiores notas obtidas.

Explicação:
O programa solicita as três notas do aluno e as armazena em um vetor.
As notas são organizadas da maior para a menor.
Depois, o programa utiliza apenas as duas maiores notas para calcular
e exibir a média aritmética.
******************************************************************************/

$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$nota3 = (float) readline("Digite a terceira nota: ");

$notas = [$nota1, $nota2, $nota3];

rsort($notas);

$media = ($notas[0] + $notas[1]) / 2;

echo "\nAs duas maiores notas são: " . $notas[0] . " e " . $notas[1] . "\n";
echo "Média: " . number_format($media, 2, ",", ".") . "\n";

?>
