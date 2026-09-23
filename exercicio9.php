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

//exercicio09 Leia um nome, um endereço e um telefone e imprima os dados em linhas separadas.

echo "Digite seu nome: ";
$nome = trim(fgets(STDIN));

echo "Digite seu endereço: ";
$endereco = trim(fgets(STDIN));

echo "Digite seu telefone: ";
$telefone = trim(fgets(STDIN));

echo "Nome: $nome" . PHP_EOL;
echo "Endereço: $endereco" . PHP_EOL;
echo "Telefone: $telefone";

//O programa recebe o nome, endereço e telefone do usuário e exibe cada informação em uma linha separada.

?>
