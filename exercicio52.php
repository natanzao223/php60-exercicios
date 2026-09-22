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
Escreva um programa que leia um valor em Reais (BRL), a taxa de cotação
atual do dólar (USD) e converta o valor para dólares, exibindo o
resultado formatado.

Explicação:
O programa solicita um valor em reais e o valor atual da cotação do dólar.
A conversão é realizada dividindo o valor em reais pela cotação informada.
O resultado é apresentado com duas casas decimais.
******************************************************************************/

$reais = (float) readline("Digite o valor em Reais: R$ ");
$cotacao = (float) readline("Digite a cotação do dólar: R$ ");

if ($cotacao > 0) {

    $dolares = $reais / $cotacao;

    echo "Valor convertido: US$ "
        . number_format($dolares, 2, ",", ".") . "\n";

} else {

    echo "Cotação inválida.\n";

}

?>
