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

//exercicio42 Leia um número inteiro e informe se ele é divisível por 3 e por 7 simultaneamente.

$numero = 21;

if ($numero % 3 == 0 && $numero % 7 == 0) {
    echo "O número é divisível por 3 e por 7";
} else {
    echo "O número não é divisível por 3 e por 7 simultaneamente";
}

//O programa verifica o resto da divisão do número por 3 e por 7. Se os dois restos forem 0, ele é divisível pelos dois.

?>
