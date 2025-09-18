<?php

class Produto{
    public string $nome;
    public float $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function aplicarDesconto(float $percentual): void{
        $desconto = $this->preco * ($percentual / 100);
        $this->preco -= $desconto;
    }

    public function exibirPreco(): string{
        return "O preço final do produto {$this->nome} é R$" . number_format($this->preco, 2, ',', '.');
    }
}

$produto1 = new Produto('RTX 4060', 2390.99);
$produto1->aplicarDesconto(10);
echo $produto1->exibirPreco();

