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

//exercicio43 Leia um número inteiro de 3 casas decimais (100 a 999) e informe se o algarismo da casa das centenas é par ou ímpar.

$numero = 460;

$centena = intdiv($numero, 100);

if ($centena % 2 == 0) {
    echo "O algarismo da centena é PAR";
} else {
    echo "O algarismo da centena é ÍMPAR";
}

//O programa divide o número por 100 para obter o algarismo da centena e depois verifica se esse algarismo é par ou ímpar.

?>
