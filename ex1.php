<?php

class Carro{
    public string $marca;
    public string $modelo;
    public int $ano;

    public function __construct(string $marca, string $modelo, int $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirInformacao(): string{
        return "O modelo do carro é {$this->modelo}, a marca dele é {$this->marca} e o ano dele é {$this->ano}.";
    }
}

$carro1 = new Carro('Peugeot', '208', 2010);
echo $carro1->exibirInformacao();

