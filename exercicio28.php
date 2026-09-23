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
// Exercício 28: ler um número real e, se ele for maior que 20,
// exibir a metade desse número.

echo "Digite um número real: ";
$numero = (float) readline();

if ($numero > 20) {
    $metade = $numero / 2;
    echo "A metade de $numero é $metade." . PHP_EOL;
} else {
    echo "$numero não é maior que 20, então não é necessário calcular a metade." . PHP_EOL;
}
?>
