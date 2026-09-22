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
Escreva um programa que leia o tipo de um veículo ('A', 'B', 'C', 'D'
ou 'E') e a distância em Km que ele deseja percorrer. Baseando-se no
consumo do veículo, calcule o total de litros necessários para o trajeto.

Explicação:
O programa solicita o tipo do veículo e a distância do percurso.
A estrutura switch identifica o consumo em quilômetros por litro
correspondente ao tipo informado. Depois, a distância é dividida pelo
consumo para calcular a quantidade estimada de combustível necessária.
******************************************************************************/

$tipo = strtoupper(readline("Digite o tipo do veículo (A, B, C, D ou E): "));
$distancia = (float) readline("Digite a distância em Km: ");

switch ($tipo) {

    case "A":
        $consumo = 13.5;
        break;

    case "B":
        $consumo = 12.0;
        break;

    case "C":
        $consumo = 10.5;
        break;

    case "D":
        $consumo = 9.0;
        break;

    case "E":
        $consumo = 7.5;
        break;

    default:
        echo "Tipo de veículo inválido.\n";
        exit;
}

$litros = $distancia / $consumo;

echo "Consumo do veículo: $consumo Km/l\n";
echo "Litros necessários: "
    . number_format($litros, 2, ",", ".") . " litros\n";

?>