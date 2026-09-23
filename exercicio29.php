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
// Exercício 29: ler um número real. Se for positivo, exibir seu
// inverso (1/x). Caso contrário, exibir seu valor absoluto (x * -1).

echo "Digite um número real: ";
$numero = (float) readline();

if ($numero > 0) {
    // Inverso: 1 dividido pelo próprio número
    $inverso = 1 / $numero;
    echo "O inverso de $numero é $inverso." . PHP_EOL;
} else {
    // Valor absoluto: transforma o número negativo em positivo
    // multiplicando por -1 (ou usa-se abs(), a função pronta do PHP)
    $absoluto = $numero * -1;
    echo "O valor absoluto de $numero é $absoluto." . PHP_EOL;
}
?>
