<?php

class ContaBancaria {
    public string $titular;
    public float $saldo;

    public function __construct(string $titular, float $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar(float $valor): bool{
        if ($valor <= 0) {
            return false;
        } else {
            $novoSaldo = $this->saldo + $valor;
            $this->saldo = round($novoSaldo, 2);
            return true;
        }
    }

    public function sacar(float $valor): bool{
        if ($valor <= 0){
            echo "Valor informado inválido <br>";
            return false;
        }

        if ($valor > $this->saldo){
            echo "Saldo insuficiente <br>";
            return false;
        }

        $novoSaldo = $this->saldo - $valor;
        $this->saldo = round($novoSaldo, 2);
        return true;
    }

    public function exibirSaldo(): string{
        return "Nome do titular: {$this->titular}" . "<br>" . "Saldo: {$this->saldo}" . "<br>";
    }
}

$conta1 = new ContaBancaria('Caroline', 250.50);
$conta1->depositar(100.00);
$conta1->sacar(20.00);
echo $conta1->exibirSaldo();