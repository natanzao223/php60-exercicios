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

//exercicio36 Calcule a conta de consumo de energia elétrica de um consumidor.

$codigo = 123;
$precoKwh = 0.75;
$quantidadeKwh = 100;

$total = $precoKwh * $quantidadeKwh;

if ($total < 11.20) {
    $total = 11.20;
}

echo "Código do consumidor: $codigo" . PHP_EOL;
echo "Total a pagar: R$ $total";

//O programa multiplica o preço do kWh pela quantidade consumida. Se o valor for menor que R$ 11,20, é cobrada a taxa mínima.

?>
