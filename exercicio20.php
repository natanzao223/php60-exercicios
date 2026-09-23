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
// Exercício 20: ler uma data no formato ddmmaa (ex: 250826) e exibir
// a mesma data reorganizada no formato mmddaa.

echo "Digite a data no formato ddmmaa: ";
$data = readline();

// Separa cada parte da data usando substr, igual no exercício 19
$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

// Agora só concatenamos (juntamos) as partes na nova ordem: mês, dia, ano
$dataReorganizada = $mes . $dia . $ano;

echo "Data original (ddmmaa): $data" . PHP_EOL;
echo "Data reorganizada (mmddaa): $dataReorganizada" . PHP_EOL;
?>
