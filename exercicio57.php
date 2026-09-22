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
Escreva um programa que leia separadamente o dia, o mês e o ano de
uma data e informe se ela é uma data válida ou não. Considere a
ocorrência de anos bissextos.

Explicação:
O programa recebe o dia, o mês e o ano separadamente.
Primeiro, verifica se o ano é bissexto. Depois, determina quantos dias
o mês informado possui. Por fim, verifica se o dia informado está
dentro do limite permitido para aquele mês e ano.
******************************************************************************/

$dia = (int) readline("Digite o dia: ");
$mes = (int) readline("Digite o mês: ");
$ano = (int) readline("Digite o ano: ");

$bissexto = false;

if (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)) {
    $bissexto = true;
}

if ($mes < 1 || $mes > 12 || $dia < 1) {

    echo "Data inválida.\n";
    exit;

}

switch ($mes) {

    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $diasMes = 31;
        break;

    case 4:
    case 6:
    case 9:
    case 11:
        $diasMes = 30;
        break;

    case 2:
        if ($bissexto) {
            $diasMes = 29;
        } else {
            $diasMes = 28;
        }
        break;
}

if ($dia <= $diasMes) {

    echo "A data $dia/$mes/$ano é válida.\n";

} else {

    echo "A data $dia/$mes/$ano é inválida.\n";

}

?>