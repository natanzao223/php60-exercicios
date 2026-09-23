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

//exercicio04 Leia um número inteiro via teclado utilizando a CLI e exiba o número digitado.

echo "Digite um número inteiro: ";
$numero = intval(trim(fgets(STDIN)));

echo "Número lido = $numero";

//O programa utiliza fgets para receber o número digitado pelo usuário e depois exibe o valor informado.

?>
