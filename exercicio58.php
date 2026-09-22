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
Escreva um programa que leia uma letra do teclado e informe se ela
é uma vogal maiúscula, uma vogal minúscula ou uma consoante.

Explicação:
O programa recebe uma letra digitada pelo usuário.
Primeiro, verifica se a entrada contém apenas uma letra.
Depois, compara o valor com as vogais maiúsculas e minúsculas.
Caso não seja uma vogal, a letra é classificada como consoante.
******************************************************************************/

$letra = readline("Digite uma letra: ");

if (strlen($letra) != 1 || !ctype_alpha($letra)) {

    echo "Entrada inválida. Digite apenas uma letra.\n";

} elseif (
    $letra == "A" ||
    $letra == "E" ||
    $letra == "I" ||
    $letra == "O" ||
    $letra == "U"
) {

    echo "A letra $letra é uma vogal maiúscula.\n";

} elseif (
    $letra == "a" ||
    $letra == "e" ||
    $letra == "i" ||
    $letra == "o" ||
    $letra == "u"
) {

    echo "A letra $letra é uma vogal minúscula.\n";

} else {

    echo "A letra $letra é uma consoante.\n";

}

?>