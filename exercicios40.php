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

//exercicio40 Calcule a conta final de um hóspede de um hotel.

$nome = "João";
$apartamento = "A";
$dias = 3;
$consumo = 100;

if ($apartamento == "A") {
    $valorDiaria = 150;
} elseif ($apartamento == "B") {
    $valorDiaria = 100;
} elseif ($apartamento == "C") {
    $valorDiaria = 75;
} else {
    $valorDiaria = 50;
}

$totalDiarias = $dias * $valorDiaria;
$subtotal = $totalDiarias + $consumo;
$taxaServico = $subtotal * 0.10;
$totalGeral = $subtotal + $taxaServico;

echo "Hóspede: $nome" . PHP_EOL;
echo "Total das diárias: R$ $totalDiarias" . PHP_EOL;
echo "Consumo interno: R$ $consumo" . PHP_EOL;
echo "Subtotal: R$ $subtotal" . PHP_EOL;
echo "Taxa de serviço: R$ $taxaServico" . PHP_EOL;
echo "Total geral: R$ $totalGeral";

//O programa define o valor da diária pelo tipo do apartamento, calcula as diárias, soma o consumo e adiciona 10% de taxa de serviço.

?>
