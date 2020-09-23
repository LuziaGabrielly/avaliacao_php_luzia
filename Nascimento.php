<?php
Class Nascimento extends Certidao
{
    private $nascido;
    private $pai;
    private $mae;
    private $dataNascimento;
    private $cidade;
    private $estado;

    public function __construct($numRegistro, $declarante, $dataEmissao, $tabeliao, $cartorio, $nascido, $pai, $mae, $dataNascimento, $cidade, $estado)
    {
        parent::__construct($numRegistro, $declarante, $dataEmissao, $tabeliao, $cartorio);
        $this->nascido = $nascido;
        $this->pai = $pai;
        $this->mae = $mae;
        $this->dataNascimento = $dataNascimento;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

    public function getNascido()
    {
        return $this->nascido;
    }


    public function getPai()
    {
        return $this->pai;
    }

    public function getMae()
    {
        return $this->mae;
    }


    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }


    public function getNumRegistro()
    {
        return $this->numRegistro;
    }


    public function getCidade()
    {
        return $this->cidade;
    }


    public function getEstado()
    {
        return $this->estado;
    }

    public function emitirCertidao()
    {
        echo ('Emitindo certidão de nascimento. <br>');
    }

}