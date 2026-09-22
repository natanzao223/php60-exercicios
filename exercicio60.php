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
Escreva um programa conceitual que leia a quantidade de habitantes
de uma cidade, leia a idade de cada morador e calcule a média das idades.

Explicação:
O programa solicita inicialmente a quantidade de habitantes.
Depois, utiliza uma estrutura de repetição for para solicitar a idade
de cada habitante. Todas as idades são somadas e, ao final, a soma é
dividida pela quantidade de habitantes para calcular a média.
******************************************************************************/

$habitantes = (int) readline("Digite a quantidade de habitantes: ");

if ($habitantes <= 0) {

    echo "Quantidade de habitantes inválida.\n";
    exit;

}

$somaIdades = 0;

for ($i = 1; $i <= $habitantes; $i++) {

    $idade = (int) readline("Digite a idade do habitante $i: ");

    $somaIdades = $somaIdades + $idade;
}

$media = $somaIdades / $habitantes;

echo "\nQuantidade de habitantes: $habitantes\n";
echo "Média das idades: "
    . number_format($media, 2, ",", ".")
    . " anos\n";

?>