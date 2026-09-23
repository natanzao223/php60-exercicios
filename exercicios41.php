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

//exercicio41 Calcule o imposto de renda anual de um contribuinte.

$cpf = "12345678900";
$nome = "João";
$rendimentoAnual = 30000;
$impostoRetido = 2000;
$contribuicaoPrevidenciaria = 1500;
$despesasMedicas = 1000;
$dependentes = 2;

$deducaoDependentes = $dependentes * 1080;

$totalDeducoes = $contribuicaoPrevidenciaria + $despesasMedicas + $deducaoDependentes;

$baseCalculo = $rendimentoAnual - $totalDeducoes;

if ($baseCalculo <= 10800) {
    $impostoDevido = 0;
} elseif ($baseCalculo <= 21600) {
    $impostoDevido = ($baseCalculo * 0.15) - 1620;
} else {
    $impostoDevido = ($baseCalculo * 0.25) - 3780;
}

$diferenca = $impostoDevido - $impostoRetido;

echo "CPF: $cpf" . PHP_EOL;
echo "Nome: $nome" . PHP_EOL;
echo "Base de cálculo: R$ $baseCalculo" . PHP_EOL;
echo "Imposto devido: R$ $impostoDevido" . PHP_EOL;

if ($diferenca > 0) {
    echo "Imposto a pagar: R$ $diferenca";
} elseif ($diferenca < 0) {
    echo "Imposto a restituir: R$ " . abs($diferenca);
} else {
    echo "Não há imposto a pagar ou restituir";
}

//O programa calcula as deduções, encontra a base de cálculo, aplica a alíquota correspondente e compara o imposto devido com o imposto já retido.

?>
