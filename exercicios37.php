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

//exercicio37 Leia três notas, calcule a média e informe o conceito correspondente.

$nota1 = 8;
$nota2 = 7;
$nota3 = 9;

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Média: $media" . PHP_EOL;

if ($media >= 8) {
    echo "Conceito A";
} elseif ($media >= 5) {
    echo "Conceito B";
} else {
    echo "Conceito C";
}

//O programa soma as três notas e divide por 3. Depois compara a média com a tabela para determinar o conceito.

?>
