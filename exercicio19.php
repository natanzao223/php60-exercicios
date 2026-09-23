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
// Exercício 19: ler uma data no formato ddmmaa (6 dígitos, ex: 250826)
// e exibir dia, mês e ano separadamente.

echo "Digite a data no formato ddmmaa: ";
$data = readline();

// substr($data, posição_inicial, quantidade_de_caracteres)
// extrai pedaços da string sem precisar converter para número
$dia  = substr($data, 0, 2); // primeiros 2 caracteres
$mes  = substr($data, 2, 2); // 2 caracteres a partir da posição 2
$ano  = substr($data, 4, 2); // últimos 2 caracteres

echo "Dia: $dia" . PHP_EOL;
echo "Mês: $mes" . PHP_EOL;
echo "Ano: $ano" . PHP_EOL;

?>
