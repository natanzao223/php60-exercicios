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

// Exercício 16: ler um número inteiro positivo e exibir o dobro dele.
// Se o número for negativo, informar erro.

echo "Digite um número inteiro: ";
$numero = (int) readline();

// Verifica se o número é negativo antes de calcular o dobro
if ($numero < 0) {
    // Número inválido: exibe mensagem de erro e encerra
    echo "Erro: o número não pode ser negativo." . PHP_EOL;
} else {
    // Número válido: calcula o dobro multiplicando por 2
    $dobro = $numero * 2;
    echo "O dobro de $numero é $dobro." . PHP_EOL;
}
?>
