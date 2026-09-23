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

//exercicio16 Escreva um programa que leia um número inteiro positivo e exiba o dobro dele. Se o número for negativo, informe o erro.

$numero = 10;

if ($numero >= 0) {
    $dobro = $numero * 2;
    echo "O dobro do número é: $dobro";
} else {
    echo "Erro: o número não pode ser negativo";
}

//O programa verifica se o número é positivo. Se não for negativo, multiplica o número por 2 e exibe o dobro. Se for negativo, informa o erro.

?>
