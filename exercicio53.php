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
Segundo uma tabela médica, o peso ideal de uma pessoa está relacionado
com a altura e o sexo. Escreva um programa que leia a altura e o sexo
('M' ou 'F') e calcule o seu peso ideal.

Explicação:
O programa solicita a altura e o sexo da pessoa.
Se o sexo informado for M, utiliza a fórmula (72.7 * altura) - 58.
Se o sexo informado for F, utiliza a fórmula (62.1 * altura) - 44.7.
Depois, exibe o peso ideal calculado.
******************************************************************************/

$altura = (float) readline("Digite sua altura em metros: ");
$sexo = strtoupper(readline("Digite o sexo (M/F): "));

if ($sexo == "M") {

    $pesoIdeal = (72.7 * $altura) - 58;

    echo "Peso ideal: "
        . number_format($pesoIdeal, 2, ",", ".") . " kg\n";

} elseif ($sexo == "F") {

    $pesoIdeal = (62.1 * $altura) - 44.7;

    echo "Peso ideal: "
        . number_format($pesoIdeal, 2, ",", ".") . " kg\n";

} else {

    echo "Sexo inválido. Digite M ou F.\n";

}

?>