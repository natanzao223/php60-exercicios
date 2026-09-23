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

//exercicio15 Leia o nome e o sobrenome de uma pessoa e exiba no formato: sobrenome, nome.

echo "Digite seu nome: ";
$nome = trim(fgets(STDIN));

echo "Digite seu sobrenome: ";
$sobrenome = trim(fgets(STDIN));

echo "$sobrenome, $nome";

//O programa recebe o nome e o sobrenome separadamente e depois exibe primeiro o sobrenome seguido do nome.

?>
