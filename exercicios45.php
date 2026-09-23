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

//exercicio45 Implemente uma calculadora básica utilizando dois números e um operador matemático.

$numero1 = 25;
$numero2 = 14;
$operador = "+";

if ($operador == "+") {
    $resultado = $numero1 + $numero2;
} elseif ($operador == "-") {
    $resultado = $numero1 - $numero2;
} elseif ($operador == "*") {
    $resultado = $numero1 * $numero2;
} elseif ($operador == "/") {
    if ($numero2 != 0) {
        $resultado = $numero1 / $numero2;
    } else {
        $resultado = "Não é possível dividir por zero";
    }
} else {
    $resultado = "Operador inválido";
}

echo "Resultado: $resultado";

//O programa verifica qual operador foi informado e realiza a soma, subtração, multiplicação ou divisão dos dois números.

?>
