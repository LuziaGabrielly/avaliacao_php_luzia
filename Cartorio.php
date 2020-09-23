<?php
Class Cartorio
{
    private $nome;
    private $endereco;
    private $telefone;

    public function __construct($nome, $endereco, $telefone)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
}