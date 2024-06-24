<?php

// require '../database/Database.php';

class Despesa
{
    private int $id;
    private float $valor;
    private string $descricao;
    private string $datas;
    private string $categoria;

    public function __construct(
        int $id,
        float $valor,
        string $descricao,
        string $datas,
        string $categoria
    ){
        $this->id = $id;
        $this->valor = $valor;
        $this->descricao = $descricao;
        $this->datas = $datas;
        $this->categoria = $categoria;
    }

    public function getID(): int
    {
        return $this->id;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getData(): string
    {
        return $this->datas;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }


}