<?php
abstract Class Contrato
{
    protected $numRegistro;
    protected $partesEnvolvidas;
    protected $testemunha1;
    protected $testemunha2;
    protected $dataEmissao;
    protected $dataRegistro;
    protected $tabeliao;
    protected $cartorio;

    public function __construct($numRegistro, $partesEnvolvidas, $testemunha1, $testemunha2, $dataEmissao, $dataRegistro, $tabeliao, $cartorio)
    {
        $this->numRegistro = $numRegistro;
        $this->partesEnvolvidas = $partesEnvolvidas;
        $this->testemunha1 = $testemunha1;
        $this->testemunha2 = $testemunha2;
        $this->dataEmissao = $dataEmissao;
        $this->dataRegistro = $dataRegistro;
        $this->tabeliao = $tabeliao;
        $this->cartorio = $cartorio;
    }

    public function getNumRegistro()
    {
        return $this->numRegistro;
    }

    public function getPartesEnvolvidas()
    {
        return $this->partesEnvolvidas;
    }

    public function getTestemunha1()
    {
        return $this->testemunha1;
    }

    public function getTestemunha2()
    {
        return $this->testemunha2;
    }

    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    public function getDataRegistro()
    {
        return $this->dataRegistro;
    }

    public function getTabeliao()
    {
        return $this->tabeliao;
    }

    public function getCartorio()
    {
        return $this->dataCartorio;
    }

    abstract public function emitirContrato();
}