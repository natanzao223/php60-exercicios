<?php

/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2A

Componentes:
RA-26013158-2-Jackson Rodrigues
RA-26013927-2-Natan da Silva
RA-26014123-2-Gustavo Tristão
RA-26014469-2-Rafael Baliski

Data: 17 de Setembro de 2026

Descritivo:
Escreva um programa que leia o ano de nascimento de um nadador e o ano
atual, calcule a sua idade e classifique-o em uma categoria de acordo
com sua faixa etária.

Explicação:
O programa solicita o ano de nascimento do nadador e o ano atual.
A idade é calculada pela diferença entre os dois valores.
Em seguida, estruturas condicionais verificam em qual faixa etária
a idade está e exibem a categoria correspondente.
******************************************************************************/

$anoNascimento = (int) readline("Digite o ano de nascimento: ");
$anoAtual = (int) readline("Digite o ano atual: ");

if ($anoNascimento > $anoAtual || $anoNascimento <= 0) {

    echo "Ano de nascimento inválido.\n";
    exit;

}

$idade = $anoAtual - $anoNascimento;

echo "Idade: $idade anos\n";

if ($idade <= 4) {

    echo "Categoria: Não aceito\n";

} elseif ($idade <= 7) {

    echo "Categoria: Infantil A\n";

} elseif ($idade <= 10) {

    echo "Categoria: Infantil B\n";

} elseif ($idade <= 13) {

    echo "Categoria: Juvenil A\n";

} elseif ($idade <= 17) {

    echo "Categoria: Juvenil B\n";

} else {

    echo "Categoria: Sênior\n";

}

?>