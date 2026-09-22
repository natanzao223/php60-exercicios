# Trabalho Prático — PHP

Projeto desenvolvido para a disciplina **Linguagem e Técnicas de Programação**, do curso de **Tecnologia em Análise e Desenvolvimento de Sistemas**.

Este repositório contém as soluções dos exercícios **48 ao 60**, desenvolvidas em **PHP** e executadas através do terminal utilizando PHP CLI.

---

## Informações do Trabalho

**Curso:** Tecnologia em Análise e Desenvolvimento de Sistemas
**Disciplina:** Linguagem e Técnicas de Programação
**Professor:** Flores
**Turma:** ADS2A

### Integrantes

* RA-26013158-2 — Jackson Rodrigues
* RA-26013927-2 — Natan da Silva
* RA-26014123-2 — Gustavo Tristão
* RA-26014469-2 — Rafael Baliski

**Data:** 17 de Setembro de 2026

---

## Objetivo

O objetivo deste trabalho é praticar conceitos fundamentais da linguagem PHP, incluindo:

* Entrada de dados pelo terminal;
* Variáveis;
* Operadores aritméticos;
* Operadores de comparação;
* Estruturas condicionais;
* Estrutura `switch`;
* Vetores;
* Ordenação de valores;
* Validação de dados;
* Estruturas de repetição;
* Cálculos matemáticos.

---

## Exercícios Desenvolvidos

### Exercício 48

Leia três números reais e exiba o maior deles.

**Arquivo:**

```text
exercicio48.php
```

---

### Exercício 49

Leia três números e exiba os valores em:

* Ordem crescente;
* Ordem decrescente.

**Arquivo:**

```text
exercicio49.php
```

---

### Exercício 50

Leia cinco números e informe:

* Maior valor;
* Menor valor.

**Arquivo:**

```text
exercicio50.php
```

---

### Exercício 51

Leia três notas de um aluno e calcule a média utilizando apenas as duas maiores notas.

**Arquivo:**

```text
exercicio51.php
```

---

### Exercício 52

Leia:

* Um valor em Reais (BRL);
* A cotação do dólar (USD);

Depois, converta o valor informado para dólares.

**Arquivo:**

```text
exercicio52.php
```

---

### Exercício 53

Leia a altura e o sexo de uma pessoa e calcule seu peso ideal utilizando as fórmulas fornecidas no exercício.

Para homens:

```text
(72.7 * altura) - 58
```

Para mulheres:

```text
(62.1 * altura) - 44.7
```

**Arquivo:**

```text
exercicio53.php
```

---

### Exercício 54

Leia um número inteiro entre `1` e `7` e informe o dia da semana correspondente.

Exemplo:

```text
1 → Domingo
4 → Quarta-feira
```

**Arquivo:**

```text
exercicio54.php
```

---

### Exercício 55

Leia um número inteiro entre `1` e `12` e informe o mês correspondente por extenso.

**Arquivo:**

```text
exercicio55.php
```

---

### Exercício 56

Leia:

* O tipo de um veículo;
* A distância que será percorrida.

Tipos disponíveis:

| Tipo |   Consumo |
| ---- | --------: |
| A    | 13,5 Km/l |
| B    | 12,0 Km/l |
| C    | 10,5 Km/l |
| D    |  9,0 Km/l |
| E    |  7,5 Km/l |

O programa calcula a quantidade estimada de litros necessários para o trajeto.

**Arquivo:**

```text
exercicio56.php
```

---

### Exercício 57

Leia:

* Dia;
* Mês;
* Ano.

O programa verifica se a data informada é válida, considerando também anos bissextos.

**Arquivo:**

```text
exercicio57.php
```

---

### Exercício 58

Leia uma letra e informe se ela é:

* Vogal maiúscula;
* Vogal minúscula;
* Consoante.

**Arquivo:**

```text
exercicio58.php
```

---

### Exercício 59

Leia o ano de nascimento de um nadador e o ano atual.

O programa calcula sua idade e determina sua categoria:

| Idade            | Categoria  |
| ---------------- | ---------- |
| 0 a 4 anos       | Não aceito |
| 5 a 7 anos       | Infantil A |
| 8 a 10 anos      | Infantil B |
| 11 a 13 anos     | Juvenil A  |
| 14 a 17 anos     | Juvenil B  |
| Acima de 17 anos | Sênior     |

**Arquivo:**

```text
exercicio59.php
```

---

### Exercício 60

Leia a quantidade de habitantes de uma cidade.

Depois, utilize uma estrutura de repetição para solicitar a idade de cada habitante e calcular a média das idades.

Este exercício introduz o uso de estruturas de repetição em PHP.

**Arquivo:**

```text
exercicio60.php
```

---

# Tecnologias Utilizadas

* PHP
* PHP CLI
* Visual Studio Code
* XAMPP
* Git
* GitHub

---

# Requisitos

Para executar os exercícios é necessário possuir o **PHP instalado e configurado no PATH do Windows**.

Para verificar se o PHP está funcionando corretamente, abra o PowerShell e execute:

```powershell
php -v
```

Exemplo de saída:

```text
PHP 8.2.12 (cli)
```

---

# Estrutura do Projeto

```text
php60-exercicios/
│
├── exercicio48.php
├── exercicio49.php
├── exercicio50.php
├── exercicio51.php
├── exercicio52.php
├── exercicio53.php
├── exercicio54.php
├── exercicio55.php
├── exercicio56.php
├── exercicio57.php
├── exercicio58.php
├── exercicio59.php
├── exercicio60.php
└── README.md
```

---

# Como Executar

## 1. Abra o terminal

No Visual Studio Code:

```text
Terminal → Novo Terminal
```

---

## 2. Acesse a pasta do projeto

Caso o projeto esteja dentro do `htdocs` do XAMPP:

```powershell
cd C:\xampp\htdocs\php60-exercicios
```

---

## 3. Execute o exercício desejado

Exemplo:

```powershell
php exercicio48.php
```

Para executar outro exercício:

```powershell
php exercicio53.php
```

Ou:

```powershell
php exercicio60.php
```

---

# Exemplo de Execução

Executando:

```powershell
php exercicio48.php
```

O programa poderá solicitar:

```text
Digite o primeiro número: 10
Digite o segundo número: 25
Digite o terceiro número: 15
```

Resultado:

```text
O maior número é: 25
```

---

# Observação sobre números decimais

Em PHP, números decimais normalmente utilizam ponto:

```text
1.74
```

Em alguns exercícios o código pode tratar a vírgula digitada pelo usuário:

```text
1,74
```

convertendo-a internamente para:

```text
1.74
```

Isso evita problemas na leitura de valores decimais.

---

# Organização dos Arquivos

Cada exercício possui seu próprio arquivo PHP e contém um cabeçalho com:

* Curso;
* Disciplina;
* Professor;
* Turma;
* Componentes;
* Data;
* Descrição do exercício;
* Explicação da lógica utilizada.

Exemplo:

```php
/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2A

Componentes:
RA-26013158-2-Jackson Rodrigues
RA-26013927-2-Natan da Silva
RA-26014123-2-Gustavo Tristão
RA-26014469-2-Rafael Baliski

Data: 17 de Setembro de 2026

Descritivo:
Descrição do exercício.

Explicação:
Explicação de como o programa resolve o problema.
******************************************************************************/
```

---

## Autores

Trabalho desenvolvido por:

**Jackson Rodrigues**
**Natan da Silva**
**Gustavo Tristão**
**Rafael Baliski**

Curso de **Tecnologia em Análise e Desenvolvimento de Sistemas — ADS2A**.
