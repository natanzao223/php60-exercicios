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

// Exercício 17: ler dividendo e divisor e exibir dividendo, divisor,
// quociente (inteiro) e resto da divisão.

echo "Digite o dividendo: ";
$dividendo = (int) readline();

echo "Digite o divisor: ";
$divisor = (int) readline();

// intdiv() faz a divisão inteira (descarta a parte decimal)
$quociente = intdiv($dividendo, $divisor);

// O operador % retorna o resto da divisão inteira
$resto = $dividendo % $divisor;

echo "Dividendo: $dividendo" . PHP_EOL;
echo "Divisor: $divisor" . PHP_EOL;
echo "Quociente: $quociente" . PHP_EOL;
echo "Resto: $resto" . PHP_EOL;

?>
