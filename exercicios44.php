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

//exercicio44 Leia o ano de nascimento de uma pessoa e o ano atual, verifique se o ano é válido e exiba a idade.

$anoNascimento = 2006;
$anoAtual = 2026;

if ($anoNascimento > 1900 && $anoNascimento <= $anoAtual) {
    $idade = $anoAtual - $anoNascimento;
    echo "Idade: $idade anos";
} else {
    echo "Ano de nascimento inválido";
}

//O programa verifica se o ano de nascimento está entre 1900 e o ano atual. Se estiver correto, subtrai o ano de nascimento do ano atual para calcular a idade.

?>
