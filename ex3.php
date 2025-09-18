<?php

class Aluno {
    public string $nome;
    public string $matricula;
    public array $notas;

    public function __construct(string $nome, string $matricula, array $notas)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->notas = $notas;
    }

    public function exibirDados(): string
    {
        return "Nome: {$this->nome}, Matrícula: {$this->matricula}" . "<br>";
    }

    public function calcularMedia(): float // forma de calcular média usando as funções array_sum e count
    {
        if (count($this->notas) === 0) {
            return 0.0;
        }
        
        $soma = array_sum($this->notas);
        return $soma / count($this->notas); 
    }

    // public function calcularMedia(): float // forma de calcular média usando o foreach e a função count
    // {
    //     if (count($this->notas) === 0) {
    //         return 0.0;
    //     }
        
    //     $soma = 0;

    //     foreach ($this-> notas as $nota) {
    //         $soma += $nota;
    //     }

    //     return $soma / count($this->notas);
    // }
}

$aluno1 = new Aluno('Caroline Moreno', '2026088', [8.0, 8.0, 9.5]);
echo $aluno1->exibirDados() . "\n";
echo "Média das notas: " . number_format($aluno1->calcularMedia(), 2, ',', '.');

