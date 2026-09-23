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
// Exercício 18: ler um número inteiro de 3 algarismos (100 a 999)
// e exibir o algarismo correspondente à casa das dezenas.

echo "Digite um número de 3 algarismos (100-999): ";
$numero = (int) readline();

// intdiv($numero, 10) remove o algarismo das unidades (ex: 357 -> 35)
// % 10 pega o último algarismo do que sobrou, que é a dezena (35 -> 5)
$dezena = intdiv($numero, 10) % 10;

echo "O algarismo da dezena de $numero é $dezena." . PHP_EOL;

?>
