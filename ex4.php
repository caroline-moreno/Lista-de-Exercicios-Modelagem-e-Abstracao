<?php

class Livro{
    public string $nome;
    public string $autor;
    public int $paginas;

    public function __construct(string $nome, string $autor, int $paginas)
    {
        $this->nome = $nome;
        $this->autor = $autor;
        $this->paginas = $paginas;

    }

    public function exibirResumo(): string{
        return "Nome do livro: {$this->nome}" . "<br>" . "Autor: {$this->autor}" . "<br>";
    }

    public function quantidadePaginas(): string{
        return "Quantidade de páginas: {$this->paginas}";
    }
}

$livro1 = new Livro('Histórias Extraordinárias', 'Edgar Allan Poe', 448);
echo $livro1->exibirResumo();
echo $livro1->quantidadePaginas();


