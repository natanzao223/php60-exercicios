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
// Exercício 22: ler o saldo de uma aplicação bancária e exibir o novo
// saldo reajustado com um acréscimo de 2%.

echo "Digite o valor do saldo: ";
$saldo = (float) readline();

// Acrescentar 2% é o mesmo que multiplicar o saldo por 1.02
$novoSaldo = $saldo * 1.02;

echo "Saldo original: R$ $saldo" . PHP_EOL;
echo "Novo saldo (com reajuste de 2%): R$ $novoSaldo" . PHP_EOL;

?>
