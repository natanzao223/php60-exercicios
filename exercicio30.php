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
// Exercício 30: ler um número inteiro e informar se ele é divisível
// por 3 (múltiplo de 3).

echo "Digite um número inteiro: ";
$numero = (int) readline();

// Um número é divisível por 3 quando o resto da divisão por 3 é zero
if ($numero % 3 == 0) {
    echo "$numero é divisível por 3." . PHP_EOL;
} else {
    echo "$numero não é divisível por 3." . PHP_EOL;
}
?>
