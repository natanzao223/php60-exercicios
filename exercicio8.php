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

//exercicio08 Leia um número inteiro e exiba seu antecessor e seu sucessor.

echo "Digite um número inteiro: ";
$numero = intval(trim(fgets(STDIN)));

$antecessor = $numero - 1;
$sucessor = $numero + 1;

echo "Antecessor: $antecessor" . PHP_EOL;
echo "Sucessor: $sucessor";

//O programa subtrai 1 do número para encontrar o antecessor e soma 1 para encontrar o sucessor.

?>
