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

//exercicio38 Determine o grau de obesidade de uma pessoa calculando seu IMC.

$peso = 70;
$altura = 1.70;

$imc = $peso / ($altura * $altura);

echo "IMC: $imc" . PHP_EOL;

if ($imc < 26) {
    echo "Normal";
} elseif ($imc < 30) {
    echo "Obeso";
} else {
    echo "Obeso Mórbido";
}

//O programa calcula o IMC dividindo o peso pelo quadrado da altura e depois utiliza a tabela do exercício para classificar o resultado.

?>
