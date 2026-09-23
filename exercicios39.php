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

//exercicio39 Leia o nome e salário de um funcionário e calcule o novo salário conforme a tabela de reajuste.

$nome = "natan";
$salario = 2500;

if ($salario <= 1000) {
    $novoSalario = $salario + ($salario * 0.20);
} elseif ($salario <= 5000) {
    $novoSalario = $salario + ($salario * 0.10);
} else {
    $novoSalario = $salario;
}

echo "Funcionário: $nome" . PHP_EOL;
echo "Novo salário: R$ $novoSalario";

//O programa verifica a faixa do salário e aplica o percentual de reajuste correspondente para calcular o novo salário.

?>
